const GRAMS_TO_POUNDS = 0.00220462;

const materialBasisWeights = {
    EPS: 8,
    PP: 24,
    PET: 26,
    "Molded Fiber": 24,
};

const materialRates = {
    EPS: { OR: 1.38, CO: 1.72, CALow: 0.47, CAHigh: 1.27 },
    PP: { OR: 0.62, CO: 0.2, CALow: 0.12, CAHigh: 0.36 },
    PET: { OR: 0.57, CO: 0.5, CALow: 0.12, CAHigh: 0.36 },
    "Molded Fiber": { OR: 0.08, CO: 0.13, CALow: 0.02, CAHigh: 0.05 },
};

const componentRates = {
    "PP Flexible Film": { OR: 1.02, CO: 0.64, CALow: 0.31, CAHigh: 0.8 },
    "Plastic Laminates": { OR: 1.02, CO: 0.74, CALow: 0.57, CAHigh: 1.48 },
};

const reuseInvestmentFee = { low: 0.04, high: 0.1 };
const ppmfWeightFee = { low: 0.17, high: 0.25 };
const ppmfComponentFee = { low: 0.001, high: 0.0012 };

const materialLabels = {
    EPS: "EPS",
    PP: "PP",
    PET: "PET",
    "Molded Fiber": "COPAR (Molded Fiber)",
};

function comparisonMaterials(referenceMaterial) {
    return referenceMaterial === "PP"
        ? ["PP", "Molded Fiber"]
        : [referenceMaterial, "Molded Fiber"];
}

function componentMaterialFor(referenceMaterial) {
    return referenceMaterial === "EPS" || referenceMaterial === "PET"
        ? "PP Flexible Film"
        : "Plastic Laminates";
}

function componentWeightGrams(convertedTrayWeight, componentMaterial) {
    if (componentMaterial === "PP Flexible Film") {
        if (convertedTrayWeight <= 30) {
            return 1.5;
        }

        return convertedTrayWeight <= 40 ? 2.5 : 3.5;
    }

    if (convertedTrayWeight <= 30) {
        return 6;
    }

    return convertedTrayWeight <= 40 ? 7 : 8;
}

function calculateFees(material, trayWeightGrams, annualTrays, referenceMaterial) {
    const convertedTrayWeight = trayWeightGrams * materialBasisWeights[material] / materialBasisWeights[referenceMaterial];
    const trayWeightPounds = convertedTrayWeight * GRAMS_TO_POUNDS;
    const rates = materialRates[material];

    if (material !== "Molded Fiber") {
        return {
            OR: trayWeightPounds * rates.OR * annualTrays,
            CO: trayWeightPounds * rates.CO * annualTrays,
            CALow: trayWeightPounds * (rates.CALow + reuseInvestmentFee.low + ppmfWeightFee.low) * annualTrays + ppmfComponentFee.low * annualTrays,
            CAHigh: trayWeightPounds * (rates.CAHigh + reuseInvestmentFee.high + ppmfWeightFee.high) * annualTrays + ppmfComponentFee.high * annualTrays,
        };
    }

    const componentMaterial = componentMaterialFor(referenceMaterial);
    const componentPounds = componentWeightGrams(convertedTrayWeight, componentMaterial) * GRAMS_TO_POUNDS;
    const componentRate = componentRates[componentMaterial];

    return {
        OR: trayWeightPounds * rates.OR * annualTrays + componentPounds * componentRate.OR * annualTrays,
        CO: trayWeightPounds * rates.CO * annualTrays + componentPounds * componentRate.CO * annualTrays,
        CALow: trayWeightPounds * rates.CALow * annualTrays + componentPounds * (componentRate.CALow + reuseInvestmentFee.low + ppmfWeightFee.low) * annualTrays + ppmfComponentFee.low * annualTrays,
        CAHigh: trayWeightPounds * rates.CAHigh * annualTrays + componentPounds * (componentRate.CAHigh + reuseInvestmentFee.high + ppmfWeightFee.high) * annualTrays + ppmfComponentFee.high * annualTrays,
    };
}

