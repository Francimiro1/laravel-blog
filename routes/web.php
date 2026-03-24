<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KnjigaController;

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

// BLOK 2 ZADATAK 3

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

// BLOK 3 ZADATAK 1

Route::get('/knjige', [KnjigaController::class, 'index']);

// BLOK 3 ZADATAK 2

use App\Http\Controllers\FilmController;

Route::get('/filmovi', [FilmController::class, 'index'])->name('filmovi.index');
Route::get('/filmovi/{id}', [FilmController::class, 'show'])->name('filmovi.show');

// BLOK 3 ZADATAK 3

use App\Http\Controllers\ReceptiController;

Route::resource('recepti', ReceptiController::class);

// BLOK 4 ZADATAK 1


