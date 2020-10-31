@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Calificacion academica</div>
                    <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <form method = "POST" action="/evaluars">
                            {{ csrf_field() }}
                        <thead>
                            <tr>Docente a evaluar</tr>
                            
                    </thead>
                    <tbody>
            <tr>
            <td>1. Actividades de docencia</td>
        </tr>
        <tr>
            <td><label for="tiempo_docencia">% Tiempo asignado a tareas programadas</label></td>
            <td><input type="text" class="form-control" id="tiempo_docencia" name="tiempo_docencia"></td>
        </tr>
        <tr>
            <td><label for="nota_docencia">Nota Docencia</label></td>
            <td><input type="text" class="form-control" id="nota_docencia" name="nota_docencia"></td>
        </tr>
        <tr>
            <td><label for="total_docencia">% T X C/100</label></td>
            <td><input type="text" class="form_control" id="total_docencia" name="total_docencia"></td>
        </tr>
        <tr>
            <td>2. Actividades de Investigacion</td>
        </tr>
    </tr>
    <tr>
        <td><label for="tiempo_investigacion">% Tiempo asignado a tareas programadas</label></td>
        <td><input type="text" class="form-control" id="tiempo_investigacion" name="tiempo_investigacion"></td>
    </tr>
    <tr>
        <td><label for="nota_investigacion">Nota Investigacion</label></td>
        <td><input type="text" class="form-control" id="nota_investigacion" name="nota_investigacion"></td>
    </tr>
    <tr>
        <td><label for="total_investigacion">% T X C/100</label></td>
        <td><input type="text" class="form_control" id="total_investigacion" name="total_investigacion"></td>
    </tr>
        <tr>
            <td>3. Extension y Vinculacion </td>
        </tr>
    <tr>
        <td><label for="tiempo_extencion">% Tiempo asignado a tareas programadas</label></td>
        <td><input type="text" class="form-control" id="tiempo_extencion" name="tiempo_extencion"></td>
    </tr>
    <tr>
        <td><label for="nota_extencion">Nota Extension</label></td>
        <td><input type="text" class="form-control" id="nota_extencion" name="nota_extencion"></td>
    </tr>
    <tr>
        <td><label for="total_extencion">% T X C/100</label></td>
        <td><input type="text" class="form_control" id="total_extencion" name="total_extencion"></td>
    </tr>
        <tr>
            <td>4. Administracion Academica </td>
        </tr>
    </tr>
    <tr>
        <td><label for="tiempo_administracion">% Tiempo asignado a tareas programadas</label></td>
        <td><input type="text" class="form-control" id="tiempo_administracion" name="tiempo_administracion"></td>
    </tr>
    <tr>
        <td><label for="nota_administracion">Nota Administracion academica</label></td>
        <td><input type="text" class="form-control" id="nota_administracion" name="nota_administracion"></td>
    </tr>
    <tr>
        <td><label for="total_administracion">% T X C/100</label></td>
        <td><input type="text" class="form_control" id="total_administracion" name="total_administracion"></td>
    </tr>
        <tr>
            <td>5. Otras actividades Realizadas </td>
        </tr>
    <tr>
        <td><label for="tiempo_otras">% Tiempo asignado a tareas programadas</label></td>
        <td><input type="text" class="form-control" id="tiempo_otras" name="tiempo_otras"></td>
    </tr>
    <tr>
        <td><label for="nota_otras">Nota Otras actividades realizadas</label></td>
        <td><input type="text" class="form-control" id="nota_otras" name="nota_otras"></td>
    </tr>
    <tr>
        <td><label for="total_otras">% T X C/100</label></td>
        <td><input type="text" class="form_control" id="total_otras" name="total_otras"></td>
    </tr>
            </div>
    </tbody>
</table>
    <div class="panel-body">
        <a>Nota:</a><br>
        
        <a>Escala: Excelente = 4,5 a 5 Muy bueno = 3,5 a 3,9</a><br>
        <a>Regular = 3,4 a 2,7 Deficiente = menos de 2,7</a>
    </div>
    <input type="submit" value="Ingresar evaluacion">
    </div>
    </div>
    </div>
    </div>
</div>
@endsection