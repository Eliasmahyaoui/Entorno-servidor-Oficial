<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class subjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:50',
            'cod' =>  'required|min:5|max:5|alpha_num',
            'cicle' => 'min10|max:50',
            'course' => 'required|date_format:2025>=2030',
        ];
    }
}
