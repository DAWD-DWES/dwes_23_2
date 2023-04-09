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
            @if (isset($message)) 
            <div class="alert alert-success">{{ $message }}</div>
            @endif
            <div class="panel-heading mt-3">Partida Personalizada</div>
            <div class="panel-body mt-3">
                <form class="form-horizontal" method="POST" action="{{ $_SERVER['PHP_SELF'] }}" id='formpartidapersonalizada'>
                    <div class="form-group row">                            
                        <label for="minlongitud" class="col-sm-2 col-form-label">Longitud Mínima</label>
                        <div class="col-sm-10">
                            <input id="minlongitud" type="number"
                                   class="form-control col-sm-10" name="minlongitud">
                        </div>
                    </div>
                    <div class="form-group row">                            
                        <label for="maxlongitud" class="col-sm-2 col-form-label">Longitud Máxima</label>
                        <div class="col-sm-10">
                            <input id="maxlongitud" type="number"
                                   class="form-control col-sm-10" name="maxlongitud">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contiene" class="col-sm-2 col-form-label">Contiene las letras</label>
                        <div class="col-sm-10">
                            <input type="text"
                                   class="form-control col-sm-10" id="contiene" name="contiene">
                        </div>        
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" class="btn btn-primary" name="botonpartidapersonalizada" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
