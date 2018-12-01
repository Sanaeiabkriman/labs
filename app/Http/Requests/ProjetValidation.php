<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetValidation extends FormRequest
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
            'icone' => 'required|max:50',
            'titre'=> 'required|max:50',
            'texte'=> 'required|max:100',
            'image'=>'required|mimes:jpeg,bmp,png',
        ];
    }
}
