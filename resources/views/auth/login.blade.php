@extends('layout.app')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
    <div class="col-md-4  offset-md-2">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
             <div class="">
                <form method="POST" action="">

                    <div class="form-group">
                            <label for="user">Nombre Completo</label>
                            <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="user">Correo</label>
                            <input type="email" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="user">Usuario</label>
                            <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="user">Password</label>
                            <input type="password" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Empresa</option>
                              <option>Cliente</option>
                            </select>
                          </div>



                    <button class="btn btn-primary">Registrarse</button>

                </form>

             </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title"> Ingreso </h1>
            </div>

            <div class="card-body">
            <form method="POST" action="{{ route('login') }}" >
                    {{ csrf_field() }}
                     <div class="form-group  ">
                         <label or="user"> User Name</label>
                         <input class="form-control {{$errors ->has('user') ?'is-invalid' : '' }}"
                                name="user" 
                                value = "{{old('user')}}"
                                placeholder="ingrese User Name" >
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

                    <button class="btn btn-primary btn-bock">Acceder</button>

                    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Nuevo Usuario</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection