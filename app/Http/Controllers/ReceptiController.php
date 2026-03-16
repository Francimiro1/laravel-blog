<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptiController extends Controller
{
    public function index()
    {
        $recepti = [
            ['naziv' => 'Čokoladna torta', 'kategorija' => 'desert'],
            ['naziv' => 'Palačinke', 'kategorija' => 'desert'],
            ['naziv' => 'Pizza', 'kategorija' => 'glavno'],
            ['naziv' => 'Pečena piletina', 'kategorija' => 'glavno'],
            ['naziv' => 'Cezar salata', 'kategorija' => 'salata'],
        ];

        $kategorija = request('kategorija');

        if ($kategorija) {
            $recepti = array_filter($recepti, function ($recept) use ($kategorija) {
                return $recept['kategorija'] === $kategorija;
            });
        }

        return view('recepti.index', compact('recepti', 'kategorija'));
    }

    public function create(){}
    public function store(Request $request){}
    public function show(string $id){}
    public function edit(string $id){}
    public function update(Request $request, string $id){}
    public function destroy(string $id){}
}