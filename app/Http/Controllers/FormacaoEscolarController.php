<?php

namespace App\Http\Controllers;

use App\Models\Formacao_escolar;
use App\Http\Requests\StoreFormacao_escolarRequest;
use App\Http\Requests\UpdateFormacao_escolarRequest;

class FormacaoEscolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formacao_escolar = Formacao_escolar::get();

        return view('usuario.formacao_escolar.create',compact('formacao_escolar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormacao_escolarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormacao_escolarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formacao_escolar  $formacao_escolar
     * @return \Illuminate\Http\Response
     */
    public function show(Formacao_escolar $formacao_escolar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formacao_escolar  $formacao_escolar
     * @return \Illuminate\Http\Response
     */
    public function edit(Formacao_escolar $formacao_escolar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormacao_escolarRequest  $request
     * @param  \App\Models\Formacao_escolar  $formacao_escolar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormacao_escolarRequest $request, Formacao_escolar $formacao_escolar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formacao_escolar  $formacao_escolar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formacao_escolar $formacao_escolar)
    {
        //
    }
}
