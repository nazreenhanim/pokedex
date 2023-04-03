<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PokeAPIController extends Controller
{
    public function getPokemon()
    {
        $pokemon = Http::get(
            'https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0'
        );
        $data = $pokemon->json();

        return view('pokemon', ['pokemon' => $data['results']]);
    }

    public function getMonster()
    {
        $monster = Http::get('https://pokeapi.co/api/v2/pokemon/2');
        $data2 = $monster->json();

        return $data2;

        // return view('pokemon.id', ['monster' => $data2['abilities']]);
    }
}
