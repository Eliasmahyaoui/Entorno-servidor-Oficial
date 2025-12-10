<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpaceRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'edificio' => 'required|string|min:9',
            'piso' => 'required|string',
            'codEntrada' => 'required|string',


        ];
    }

    public function message()
    {
        return [
            'edificio.required' => 'El dni es obligatorio',
            'edificio.string' => 'El edificio debe de contener letras',
            'edificio.min' => 'El edificio tiene que tener minimo 9 caracteres',
            'piso.required' => 'El piso es obligatorio',
            'piso.string' => 'El piso debe de contener letras ',
            'codEntrada.required' => 'El codEntrada es obligatorio',
            'codEntrada.string' => 'El codEntrada debe de contener letras ',


        ];
    }
}
