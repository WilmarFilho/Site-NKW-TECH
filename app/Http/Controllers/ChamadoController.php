<?php

namespace App\Http\Controllers;

use App\Models\chamado;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('filtro')) {
            $chamados = chamado::where('user_id', auth()->user()->id)->where('status', $request->input('filtro'))->orderby('created_at')->simplepaginate(3);
            return view('chamados.index', ['chamados' => $chamados]);
        }

        if($request->input('filtro') == null) {
            $chamados = chamado::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->simplepaginate(3);
            return view('chamados.index', ['chamados' => $chamados]);
        }

        else {
            $chamados = chamado::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->simplepaginate(3);
            return view('chamados.index', ['chamados' => $chamados]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!isset($cadastrar)) {
            chamado::create([
                'user_id' =>  auth()->user()->id,
                'tipo_serviço' => $request->input('tipo_serviço'),
                'descricao' => $request->input('descricao'),
                'img_descricao' => $request->input('img_descricao')
            ]);
        }

        return view('chamados.feedback', ['cadastrar' => 'não']);
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chamado  $chamado
     * @return \Illuminate\Http\Response
     */
    public function show(chamado $chamado)
    {
       return view('chamados.chamado', ['chamado' => $chamado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chamado  $chamado
     * @return \Illuminate\Http\Response
     */
    public function edit(chamado $chamado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chamado  $chamado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chamado $chamado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chamado  $chamado
     * @return \Illuminate\Http\Response
     */
    public function destroy(chamado $chamado)
    {
        //
    }
}
