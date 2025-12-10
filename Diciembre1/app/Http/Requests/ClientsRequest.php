<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }



    public function rules(): array
    {
        return [
            
            'dni' => 'required|min:9',
            'nombre' => 'required|alpha.ascii',
            'apellido1' => 'required|alpha.ascii',
            'apellido2' => 'required|alpha.ascii',

        ];
    }

    public function message()
    {
        return [
            'dni.required' => 'El dni es obligatorio',
            'dni.min' => 'El dni tiene que tener minimo 9 caracteres',
            'nombre.required' => 'El dni es obligatorio',
            'apellido1.required' => 'El apellido1 es obligatorio',
            'apellido1.alpha.ascii' => 'El apellido1 debe de contener letras',
            'apellido2.required' => 'El apellido2 es obligatorio',
            'apellido2.alpha.ascii' => 'El apellido2 debe de contener letras '

        ];
    }
}
