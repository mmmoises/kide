@extends('layout.dash')

@section('Uname', auth()->user()->name)

@section('header', 'Dashboard')
@section('icon')
    <i class="fa fa-dashboard"></i>
@endsection

@section('nav')

    <li class="active">
        <a href="#">
            <i class="pe-7s-graph"></i>
            <p>Dashboard</p>
        </a>
    </li>

     <li>
     <a href="{{URL::route('cards')}}">
             <i class="pe-7s-albums"></i>
             <p>Cards</p>
         </a>
     </li>

    
@endsection

