<?php

namespace App\Http\Controllers;

use App\Models\chat;
use Illuminate\Http\Request;
use App\Models\chamado;
use App\Mail\AtualizacaoChamadoMail;
use Illuminate\Support\Facades\Mail;


class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

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


        $request->validate(['imagem' => 'required'], ['required' => 'Digite sua mensagem antes de enviar !']);

        if($request->hasFile('imagem')) {
            $imagem = $request->imagem;
            $img_urn = $imagem->store('imagems/chat', 'public');
        }

        else {
            $img_urn = 'noimage';
        }
       
        chat::create([
            'user_id' => auth()->user()->id,
            'chamado_id' => $request->input('chamado'),
            'resposta' => $request->input('resposta'),
            'imagem' => $img_urn
        ]);

        $idurl = 'http://127.0.0.1:8000/chamado/' . $request->input('chamado');
        
        
        if(auth()->user()->CODFUN == 2) {

            $nome = 'Tecnico';

            Mail::to('wilmarfilho32@hotmail.com')->send(new AtualizacaoChamadoMail($idurl, $nome));
            Mail::to('nattanmendonca@gmail.com')->send(new AtualizacaoChamadoMail($idurl, $nome));
            Mail::to('kaykyfsoares@hotmail.com')->send(new AtualizacaoChamadoMail($idurl, $nome));
        }

        else {

            $chamado = chamado::where('id',  $request->input('chamado'))->get();

            $nome = $chamado[0]->User->name;
            $email = $chamado[0]->User->email;

            Mail::to($email)->send(new AtualizacaoChamadoMail($idurl, $nome));

        }


        return redirect()->route('chamado.show', ['chamado' => $request->chamado]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(chat $chat)
    {
        //
    }
}
