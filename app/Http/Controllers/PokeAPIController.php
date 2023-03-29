<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PokeAPIController extends Controller
{
    public function getPokemon()
    {
        $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon/');

        return json_decode($pokemon);

        // return view('pokemon', [
        //     'pokemon' => json_decode($pokemon),
        // ]);
    }
}
