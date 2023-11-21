<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
            'title' => 'required|max:255',
            'year' => 'required|max_digits:4',
            'develope' => 'required|max:255',
            'description' => 'required|min:100|max:500',
            'category_id' => 'required'
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Campo obbligatorio',
            'title.max' => 'massimo 255 caratteri',
            'year.required'=>'Campo Obbligatorio',
            'category_id.required'=>'Campo Obbligatorio',
            'year.max_digits'=> "Il campo deve contenere l'anno di uscita del gioco",
            'description.required'=>'Campo obbligatorio',
            'description.min'=>'La descrizione deve contenere minimo 100 caratteri',
            'description.max'=>'La descrizione deve contenere massimo 500 caratteri'
        ];
    }
}
