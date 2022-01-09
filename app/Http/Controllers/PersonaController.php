<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\StorePersona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::orderBy('id','desc')->paginate();

        //! PASAMOS LA VARIABLE PERSONA A UNA VISTA POR MEDIO DEL MÉTODO COMPACT()
        return view('personas.index',compact('personas'));
    }
    public function create()
    {
        return view('personas.create');
    }
    public function show(Persona $persona)
    {
        return view('personas.show',compact('persona'));
    }
    public function store(StorePersona $request)
    {

        /* $persona = Persona::create
        ([
            'cedula' => $request->cedula,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'fijo' => $request->fijo,
            'celular' => $request->celular,
            'direccion' => $request->direccion,
            'municipio' => $request->municipio,
            'barrio' => $request->barrio,
            'fechanac' => $request->fechanac,
            'estcivil' => $request->estcivil,
            'email' => $request->email
        ]); */
        $persona = Persona::create($request->all());
        //! Podriamos no enviar el ID como parametro ya que LARAVEL lo reconoce de manera automatica
        /* return redirect()->route('personas.show',$persona->id); */
        return redirect()->route('personas.show',$persona);
    }
    //! podriamos definir el parametro como tipo objeto de la clase en cuestión y nos evitariamos la consulta, de la siguiente manera
    public function edit(Persona $persona)
    {
        /* $persona = Persona::find($id);
        return $persona; */
        return view('personas.edit',compact('persona'));
    }
    public function update(Request $request,Persona $persona)
    {

        $request->validate
        ([
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
        ]);

            /* $persona->cedula = $request->cedula;
            $persona->nombre = $request->nombre;
            $persona->apellido = $request->apellido;
            $persona->fijo = $request->fijo;
            $persona->celular = $request->celular;
            $persona->direccion = $request->direccion;
            $persona->municipio = $request->municipio;
            $persona->barrio = $request->barrio;
            $persona->fechanac = $request->fechanac;
            $persona->estcivil = $request->estcivil;
            $persona->email = $request->email;
            $persona->save(); */

            $persona->update($request->all());

        return redirect()->route('personas.show',$persona);
    }
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index');
    }

}
