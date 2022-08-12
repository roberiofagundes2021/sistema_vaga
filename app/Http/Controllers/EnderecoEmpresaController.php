<?php

namespace App\Http\Controllers;

use App\Models\Endereco_Empresa;
use App\Http\Requests\StoreEndereco_EmpresaRequest;
use App\Http\Requests\UpdateEndereco_EmpresaRequest;

class EnderecoEmpresaController extends Controller
{
  public function index()
{
   $endereco_empresa = Endereco_Empresa::all();
    return view('empresa.endereco.index',compact('endereco_empresa'));
}


public function create()
{
    //
    $endereco_empresa = Endereco_Empresa::get();

    return view('empresa.endereco.create',compact('endereco_empresa'));
}




public function store(Request $request)
{





  $table->unsignedBigInteger('empresa_id');
    $validated = $request->validate([
        'pais' => 'required',
        'estado' => 'required|cnpj',
        'solicitante' => 'required',
        'telefone' => 'required',
        'email' => 'required',
    ]);

    $endereco_empresa = new Endereco_Empresa();

    $endereco_empresa->pais=$request->pais;
    $endereco_empresa->estado=$request->estado;
    $endereco_empresa->cidade=$request->cidade;
    $endereco_empresa->bairro=$request->bairro;
    $endereco_empresa->rua=$request->rua;
    $endereco_empresa->numero=$request->numero;
    $endereco_empresa->empresa_id=$request->empresa_id;
    $endereco_empresa->save();

    $id = $endereco_empresa->id;


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
