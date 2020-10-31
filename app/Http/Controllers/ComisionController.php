<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comision;

class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comisions.create');
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
            'year' => 'required',
            'facultad' => 'required',
            'rut' => 'required',
            'decano' => 'required',
            'miembro_uno'=> 'required',
            'miembro_dos'=> 'required',
            'fecha_pie'=> 'required',
        ]);
        
        $comision = new Comision;
        $comision->year = request('year');
        $comision->facultad = request('facultad');
        $comision->rut = request('rut');
        $comision->decano = request('decano');
        $comision->miembro_uno = request('miembro_uno');
        $comision->miembro_dos = request('miembro_dos');
        $comision->fecha_pie = request('fecha_pie');
        $comision->save();

        return redirect('/comisions/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comisions = Comision::all();
        return view('comisions.show', compact('comisions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comision = Comision::find($id);
        return view('comisions.editar', compact('comision'));
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
        $this->validate(request(), [
            'year' => 'required',
            'facultad' => 'required',
            'rut' => 'required',
            'decano' => 'required',
            'miembro_uno'=> 'required',
            'miembro_dos'=> 'required',
            'fecha_pie'=> 'required',
        ]);
        
        $comision = Comision::find($id);
        $comision->year = request('year');
        $comision->facultad = request('facultad');
        $comision->rut = request('rut');
        $comision->decano = request('decano');
        $comision->miembro_uno = request('miembro_uno');
        $comision->miembro_dos = request('miembro_dos');
        $comision->fecha_pie = request('fecha_pie');
        $comision->save();

        return redirect('/comisions/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comision = Comision::finOrfail($id);
        $comision ->delete();

        return redirect('/comisions/show');
    }
}
