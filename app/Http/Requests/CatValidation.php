<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatValidation extends FormRequest
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
            'categorie'=> 'required|max:15',
            'etat'=> 'required|max:100',
        ];
    }
}