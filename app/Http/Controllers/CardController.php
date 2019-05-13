<?php

namespace App\Http\Controllers;
use App\promociones;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //
    public function store(Request $request){
        $promocion = new promociones;
        $promocion->titulo = $request->input('titulo');
        $promocion->condicion = $request->input('condicion');
        $promocion->fechaInicio = $request->input('dateB');
        $promocion->fechaFinal = $request->input('dateF');
        $promocion->descripcion = $request->input('Description');
        $promocion->id_emisor = auth()->user()->id;
        $promocion->estado = 1;
        $promocion->participantes = 0 ;
        $promocion->save();

        session()->flash('notif', 'Creado con exito');


        return redirect()->route('cards');
    }

    public function index(){
         $cards = \DB::table('Promociones')->where('id_emisor', auth()->user()->id )->select('titulo','descripcion','condicion', 'fechaInicio','fechaFinal','id_promo')->get();
         return view('web.cards', compact('cards'));
    }

}
