@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 5%">
                <div class="card-header">Realizacion evaluacion: docente</div>
                    <div class="card-body">
                        <li> <a>Identificacion</a><br>
                            @foreach ($academicos as $academico)
                            <td>{{$academico->nombre}}</td>
                            <td>{{$academico->rut}}</td>
                             @endforeach
                            <th><a href="/evaluars/create">Calificacion academica</a><br></th>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Argumentos de la calificacion final</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                            <table class="table">
                                <tr>
                            @foreach ($comisions as $comision)
                                        
                            <th scope="col">Miembro uno</th>
                            <td>{{$comision->miembro_uno}}</td>
                            <th scope="col">Decano</th>
                            <td>{{$comision->decano}}</td>
                            <th scope="col">Miembro dos</th>
                            <td>{{$comision->miembro_dos}}</td>
                            <input type="submit" value="Enviar">

                            @endforeach
                        </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection