<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'=> 'required|min:10|max:50',
            'cod' => 'required|min:5|alpha_num',
            'cicle' =>'min:10|max:50',
            'curse'=> 'required|date_format:2025>=2030'
            

        ];
    }
}
