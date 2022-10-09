<?php

namespace App\Http\Controllers;

use App\Models\chamado;
use App\Models\chat;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function rules() {
        return [
            'descricao' => 'required|min:8',
            'tipo_serviço' => 'required',
            'img_descricao' => 'mimes:jpg,png'
        ];
    }

    public function feedback() {
        return [
            'descricao.required' => 'Descreve seu chamado !',
            'descricao.min' => 'Descreva mais seu chamado !',
            'tipo_serviço.required' => 'Escolha o tipo do chamado !',
            'mimes' => 'Selecione uma imagem jpg ou png !'
        ];
    }

    public function index(Request $request)
    {
        if($request->input('filtro')) {
            if(auth()->user()->CODFUN == 2) {
                $chamados = chamado::where('user_id', auth()->user()->id)->where('status', $request->input('filtro'))->orderby('created_at')->simplepaginate(3);
            }
            if(auth()->user()->CODFUN == 1) {
                $chamados = chamado::where('status', $request->input('filtro'))->orderby('created_at')->simplepaginate(3);
            }
            return view('chamados.index', ['chamados' => $chamados]);
        }

        if($request->input('filtro') == null) {
            if(auth()->user()->CODFUN == 2) {
                $chamados = chamado::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->simplepaginate(3);
            }
            if(auth()->user()->CODFUN == 1) {
                $chamados = chamado::orderBy('id', 'desc')->simplepaginate(3);
            }
            
            return view('chamados.index', ['chamados' => $chamados]);
        }

        else {
            if(auth()->user()->CODFUN == 2) {
                $chamados = chamado::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->simplepaginate(3);
            }
            if(auth()->user()->CODFUN == 1) {
                $chamados = chamado::orderBy('id', 'desc')->simplepaginate(3);
            }
            
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

        $request->validate($this->rules(), $this->feedback(),);

        if($request->hasFile('img_descricao')) {
            $imagem = $request->img_descricao;
            $img_urn = $imagem->store('imagems/chamados','public');
        }
        else {
            $img_urn = 'noimage';
        }

        if(!isset($cadastrar)) {
            chamado::create([
                'user_id' =>  auth()->user()->id,
                'tipo_serviço' => $request->input('tipo_serviço'),
                'descricao' => $request->input('descricao'),
                'img_descricao' => $img_urn
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

        $respostas = chat::where('chamado_id', $chamado->id)->get();
        return view('chamados.chamado', ['chamado' => $chamado, 'respostas' => $respostas]);
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
        $chamado = chamado::find($chamado->id);
        $chamado->delete();
        return redirect()->route('chamado.index');
    }
}
