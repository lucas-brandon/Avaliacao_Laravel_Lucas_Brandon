<?php

namespace App\Http\Controllers;

use App\Certidao;
use App\Tabeliao;
use Illuminate\Http\Request;

class CertidaoController extends Controller
{
    //
    public function index(Request $req)
    {
        $certidoes = Certidao::all();
        $mensagem = $req->session()->get('mensagem');
        return view('certidoes.index', compact('certidoes', 'mensagem'));
    }


    public function adicionar()
    {
        $tabelioes = Tabeliao::all();
        return view('certidoes.adicionar', compact('tabelioes'));
        //return view('certidoes.adicionar');
        
    }

    public function salvar(Request $req)
    {        
        $certidao = $req->all();
        
        Certidao::create($certidao);

        //Cria uma variavel mensagem na sessão atual
        $req->session()->flash('mensagem', 'Certidão cadastrada com sucesso');

        return redirect()->route('certidoes.index');
    }
    
    public function editar($id)
    {
        $certidao = Certidao::find($id);

        $tabelioes = Tabeliao::all();

        return view('certidoes.editar', compact('certidao', 'tabelioes'));
    }

    public function atualizar(Request $req, $id)
    {
        //echo 'salvando no banco';
        $certidao = $req->all();

        Certidao::find($id)->update($certidao);

        //Cria uma variavel mensagem na sessão atual
        $req->session()->flash('mensagem', 'Certidão editada com sucesso');

        return redirect()->route('certidoes.index');
    }

    public function deletar(Request $req, $id)
    {
        $certidao = Certidao::find($id);
        

        Certidao::find($id)->delete();

        $req->session()->flash('mensagem', 'Certidão deletada com sucesso');

        return redirect()->route('certidoes.index');
    }
}
