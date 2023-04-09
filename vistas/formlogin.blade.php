{{-- Usamos la vista app como plantilla --}}
@extends('app')
{{-- Sección aporta el título de la página --}}
@section('title', 'Formulario login')
{{-- Sección sobreescribe el barra de navegación de la plantilla app --}}
@section('navbar')
@endsection
{{-- Sección muestra el formulario de login del usuario --}}
@section('content')
<div class="container my-5">
    <div class="col-md-8">
        <div class="panel panel-default">
            @if (isset($error)) 
            <div class="alert alert-danger" role="alert">Error Credenciales</div>
            @endif
            <div class="panel-heading">Login</div>
            <div class="panel-body mt-3">
                <form class="form-horizontal" method="POST" action="{{ $_SERVER['PHP_SELF'] }}" id='formlogin'>
                    <div class="form-group row">                            
                        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input id="inputNombre" type="text"
                                   class="form-control col-sm-10" id="inputNombre" placeholder="Nombre" name="nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password"
                                   class="form-control col-sm-10" id="inputPassword" placeholder="Password" name="clave">
                        </div>        
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" class="btn btn-primary" name="botonproclogin" value="Login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
