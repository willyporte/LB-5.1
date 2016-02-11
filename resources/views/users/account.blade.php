@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/success')
                <div class="panel panel-default">
                    <div class="panel-heading">User Profile</div>
                    <div class="panel-body">

                        <ul>
                            <li><a href="#">Cambia tu Profile</a></li>
                            <li><a href="#">Cambia tu password</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection