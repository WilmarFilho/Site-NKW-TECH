<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfilController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('auth.perfil');
    }

    public function ruleFoto() {
        return  [
            'imgPerfil' => 'mimes:png,jpg|required'
        ];
    }

    public function feedbackFoto() {
        return [
            'imgPerfil.mimes' => 'Insira uma foto tipo png ou jpg',
            'imgPerfil.required' => 'Insira uma foto'
        ];
    }

    public function mudaFoto(Request $request) {
        
        $request->validate($this->ruleFoto(), $this->feedbackFoto());
        
        $img_urn = $request->imgPerfil->store('imagems/perfil' , 'public');

        User::where('id', auth()->user()->id)->update(['img_perfil' => $img_urn]);
        return redirect()->route('perfil');
    }

    public function NovaSenha() {
        
        return view('auth.altera_senha');
       
    }

    public function AlteraSenha(Request $request) {
        $request->antigaSenha = bcrypt($request->antigaSenha);
        

        $rules = [
            'antigaSenha' => 'required|exists:users,password',
            'novaSenha' => 'required|min:8|confirmed',
            'novaSenhaConfirmada' => 'min:8'
        ];

        $feedback = [
            'required' => 'O campo :attribute é obrigatório',
            'exists' => 'Senha antiga incorreta',
            'min' => 'Digite pelo menos 8 digitos',
            'confirmed' => 'Senhas não batem'
        ];
        

        $request->validate($rules, $feedback);

        User::where('id', auth()->user()->id)->update(['password' => bcrypt($request->novaSenha)]);
        return redirect()->route('perfil');
       
    }

    public function admin(Request $request) {
        User::where('id', auth()->user()->id)->update(['CODFUN' => $request->codfun]);
        return redirect()->route('home');

    }
}
