<?php

namespace App\Http\Controllers;

use App\Profesor;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Validator;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $profesores = Profesor::join("genero","genero.id", "=", "profesors.genero_id")
        ->select(
                    "profesors.id as id",
                    "profesors.nombre as nombre",
                    "profesors.ap_paterno as ap_paterno",
                    "profesors.ap_materno as ap_materno",
                    "profesors.genero_id as genero_id",
                    "genero.nombre as genero",
                    "profesors.red_social as red_social",
                    "profesors.telefono as telefono"
                )
        ->where("profesors.estado",1)
        ->get();

            if($request->ajax()){
                return $profesores->toJson();
            }

        return view('profesores');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $this->validate($request, [
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => '',
            'genero_id' => 'required',
            'telefono' => '',
            'red_social' => '',
        ]);
        
        $profesor = new Profesor;
        $profesor->nombre = $request->nombre;
        $profesor->ap_paterno = $request->ap_paterno;
        $profesor->ap_materno = $request->apMap_maternoaterno;
        $profesor->genero_id = $request->genero_id;
        $profesor->telefono = $request->telefono;
        $profesor->red_social = $request->red_social;
        $profesor->estado = 1;
        $profesor->save();
    
        // dd($profesor);
        // return Redirect::to('profesores')->with('notice', 'El profesor ha sido creado correctamente.');
        return '{"msg":"¡Éxito! Se ha creado un nuevo registro de Profesor"}';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        // $profesor = Profesor::where('id',$request->id)->first();
        // $profesor->nombre = $request->nombre;
        // $profesor->ap_paterno = $request->ap_paterno;
        // $profesor->ap_materno = $request->ap_materno;
        // $profesor->genero_id = $request->genero_id;
        // $profesor->telefono = $request->telefono;
        // $profesor->red_social = $request->red_social;
        // $profesor->save();

        // return '{"msg":"Profesor actualizado con éxito"}';

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesor)
    {
        $profesor = Profesor::where('id',$request->id)->first();
        $profesor->nombre = $request->nombre;
        $profesor->ap_paterno = $request->ap_paterno;
        $profesor->ap_materno = $request->ap_materno;
        $profesor->genero_id = $request->genero_id;
        $profesor->telefono = $request->telefono;
        $profesor->red_social = $request->red_social;
        $profesor->save();

        return '{"msg":"¡Éxito! Se actualizó la información del Profesor."}';
    }

    public function delete(Request $request)
    {
        $profesor = Profesor::where('id',$request->id)->first();
        $profesor->estado = 2;
        $profesor->save();
        
        return '{"msg":" ¡Éxito! El Profesor se ha eliminado."}';

    }

    public function destroy($id)
    {
        $profesor = Profesor::find($id);
        $profesor->delete();

        return '{"msg":" ¡Éxito! El Profesor se ha eliminado permanentemente."}';

    }

   
}
