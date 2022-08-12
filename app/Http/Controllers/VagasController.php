<?php

namespace App\Http\Controllers;

use App\Models\Vagas;
use App\Http\Requests\StoreVagasRequest;
use App\Http\Requests\UpdateVagasRequest;

class VagasController extends Controller
{
    public function index()
{
   $vagas = Vagas::all();
    return view('usuario.vagas.index',compact('vagas'));
}


public function create()
{
    //
    $vagas = Vagas::get();

    return view('empresa.vagas.create',compact('vagas'));
}




public function store(Request $request)
{

    $validated = $request->validate([
        'descricao' => 'required',
        'quantidade' => 'required|cnpj',
       
    ]);

    $vagas = new Vagas();

    $vagas->descricao=$request->descricao;
    $vagas->quantidade=$request->quantidade;
    
    $vagas->save();

    $id = $vagas->id;


        return view('endereco_empresa.create', compact('id'))
                    ->with('success','automovel criador com successo.');


}


public function edit($id)
{
    //
    $vagas =Vagas::findorFail($id);
    return view('empresa.edit',['Empresa'=>$Empresa]);
}


public function update(Request $request){
    Vagas::find($request->id)->update($request->except('_method'));
     return redirect('/index/Empresa')->with('msg', 'empresa apagada');
}


public function destroy($id)
{
    //
    $vagas=Vaga::findOrFail($id);
    $vagas->delete();

    return redirect('/index/Empresa')->with('msg', 'empresa apagada');
}
}
