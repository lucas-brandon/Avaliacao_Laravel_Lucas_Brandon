<?php

namespace App\Http\Controllers;

use App\Contrato;
use App\Tabeliao;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    //
    public function index(Request $req)
    {
        $contratos = Contrato::all();
        $mensagem = $req->session()->get('mensagem');
        return view('contratos.index', compact('contratos', 'mensagem'));
    }


    public function adicionar()
    {
        $tabelioes = Tabeliao::all();
        return view('contratos.adicionar', compact('tabelioes'));
        
    }

    public function salvar(Request $req)
    {        
        $contrato = $req->all();
        Contrato::create($contrato);

        //Cria uma variavel mensagem na sessão atual
        $req->session()->flash('mensagem', 'Contrato cadastrado com sucesso');

        return redirect()->route('contratos.index');
    }
    
    public function editar($id)
    {
        $contrato = Contrato::find($id);

        $tabelioes = Tabeliao::all();

        return view('contratos.editar', compact('contrato', 'tabelioes'));
    }

    public function atualizar(Request $req, $id)
    {
        //echo 'salvando no banco';
        $contrato = $req->all();

        Contrato::find($id)->update($contrato);

        //Cria uma variavel mensagem na sessão atual
        $req->session()->flash('mensagem', 'Contrato editado com sucesso');

        return redirect()->route('contratos.index');
    }

    public function deletar(Request $req, $id)
    {
        $contrato = Contrato::find($id);
        

        Contrato::find($id)->delete();

        $req->session()->flash('mensagem', 'Contrato deletado com sucesso');

        return redirect()->route('contratos.index');
    }
}
