<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('auth.perfil');
    }

    public function perfilUser($id) {
        
        if(auth()->user()->ADMIN == 0) {
            return redirect()->route('home');
        }

        $dadosUser = User::where('id', $id)->get();

        return view('auth.perfil', ['dadosUser' => $dadosUser[0]]);

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

    public function NovoEndereco() {
        
        return view('auth.altera_endereco');
       
    }

    public function AlteraSenha(Request $request) {
        
        if(!Hash::check($request->antigaSenha, auth()->user()->password)){
            return redirect()->route('perfilsenha')->withErrors(['antigaSenha' => 'Senha atual está incorreta'])->withInput();
        };
      
        $rules = [
            'novaSenha' => 'required|min:8|confirmed',
            'novaSenhaConfirmada' => 'min:8'
        ];

        $feedback = [
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'Digite pelo menos 8 digitos',
            'confirmed' => 'Senhas não batem'
        ];
        

        $request->validate($rules, $feedback);

        User::where('id', auth()->user()->id)->update(['password' => bcrypt($request->novaSenha)]);
        return redirect()->route('perfil');
       
    }

    public function AlteraEndereco(Request $request) {

        $rules = [
            'endereco' => 'required|min:8',
            'setor' => 'required|min:4',
            'celular' => 'required|numeric'
        ];

        $feedback = [
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'Descreve mais seu :attribute',
            'celular.min' => 'Numero invalido',
            'celular.max' => 'Numero invalido',
            'celular.numeric' => 'Numero invalido'
        ];
        

        $request->validate($rules, $feedback);

        User::where('id', auth()->user()->id)->update([
            'endereco' => $request->endereco,
            'setor' => $request->setor,
            'celular' => $request->celular
        ]);
        
        return redirect()->route('perfil');
       
    }

    public function admin(Request $request) {
        User::where('id', auth()->user()->id)->update(['CODFUN' => $request->codfun]);
        return redirect()->route('home');

    }
}
