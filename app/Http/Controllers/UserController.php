<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Session;

class UserController extends Controller
{
    public function index(){
        $usuario = Session::all();
        $user = auth()->user();
        
        return view('welcome',['usuario' =>$usuario,'user'=> $user ]);
    }
}
