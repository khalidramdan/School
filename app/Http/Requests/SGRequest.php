<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SGRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom'=>'required',
            'prenom'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'le champ nom est obligatoire',
            'prenom.required' => 'le champ prenom est obligatoire',
        ];
    }
}
