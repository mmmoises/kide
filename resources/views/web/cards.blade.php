@extends('layout.dash')

@section('Uname', auth()->user()->name)

@section('header', 'Cards')

@section('icon')
     <i class="fa fa-dashboard"></i>
@endsection

@section('nav')

    <li>
    <a href="{{ URL::route('dashboard')}}">
            <i class="pe-7s-graph"></i>
            <p>Dashboard</p>
        </a>
    </li>

     <li class="active">
         <a href="#">
             <i class="pe-7s-albums"></i>
             <p>Cards</p>
         </a>
     </li>

    
@endsection


@section('body')


<div class="row">

        <div class="col-md-6">

            @if ($cards->isEmpty())
                


            @else
                
           @foreach ($cards as $card)

           
               
         

           <div class="row">
                            <div class="card ">
                                <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="header">
                                                        <h4 class="title">{{auth()->user()->name}} {!! $card->titulo !!}</h4>
                                                </div>
                                               
                                                <br>
                                                <div class="col-md-12">
                                                        <p> 
                                                                {!! $card->descripcion!!}
                                                                   </p>
                                                </div>
                                                 
                                            </div>

                                            <div class="col-md-4">
                                                {!!QrCode::size(150)->generate($card->id_promo) !!}
                                            </div>
                                              
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-6">
                                                        <label class="form-check-label">Fecha de Inicio: {!! $card->fechaInicio!!}</label>
                                                </div>
                                                <div class="col-md-6">
                                                        <label class="form-check-label">Fecha limite: {!! $card->fechaFinal!!}</label>   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="col-md-6">
                                                        <label class="form-check-label">Condicion: {!! $card->condicion!!}</label>
                                                </div>
                                                <div class="col-md-6">
                                                        <label class="form-check-label">Participantes: {!! $card->participantes!!}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                </div>
                            </div>
           </div>
           @endforeach

           @endif

        </div>


        <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Nueva Promocion</h4>
                    </div>
                    <div class="content">
                    <form action="{{route('NewCard')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Titulo</label>
                                        <input name="titulo" type="text" class="form-control" placeholder="titulo de promocion opciones">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Condicion </label>
                                            <input name="condicion" type="number" class="form-control" placeholder="ZIP Code">
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha Inicio</label>
                                        <input name="dateB" type="date" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha final</label>
                                        <input name="dateF" type="date" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripcion</label>
                                        <textarea name="Description" rows="5" class="form-control" placeholder="Descripcion de la promocion"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Crear</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
</div>
    
@endsection