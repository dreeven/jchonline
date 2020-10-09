@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h3 style="margin-bottom:15px;"><b>ACTIVIDADES INSCRITAS</b></h3>
        @if(Session::has('notice'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> {{ Session::get('notice') }} </strong>
            </div>
        @endif
            <div class="card border-primary">
                <div class="card-header"><span> <b>LISTA DE ACTIVIDADES INSCRITAS</b> <br> </span></div>
                <table class="table-info table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="padding-left:20px;">Inscritas: 0</th>
                            <th scope="col">Realizadas: 0</th>
                            <th scope="col">Disponibles: 0</th>
                            <th scope="col">Incidencias: 0</th>

                        </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
      
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
