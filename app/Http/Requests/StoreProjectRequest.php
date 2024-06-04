<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required'|'unique:projects'|'max:255',
            'link'=>'required'|'unique:projects'|'max:255',
            'technology'=>'max:255','nullable',
            'description'=>'required'|'unique:projects'|'max:255',
            'date_creation'=>'max:255','nullable',
            'img'=>'image'|'nullable'
        ];
    }
}