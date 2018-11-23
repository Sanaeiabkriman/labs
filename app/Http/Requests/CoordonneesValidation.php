<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoordonneesValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titre1' => 'required|max:50',
            'texte'=> 'required|max:1000',
            'titre2'=> 'required|max:50',
            'adresse'=> 'required',
            'num'=> 'required',
            'mail'=> 'required|email|max:60',
        ];
    }
}
