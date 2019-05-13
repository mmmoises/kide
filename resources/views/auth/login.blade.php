@extends('layout.app')
@section('title', 'Login')

@section('content')
<br>
<br>
<br>
<br>

<div class="row">
    <div class="col-md-4 ">
        @if ($errors->any())
        <div class="" id="multiCollapseExample1"> 
        @else
            <div class="collapse multi-collapse" id="multiCollapseExample1">
        @endif
      
             <div class="">
             <form method="POST" action="{{route('create')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                            <label for="namenew">Nombre Completo</label>
                            <input name="namenew"type="text" value = "{{old('namenew')}}" class="form-control {{$errors ->has('namenew') ?'is-invalid' : '' }}">
                            {!! $errors -> first('namenew', '<small class=" invalid-feedback"> :message </small>') !!}
                    </div>

                    <div class="form-group">
                            <label for="emailnew">Correo</label>
                            <input name="emailnew" value = "{{old('emailnew')}}" type="email" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="usernew">Usuario</label>
                            <input name="usernew" value = "{{old('usernew')}}" type="text" class="form-control {{$errors ->has('usernew') ?'is-invalid' : '' }}">
                            {!! $errors -> first('usernew', '<small class=" invalid-feedback"> usuario invalido </small>') !!}
                    </div>

                    <div class="form-group">
                            <label for="passwordnew">Password</label>
                            <input name="passwordnew" type="password" class="form-control {{$errors ->has('passwordnew') ?'is-invalid' : '' }}">
                            {!! $errors -> first('usernew', '<small class=" invalid-feedback"> :message </small>') !!}
                    </div>

                    <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select name="tiponew" class="form-control" id="exampleFormControlSelect1">
                              <option value="1">Empresa</option>
                              <option value="0">Cliente</option>
                            </select>
                          </div>



                    <button class="btn btn-primary">Registrarse</button>

                </form>

             </div>
        </div>
    </div>

    <div class="col-md-4  ">
        <div class="card">
            <div class="header">
                <h1 class="title"> Ingreso </h1>
            </div>

            <div class="content">
            <form method="POST" action="{{ route('login') }}" >
                    {{ csrf_field() }}
                     <div class="form-group  ">
                         <label or="user"> User Name</label>
                         <input class="form-control {{$errors ->has('user') ?'is-invalid' : '' }}"
                                name="user" 
                                value = "{{old('user')}}"
                                placeholder="Ingrese User Name" >
                        {!! $errors -> first('user', '<small class=" invalid-feedback"> :message </small>') !!}
                     </div>

                     <div class="form-group ">
                            <label for="password" >  Contraseña </label>
                            <input class="form-control {{$errors ->has('password') ?'is-invalid' : '' }}"
                                   type="password" 
                                   name="password" 
                                   placeholder="ingrese contraseña">
                                   {!! $errors -> first('password', '<small class=" invalid-feedback"> :message </small>') !!} 
                    </div>

                    <button class="btn btn-primary btn-bock btn-round">Acceder</button>

                    <a class="btn btn-primary btn-round" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Nuevo Usuario</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection