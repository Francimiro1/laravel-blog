<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    $naslov = 'Moj sjajni blog';
    $clanci = ['Uvod u Laravel', 'PHP osnove', 'MySQL za početnike'];

    return view('blog', [
        'naslov' => $naslov,
        'clanci' => $clanci,
    ]);
});

Route::get('/pozdrav/{ime}', function ($ime) {
    return 'Pozdrav, ' . $ime . '! Dobrodošli u Laravel.';
});

Route::get('/api/automobili', function () {
    return response()->json([
        [
            'id'      => 1,
            'marka'   => 'Volkswagen',
            'model'   => 'Golf',
            'godina'  => 2022,
        ],
        [
            'id'      => 2,
            'marka'   => 'Toyota',
            'model'   => 'Corolla',
            'godina'  => 2021,
        ],
        [
            'id'      => 3,
            'marka'   => 'BMW',
            'model'   => '3 Series',
            'godina'  => 2023,
        ],
    ]);
});


//ZADATAK 1

Route::get('/', function () {
    return view('skola', [
        'ime_skole' => 'Moja Škola',
        'predmeti' => ['Matematika', 'Fizika', 'Kemija']
    ]);
});

Route::get('/automobili', function () {
    return view('automobili');
});

Route::get('/povrce', function () {
    $povrce = ['Krumpir', 'Mrkva', 'Luk', 'Rajčica'];
    return view('povrce', compact('povrce'));
});

Route::get('/omeni', function () {
    return view('omeni', [
        'ime' => 'Vaše Ime',
        'razred' => '4. razred',
        'omiljeni_predmet' => 'Informatika'
    ]);
});
