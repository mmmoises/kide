<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuairoController extends Controller
{
    public function create(Request $request )
    {
 /*       \App\Http\Controllers\Auth::showLoginForm([
            'name' => $request['namenew'],
            'email'=> $request['emailnew'],
            'user'=> $request['usernew'],
            'tipo'=> $request['tiponew'],
            'password'=> bcrypt( $request['passwordnew'])
    ]);*/
      //dd($request->all());
      $this->validate($request,[
            'namenew'=> 'required',
            'emailnew'=> 'required',
            'usernew'=> ['required','unique:users,user'],
            'passwordnew'=> 'required',

      ]);



      $User = new User;
      $User->name = $request->input('namenew');
      $User->email = $request->input('emailnew');
      $User->user= $request->input('usernew');
      $User->tipo = $request->input('tiponew');
      $User->password = bcrypt( $request->input('passwordnew'));
      $User->save();

      return redirect('/');
    }
}
