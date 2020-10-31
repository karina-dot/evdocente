@extends('layout.master')

@section('content')
<div class="card" style="margin: 5%;">
    <div class="card-header">
      Reportes
  <table class="table" >
      <thead class="thead-dark">
        <tr>
          <th scope="col">Año</th>
        <th scope="col">Pdf</th>
          <th scope="col">Excel</th>
          <th scope="col">Firma</th>
          <th scope="col"><form>
            <div class="form-group">
              <label for="exampleFormControlFile1">Subir</label></th>
        </tr>
      </thead>
    </div>
    <div class="card-body">
      <tbody>
        <tr>
         @foreach ($reportes as $reporte)
          <th >{{$reporte->year}}</th>
          <td><button type="button" href="/" class="btn btn-danger">Pdf</button></td>
          <td><button type="button" class="btn btn-success">Excel</button></td>
          <td><button type="button" class="btn btn-warning">Firma</button></td>
          <td>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </form></td>
        </tr>
        <tr>
      @endforeach
      </tbody>
    </table>

@endsection

    