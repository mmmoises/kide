@extends('layout.app')

@section('content')
    <br>

    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Bienvenido {{auth()->user()->name}} </h3>
            </div>
            <div class="card-body">
                <strong> Email: </strong> {{auth()->user()->email}}

            </div>
            <div class="card-footer">
                 <form method="POST" action="{{ route('logout')}}">
                       {{ csrf_field() }}
                        <button class="btn btn-danger"> Cerrar Sesion </button>
                </form>
            </div>

        </div>
    </div>
    
@endsection