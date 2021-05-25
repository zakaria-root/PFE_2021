<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class plRequest extends FormRequest
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
            'nomPlat' => ['required', 'string', 'max:255' ,'min:3'],
            'prix' => [ 'required','numeric'],
            'description' => ['required', 'string' ,'max:255' ,'min:3' ]
        ];

    }
}
