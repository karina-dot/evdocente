<?php

namespace App\Http\Controllers;

use App\Evaluar;
use Illuminate\Http\Request;
use App\Academico;
use App\Comision;

class EvaluarController extends Controller
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
        return view('evaluars.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'nota_docencia' => 'required',
            'nota_investigación' => 'required',
            'nota_extencion' => 'required',
            'nota_administracion' => 'required',
            'nota_otras'=> 'required',
            'tiempo_docencia'=> 'required',
            'tiempo_investigación' => 'required',
            'tiempo_extencion'=> 'required',
            'tiempo_administracion' => 'required',
            'tiempo_otras'=> 'required',
            'total_docencia' => 'required',
            'total_investigación' => 'required',
            'total_extencion' => 'required',
            'total_administracion' => 'required',
            'total_otras' => 'required',
        ]);
            $evaluar = new Evaluar();
            $evaluar->nota_docencia = request('nota_docencia');
            $evaluar->nota_investigacion = request('nota_investigacion');
            $evaluar->nota_extencion = request('nota_extencion');
            $evaluar->nota_administracion = request('nota_administracion');
            $evaluar->nota_otras = request('nota_otras');
            $evaluar->tiempo_docencia = request('tiempo_docencia');
            $evaluar->tiempo_investigacion = request('tiempo_investigacion');
            $evaluar->tiempo_extencion = request('tiempo_extencion');
            $evaluar->tiempo_administracion = request('tiempo_administracion');
            $evaluar->tiempo_otras = request('tiempo_otras');
            $evaluar->total_docencia = request('total_docencia');
            $evaluar->total_investigacion = request('total_investigacion');
            $evaluar->total_extencion = request('total_extencion');
            $evaluar->total_administracion = request('total_administracion');
            $evaluar->total_otras = request('total_otras');
            $evaluar->save();
       
    
        return redirect('/evaluars/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluars = Evaluar::all();
        $academicos = Academico::all();
        $comisions = Comision::all();
        return view('evaluars.index', compact('evaluars','academicos','comisions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
