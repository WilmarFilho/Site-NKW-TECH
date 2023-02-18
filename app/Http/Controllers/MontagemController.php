<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class MontagemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, $tipo)
    {   

        

        if($tipo == 'placam') {

            $produto = produto::where('tipo', $tipo)->get();

            return view('montagem.placamae', ['produto' => $produto]);
        }

        if($tipo == 'processador') {

            $produto = produto::where('tipo', $tipo)->where('socket', $request->socket)->get();

            return view('montagem.processador', ['produto' => $produto, 'placam' => $request->placam, 'ddr' => $request->ddr]);
        }

        if($tipo == 'ram') {

            $produto = produto::where('tipo', $tipo)->where('ddr', $request->nddr)->get();

            return view('montagem.ram', ['produto' => $produto, 'ngeracao' => $request->ngeracao ,'nomeplacam' => $request->nomeplacam, 'nomeprocessador' => $request->processador]);
        }

        if($tipo == 'placav') {

            $placam = produto::where('tipo', 'processador')->where('nome', $request->nomeprocessador)->get();

            $integrado = $placam[0]->graficoIntegrado;
            
            $produto = produto::where('tipo', $tipo)->where('geracao', '>=', $request->ngeracao - 3)->where('geracao', '<=', $request->ngeracao + 2)->get();

            return view('montagem.placav', ['integrado'=> $integrado, 'produto' => $produto, 'nomeplacam' => $request->nomeplacam, 'nomeprocessador' => $request->nomeprocessador, 'nomeram' => $request->ram]);
        }

        if($tipo == 'hd') {

            $produto = produto::where('tipo', $tipo)->get();

            return view('montagem.hd', ['produto' => $produto, 'npotencia' => $request->potencia , 'nomeplacam' => $request->nomeplacam, 'nomeprocessador' => $request->nomeprocessador, 'nomeram' => $request->nomeram, 'nomeplacav' => $request->placav]);
        }

        if($tipo == 'fonte') {

            $produto = produto::where('tipo', $tipo)->where('potencia', '>=' ,$request->npotencia + 100 )->get();

            return view('montagem.fonte', ['produto' => $produto, 'nomeplacam' => $request->nomeplacam, 'nomeprocessador' => $request->nomeprocessador, 'nomeram' => $request->nomeram, 'nomeplacav' => $request->nomeplacav, 'nomehd' => $request->hd]);
        }

        if($tipo == 'gabinete') {

           
            $placam = produto::where('tipo', 'placam')->where('nome', $request->nomeplacam)->get();

            $tamanho = '%' . $placam[0]->tamanho . '%';

            $produto = produto::where('tipo', $tipo)->where('tamanho', 'like' ,$tamanho)->get();

            return view('montagem.gabinete', ['produto' => $produto, 'nomeplacam' => $request->nomeplacam, 'nomeprocessador' => $request->nomeprocessador, 'nomeram' => $request->nomeram, 'nomeplacav' => $request->nomeplacav, 'nomehd' => $request->nomehd, 'nomefonte' => $request->fonte]);
        }

        if($tipo == 'final') {

            $vplacam = produto::where('nome', $request->nomeplacam)->get();

            $vram = produto::where('nome', $request->nomeram)->get();

            $vprocessador = produto::where('nome', $request->nomeprocessador)->get();

            $vfonte = produto::where('nome', $request->nomefonte)->get();

            $vgabinete = produto::where('nome', $request->gabinete)->get();

            $vhd = produto::where('nome', $request->nomehd)->get();

            $valor = $vplacam[0]->preço +  $vram[0]->preço + $vprocessador[0]->preço +  $vfonte[0]->preço + $vgabinete[0]->preço + $vhd[0]->preço;
            
            if($request->nomeplacav != null) {
                $vplacav = produto::where('nome', $request->nomeplacav)->get();
                $valor += $vplacav[0]->preço;
            }

            return view('montagem.final', ['valor' => $valor, 'nomeplacam' => $request->nomeplacam, 'nomeprocessador' => $request->nomeprocessador, 'nomeram' => $request->nomeram, 'nomeplacav' => $request->nomeplacav, 'nomehd' => $request->nomehd, 'nomefonte' => $request->nomefonte, 'gabinete' => $request->gabinete]);
        }

       
    }

    public function ajax($tipo, $valor)
    {   

        $produto = produto::where('tipo', $tipo)->where('nome', $valor)->get();

        $resultado['descricao'] = $produto[0]->descricao;
        $resultado['foto'] = $produto[0]->foto;
        $resultado['marca'] = $produto[0]->marca;
        $resultado['modelo'] = $produto[0]->modelo;
        $resultado['frequencia'] = $produto[0]->velocidadeRam;
        $resultado['memoria'] = $produto[0]->MemoriaPlacaVideo;
        $resultado['capacidade'] = $produto[0]->capacidadeArmazenamento;
        $resultado['potenciaf'] = $produto[0]->potencia;
        $resultado['geracao'] = $produto[0]->geracao;
        $resultado['socket'] = $produto[0]->socket;
        $resultado['ddr'] = $produto[0]->ddr;
        $resultado['ngeracao'] = $produto[0]->geracao;
        $resultado['potencia'] = $produto[0]->PotenciaPlacaVideo; 
        
        return $resultado;

    }
}
