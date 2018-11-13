<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeaboutValidation extends FormRequest
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
            'titre' => 'required|max:50',
            'texte1'=> 'required|max:1000|min:100',
            'texte2'=> 'required|max:1000|min:100',
            'video'=> 'required',
        ];
    }
}
