<?php

namespace App\Http\Controllers;

use App\Models\Vagas;
use Illuminate\Http\Request;

class VagasDisponiveisController extends Controller
{
    public function index()
    {
       $vagas = Vagas::all();
        return view('welcome',compact('vagas'));
    }
}
