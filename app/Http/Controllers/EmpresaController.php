<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;

class EmpresaController extends Controller
{
  public function index()
{
   $empresa = Empresa::join('users as u','u.id','=','empresas.user_id')->where('u.id', auth()->user()->id)->select('empresas.*')->get();

    return view('empresa.empresa.index',compact('empresa'));
}


public function create()
{
    //
    $empresa1 = Empresa::get();

    return view('empresa.empresa.create',compact('empresa1'));
}




public function store(Request $request)
{

    $validated = $request->validate([
        'razao_social' => 'required',
        'cnpj' => 'required|cnpj',
        'solicitante' => 'required',
        'telefone' => 'required',
        'email' => 'required',
    ]);

    $empresa = new Empresa();

    $empresa->razao_social=$request->razao_social;
    $empresa->cnpj=$request->cpnj;
    $empresa->solicitante=$request->solicitante;
    $empresa->telefone=$request->telefone;
    $empresa->email=$request->email;
    $empresa['user_id'] = auth()->user()->id;
    $empresa->save();

    $id = $empresa->id;


        return view('endereco_empresa.create', compact('id'))
                    ->with('success','automovel criador com successo.');


}


public function edit($id)
{
    //
    $Empresa = Empresa::findorFail($id);
    return view('empresa.edit',['Empresa'=>$Empresa]);
}


public function update(Request $request){
    Empresa::find($request->id)->update($request->except('_method'));
     return redirect('/index/Empresa')->with('msg', 'empresa apagada');
}


public function destroy($id)
{
    //
    $Empresa=Empresa::findOrFail($id);
    $Empresa->delete();

    return redirect('/index/Empresa')->with('msg', 'empresa apagada');
}
}
