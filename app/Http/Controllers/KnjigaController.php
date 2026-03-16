<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnjigaController extends Controller
{
    public function index()
    {
        $knjige = [
            ['naslov'=>'Na Drini ćuprija','autor'=>'Ivo Andrić','godina'=>1945],
            ['naslov'=>'Zločin i kazna','autor'=>'Fjodor Dostojevski','godina'=>1866],
            ['naslov'=>'1984','autor'=>'George Orwell','godina'=>1949],
            ['naslov'=>'Mali princ','autor'=>'Antoine de Saint-Exupéry','godina'=>1943],
            ['naslov'=>'Proces','autor'=>'Franz Kafka','godina'=>1925],
        ];

        return view('knjige.index', compact('knjige'));
    }
}