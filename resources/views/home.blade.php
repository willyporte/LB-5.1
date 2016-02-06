@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/success')
                <div class="panel panel-default">
                    <div class="panel-heading">Bienvenidos!</div>
                    <div class="panel-body">
                        <h1>Laravel 5.1 Carajo!</h1>

                        @if (Auth::check())
                            <h2>Ciao {{ Auth::user()->name }}!</h2>
                        @else
                            <h2>Bienvenidos a nuestro sitio</h2>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection