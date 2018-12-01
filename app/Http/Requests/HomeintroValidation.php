<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeintroValidation extends FormRequest
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
            'texte' => 'required|max:50',
            'bg1'=> 'required|mimes:jpeg,bmp,png',
            'bg2'=> 'required|mimes:jpeg,bmp,png',
        ];
    }
}
