<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MPersonnelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'matricule'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'cin'=>'required',
            'poste'=>'required',
            'image'=>'required',
        ];
    }

    public function messages(){
        return[

            'matricule.required'=>'le Matricule est requis',
            'matricule.unique'=>'le numero matricule est déja utiliser',
            'prenom.required'=>' prenom  est requis',
            'telephone.required'=>'le  telephone   est requis',
            'email.required'=>' email   est requis',
            'cin.required'=>'le  cin   est requis',
            'poste.unique'=>'le numero  poste est déja utiliser',

            'poste.required'=>'l poste est requis',
            'image.required' => 'L\'image est requise',

        ];
    }
}
