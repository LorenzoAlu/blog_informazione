<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nome'=>'required|min:3|max:20',
            'email'=> 'required',
            'messaggio'=>'required|max:5000'
        ];
    }

    public function messages(){
        return [
            'nome.required'=>'Il nome è obbligatorio merda!',
            'nome.min'=>'Il nome deve contenere almeno 3 caratteri,merda!',
            'nome.max'=>'Il nome non deve contenere più di 20 caratteri,merda!',
            'email.required'=> "L'email è obbligatorio merda!",
            'messaggio.required'=>'Il messaggio è obbligatorio merda!',
            'messaggio.max'=>'Non mi devi scrivere papiri,coglione!'

        ];
    }
}
