<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        $this-> middleware('auth');
    }

    public function index(){
        return view('web.dashboard');
    }

    public function create(){
        return view('auth.create');
    }

    public function cards(){
        return view('web.cards');
    }
}
