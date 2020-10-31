<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academico;
use App\Departamento;

class AcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::all();
        $academicos = Academico::all();
        return view('academicos.create', compact ('academicos','departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $$request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'rut' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'titulo_profesional' => 'required',
            'grado_academico' => 'required',
            'departamento_id' => 'required',
            'categoria' => 'required',
            'horas' => 'required',
            'tipo_planta' => 'required',
            'estado' => 'required',
        ]);

        $academico = new Academico();
        $academico->rut = request('rut');
        $academico->nombre = request('nombre');
        $academico->apellido = request('apellido');
        $academico->titulo_profesional = request('titulo_profesional');
        $academico->grado_academico = request('grado_academico');
        $academico->departamento_id = request('departamento_id');
        $academico->categoria = request('categoria');
        $academico->horas = request('horas');
        $academico->tipo_planta = request('tipo_planta');
        $academico->estado = request('estado');
        $academico->save();

        return redirect('/academicos/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departamentos = Departamento::all();
        $academicos = Academico::all();
        return view('academicos.show', compact ('departamentos','academicos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $academico= Academico::find($id);
        $departamentos = Departamento::all();
        return view('academicos.editar', compact('departamentos', 'academicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $$request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'rut' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'titulo_profesional' => 'required',
            'grado_academico' => 'required',
            'departamento_id' => 'required',
            'categoria' => 'required',
            'horas' => 'required',
            'tipo_planta' => 'required',
            'estado' => 'required',
        ]);

        $academico = Academico::find($id);
        $academico->rut = request('rut');
        $academico->nombre = request('nombre');
        $academico->apellido = request('apellido');
        $academico->titulo_profesional = request('titulo_profesional');
        $academico->grado_academico = request('grado_academico');
        $academico->departamento_id = request('departamento_id');
        $academico->categoria = request('categoria');
        $academico->horas = request('horas');
        $academico->tipo_planta = request('tipo_planta');
        $academico->estado = request('estado');
        $academico->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academico = Academico::findOrfail($id);
        $academico ->delete();

        return redirect('/academicos/show');
    }
}
