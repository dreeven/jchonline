<style>
    .jumbotron{
        background: url("images/slider1.jpg") no-repeat center center; 
        -webkit-background-size: 100% 100%;
        -moz-background-size: 100% 100%;
        -o-background-size: 100% 100%;
        background-size: 100% 100%;
    }
</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-3 float-right" style="color:#fff;">¡Bienvenido!</h1>
                <p class="lead my-4"><br></p>
                <h4 style="color:#fff;">No te quedes fuera...</h4> 
                <h2 style="color:#fff;"> <b>¡inscríbete ya!</b></h2>
                <p class="lead my-4"></p>
                <p class="lead my-4">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Inscribirse ahora</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
