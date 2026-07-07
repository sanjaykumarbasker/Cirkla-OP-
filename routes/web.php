<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'cirkla.pages.home');
Route::redirect('index.htm', '/');

$pages = [
    'technology' => 'technology',
    'technology.html' => 'technology',
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
    'solutions/laminated-trays' => 'technology',
    'solutions/laminated-trays.html' => 'technology',
    'solutions/meat-trays' => 'meat-protein',
    'solutions/meat-trays.html' => 'meat-protein',
    'solutions/rte-trays' => 'ready-meals',
    'solutions/rte-trays.html' => 'ready-meals',
    'solutions/fresh-produce' => 'produce',
    'solutions/fresh-produce.html' => 'produce',
    'solutions/special-trays' => 'custom',
    'solutions/special-trays.html' => 'custom',
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
