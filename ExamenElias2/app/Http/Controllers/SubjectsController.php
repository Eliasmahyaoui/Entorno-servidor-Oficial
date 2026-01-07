<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SubjectsController extends Controller
{

    public function index():View
    {
        return view('subjects.index');
    }


    public function create():View
    {
        return view('subjects.create');
    }


    public function store(Request $request):View
    {
        $subject['name'] = $request->input('title');
        $subject['cod'] = $request->input('cod');
        $subject['cicle'] = $request->input('cicle');
        $subject['curse'] = $request->input('curse');

        return view('subjects.store', compact('subject'));
    }


    public function show(string $id):View
    {
        return view('subjects.show', compact($id));
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
