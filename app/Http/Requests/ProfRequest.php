<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfRequest extends FormRequest
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
            'departement_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'le champ nom est obligatoire',
            'prenom.required' => 'le champ prenom est obligatoire',
            'departement_id.required' => 'le champ departement est obligatoire',
        ];
    }
}
