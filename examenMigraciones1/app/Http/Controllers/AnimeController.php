<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnimeController extends Controller
{

    public function index():View
    {
        $animes = Anime::orderBy('release_year', 'desc')
            ->orderBy('title', 'asc')
            ->get();
        return view('Anime.index', compact('animes'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Anime $anime):View
    {

        return view('Anime.show', compact('anime'));
    }


    public function edit(Anime $anime)
    {
        //
    }


    public function update(Request $request, Anime $anime)
    {
        //
    }


    public function destroy(Anime $anime)
    {
        //
    }
}