function money(value) {
    return "$" + Math.round(value).toLocaleString();
}

function cents(value) {
    return (value * 100).toFixed(2) + "\u00A2";
}

function materialCell(material) {
    const label = materialLabels[material];

    if (material === "Molded Fiber") {
        return `<span class="font-medium text-green">${label}</span>`;
    }

    return label;
}

function resultRow(material, fees, formatter, annualTrays) {
    const highlight = material === "Molded Fiber" ? "bg-[#EAF3DE]" : "";
    const format = (value) => formatter === "cents" ? cents(value / annualTrays) : money(value);

    return `<tr class="border-b border-rule ${highlight}">
        <td class="py-4 pl-4 pr-6 font-sans text-[14px] text-ink">${materialCell(material)}</td>
        <td class="py-4 px-4 text-right font-mono text-[14px] text-ink">${format(fees.OR)}</td>
        <td class="py-4 px-4 text-right font-mono text-[14px] text-ink">${format(fees.CO)}</td>
        <td class="py-4 px-4 text-right font-mono text-[14px] text-ink">${format(fees.CALow)}</td>
        <td class="py-4 px-4 pr-4 text-right font-mono text-[14px] text-ink">${format(fees.CAHigh)}</td>
    </tr>`;
}

function parseAnnualTrays(value) {
    return parseInt(value.replace(/,/g, ""), 10) || 1000000;
}

function updateCalculator() {
    const materialInput = document.getElementById("refMaterial");
    const weightInput = document.getElementById("trayWeight");
    const traysInput = document.getElementById("numTrays");
    const totalBody = document.getElementById("totalFeeBody");
    const perTrayBody = document.getElementById("perTrayFeeBody");

    if (!materialInput || !weightInput || !traysInput || !totalBody || !perTrayBody) {
        return;
    }

    const referenceMaterial = materialInput.value;
    const trayWeight = parseFloat(weightInput.value) || 30;
    const annualTrays = parseAnnualTrays(traysInput.value);
    const materials = comparisonMaterials(referenceMaterial);
    const fees = {};

    materials.forEach((material) => {
        fees[material] = calculateFees(material, trayWeight, annualTrays, referenceMaterial);
    });

    totalBody.innerHTML = materials
        .map((material) => resultRow(material, fees[material], "money", annualTrays))
        .join("");

    perTrayBody.innerHTML = materials
        .map((material) => resultRow(material, fees[material], "cents", annualTrays))
        .join("");

    const currentFees = fees[referenceMaterial];
    const coparFees = fees["Molded Fiber"];
    const currentCaliforniaMidpoint = (currentFees.CALow + currentFees.CAHigh) / 2;
    const coparCaliforniaMidpoint = (coparFees.CALow + coparFees.CAHigh) / 2;

    document.getElementById("savingsOR").textContent = money(currentFees.OR - coparFees.OR);
    document.getElementById("savingsCO").textContent = money(currentFees.CO - coparFees.CO);
    document.getElementById("savingsCA").textContent = money(currentCaliforniaMidpoint - coparCaliforniaMidpoint);
}

function formatAnnualTraysInput(input) {
    const digits = input.value.replace(/[^0-9]/g, "");
    input.value = digits ? parseInt(digits, 10).toLocaleString() : "";
}

function initEprCalculator() {
    const materialInput = document.getElementById("refMaterial");
    const weightInput = document.getElementById("trayWeight");
    const traysInput = document.getElementById("numTrays");

    if (!materialInput || !weightInput || !traysInput) {
        return;
    }

    materialInput.addEventListener("change", updateCalculator);
    weightInput.addEventListener("input", updateCalculator);
    traysInput.addEventListener("input", () => {
        formatAnnualTraysInput(traysInput);
        updateCalculator();
    });

    updateCalculator();
}

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initEprCalculator);
} else {
    initEprCalculator();
}
