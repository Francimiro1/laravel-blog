<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    private $filmovi = [
        1 => [
            'naslov' => 'Inception',
            'redatelj' => 'Christopher Nolan',
            'godina' => 2010,
            'opis' => 'Film o kradljivcu koji ulazi u snove kako bi ukrao tajne.'
        ],
        2 => [
            'naslov' => 'The Matrix',
            'redatelj' => 'Lana i Lilly Wachowski',
            'godina' => 1999,
            'opis' => 'Programer otkriva da je stvarnost zapravo simulacija.'
        ],
        3 => [
            'naslov' => 'Interstellar',
            'redatelj' => 'Christopher Nolan',
            'godina' => 2014,
            'opis' => 'Ekipa astronauta putuje kroz crvotočinu u potrazi za novim domom.'
        ],
        4 => [
            'naslov' => 'Gladiator',
            'redatelj' => 'Ridley Scott',
            'godina' => 2000,
            'opis' => 'Rimski general postaje gladijator kako bi se osvetio caru.'
        ],
        5 => [
            'naslov' => 'Titanic',
            'redatelj' => 'James Cameron',
            'godina' => 1997,
            'opis' => 'Ljubavna priča na brodu Titanic prije njegovog potonuća.'
        ],
        6 => [
            'naslov' => 'Avatar',
            'redatelj' => 'James Cameron',
            'godina' => 2009,
            'opis' => 'Marinac istražuje planet Pandoru kroz avatar tijelo.'
        ],
    ];

    public function index()
    {
        $filmovi = $this->filmovi;
        return view('filmovi.index', compact('filmovi'));
    }

    public function show(int $id)
    {
        $film = $this->filmovi[$id] ?? null;

        if (!$film) {
            abort(404);
        }

        return view('filmovi.show', compact('film'));
    }
}