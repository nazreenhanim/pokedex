<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PokeAPIController extends Controller
{
    public function show($name)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request(
            'GET',
            'https://pokeapi.co/api/v2/pokemon/' . $name
        );
        $pokemon = json_decode($response->getBody());

        return view('pokemon.show', compact('pokemon'));
    }
}
