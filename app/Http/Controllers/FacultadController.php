<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facultad;

class FacultadController extends Controller
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
        return view('facultads.create');
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
            'nombre' => 'required',
            'decano' => 'required',
        ]);

        $facultad = new Facultad;
        $facultad->nombre = request('nombre');
        $facultad->decano = request('decano');
        $facultad->save();

        return redirect('/facultads/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facultads = Facultad::all();
        return view('facultads.show', compact('facultads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facultad = Facultad::find($id);
        return view('facultads.editar', compact('facultad'));
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
            'nombre' => 'required',
            'decano' => 'required',
        ]);

        $facultad = Facultad::find($id);
        $facultad->nombre = request('nombre');
        $facultad->decano = request('decano');
        $facultad->save();
        
        return redirect('/facultads/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facultad = Facultad::findOrfail($id);
        $facultad ->delete();

        return redirect('/facultads/show');
    }
}
