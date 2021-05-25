<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class emRequest extends FormRequest
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
            'nomEmploye' => ['required', 'string', 'max:255' ,'min:3'],
            'prenomEmploye' => ['required', 'string', 'max:255' ,'min:3'],
            'adressEmploye' => ['required', 'string', 'max:255' ,'min:3' ],
            'fonction' => ['required', 'string', 'max:255' ,'min:3'],
            'salaire' => ['required', 'numeric'],
            'commission' => ['required', 'numeric' ],
            'cafe' =>  ['required' ],
        ];
    }
}
