<?php

namespace App\Http\Controllers;

use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SpaceController extends Controller
{

    public function index():View
    {
        return view('Spaces.index');
    }


    public function create():View
    {
        return view('Spaces.create');
    }


    public function store(Request $request)
    {

        $space['edificio'] = $request->input('dni');
        $space['piso'] = $request->input('nombre');
        $space['codEntrada'] = $request->input('codEntrada');

        return view('Spaces.store', compact('space'));


    }


    public function show(Space $space):View
    {
        return view('Spaces.show');
    }


    public function edit(Space $space)
    {
        //
    }


    public function update(Request $request, Space $space)
    {
        //
    }


    public function destroy(Space $space)
    {
        //
    }
}
