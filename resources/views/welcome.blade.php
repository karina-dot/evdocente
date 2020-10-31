@extends('layouts.app')

@section('content')
<div class="container">    
        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        <div class="row">                
            <div class="iconmelon">
              <img src="universidad-ucm.jpg" width="128" height="128" alt="Inicio de sesión">
            </div>
        </div>
        
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">Inicio de sesión</div>
            </div>     
            <div class="panel-body" >
                <form id="form" class="form-horizontal">
                   
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="usuario" value="" placeholder="Número de empleado" autofocus="">                                        
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña">
                    </div>                                                                  
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Entrar</button>                          
                        </div>
                    </div>
                </form>     
            </div>                     
        </div>  
    </div>
</div>
@endsection