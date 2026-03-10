<?php

use Illuminate\Support\Facades\Route;

Route::get('/clanak', function () {
    return view('clanak', [
        'naslov'     => 'Uvod u Laravel',
        'sadrzaj'    => 'Laravel je najpopularniji PHP framework...',
        'objavljen'  => true,
        'komentara'  => 0,
        'autor'      => 'Ana Horvat',
    ]);
});


//ZADATAK 1

Route::get('/', function () {
    return view('skola', [
        'ime_skole' => 'Moja Škola',
        'predmeti' => ['Matematika', 'Fizika', 'Kemija']
    ]);
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

// BLOK 2 ZADATAK 1
Route::get('/knjige', function () {

    $knjige = [
        ['naslov'=>'Na Drini ćuprija','autor'=>'Ivo Andrić','godina'=>1945,'procitana'=>true],
        ['naslov'=>'Zločin i kazna','autor'=>'Dostojevski','godina'=>1866,'procitana'=>true],
        ['naslov'=>'1984','autor'=>'George Orwell','godina'=>1949,'procitana'=>false],
        ['naslov'=>'Mali princ','autor'=>'Antoine de Saint-Exupéry','godina'=>1943,'procitana'=>true],
        ['naslov'=>'Alkemičar','autor'=>'Paulo Coelho','godina'=>1988,'procitana'=>false],
    ];

    $procitano = 0;

    foreach ($knjige as $k) {
        if ($k['procitana']) {
            $procitano++;
        }
    }

    $ukupno = count($knjige);

    return view('knjige', compact('knjige','procitano','ukupno'))
        ->with('aktivnaStrana','knjige');
});

// BLOK 2 ZADATAK 2
Route::get('/automobili', function () {

    $automobili = [
        ['marka'=>'BMW','model'=>'X5','godina'=>2020],
        ['marka'=>'Audi','model'=>'A4','godina'=>2019],
    ];

    return view('automobili', [
        'automobili' => $automobili,
        'aktivnaStrana' => 'automobili'
    ]);
});


Route::get('/studenti', function () {

    $studenti = [
        ['ime'=>'Ivan','godina'=>1,'polozio'=>true],
        ['ime'=>'Ana','godina'=>2,'polozio'=>false],
    ];

    return view('studenti', [
        'studenti' => $studenti,
        'aktivnaStrana' => 'studenti'
    ]);
});


Route::get('/kontakt', function () {
    return view('kontakt', [
        'aktivnaStrana' => 'kontakt'
    ]);
});

Route::get('/raspored', function () {

    $raspored = [
        'Ponedjeljak' => ['Matematika', 'Programiranje', 'Baze podataka'],
        'Utorak' => ['Engleski', 'Operacijski sustavi'],
        'Srijeda' => ['Web programiranje', 'Algoritmi'],
        'Četvrtak' => ['Računalne mreže', 'Programiranje'],
        'Petak' => ['Projekt', 'Tjelesni']
    ];

    return view('raspored', [
        'raspored' => $raspored,
        'aktivnaStrana' => 'raspored'
    ]);
});