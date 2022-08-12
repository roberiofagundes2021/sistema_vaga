<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdmUsuarioController extends Controller
{
    //
    public function index()
    {
       $usuario = User::all();

        return view('adm.usuario.index',compact('usuario'));
    }
}
