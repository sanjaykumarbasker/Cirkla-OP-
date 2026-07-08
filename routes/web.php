<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'cirkla.pages.home');
Route::redirect('index.htm', '/');

$pages = [
    'technology' => 'technology',
    'technology.html' => 'technology',
    'standard-trays' => 'standard-trays',
    'standard-trays.html' => 'standard-trays',
    'epr' => 'epr',
    'epr.html' => 'epr',
    'contact' => 'contact',
    'certifications' => 'certifications',
    'news-and-events' => 'news-and-events',
    'news-and-events.html' => 'news-and-events',
];

foreach ($pages as $uri => $view) {
    Route::view($uri, "cirkla.pages.{$view}");
}

$trayPages = [
    'solutions/laminated-trays' => 'laminated-trays',
    'solutions/laminated-trays.html' => 'laminated-trays',
    'solutions/meat-trays' => 'meat-protein',
    'solutions/meat-trays.html' => 'meat-protein',
    'solutions/rte-trays' => 'ready-meals',
    'solutions/rte-trays.html' => 'ready-meals',
    'solutions/fresh-produce' => 'produce',
    'solutions/fresh-produce.html' => 'produce',
    'solutions/confectionery-trays' => 'map-vsp',
    'solutions/confectionery-trays.html' => 'map-vsp',
    'solutions/special-trays' => 'map-vsp',
    'solutions/special-trays.html' => 'map-vsp',
    'solutions/unlaminated-trays' => 'overwrap',
    'solutions/unlaminated-trays.html' => 'overwrap',
];

foreach ($trayPages as $uri => $view) {
    Route::view($uri, "cirkla.pages.{$view}");
}

$solutions = [
    'meat-protein',
    'ready-meals',
    'produce',
    'custom',
    'map-vsp',
    'overwrap',
];

foreach ($solutions as $slug) {
    Route::view("solutions/{$slug}", "cirkla.pages.{$slug}");
    Route::view("solutions/{$slug}.html", "cirkla.pages.{$slug}");
}

Route::view('solutions/map-vsp.html.html', 'cirkla.pages.map-vsp');
Route::view('solutions/overwrap.html.html', 'cirkla.pages.overwrap');
