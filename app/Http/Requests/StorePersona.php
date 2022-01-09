<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersona extends FormRequest
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
        return
        [
            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'fijo' => 'required',
            'celular' => 'required',
            'direccion' => 'required',
            'municipio' => 'required',
            'barrio' => 'required',
            'fechanac' => 'required',
            'estcivil' => 'required',
            'email' => 'required'
        ];
    }
    //!Personalizar mensajes en variables
    public function attributes()
    {
        return
        [
            'nombre' => 'nombre de la persona'
        ];
    }
    public function messages()
    {
        return
        [
            'barrio.required' => 'Debes ingresar un vividero guey'
        ];
    }
}
