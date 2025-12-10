<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientesController extends Controller
{

    public function index():View
    {
        return view('Clients.index');
    }


    public function create(): View
    {
        return view('Clients.create');
    }


    public function store(Request $request)
    {
        $client['DNI'] = $request->input('dni');
        $client['nombre'] = $request->input('nombre');
        $client['apellido1'] = $request->input('apellido1');
        $client['apellido2'] = $request->input('apellido2');
        $client['email'] = $request->input('email');


        return view('Clients.store', compact('clients'));

    }


    public function show(Clients $clientes):View
    {
        return  view('Clients.show');
    }


    public function edit(Clients $clientes)
    {
        //
    }



    public function update(Request $request, Clients $clientes)
    {
        //
    }


    public function destroy(Clients $clientes)
    {
        //
    }
}
