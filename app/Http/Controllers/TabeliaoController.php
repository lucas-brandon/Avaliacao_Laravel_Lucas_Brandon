<?php

namespace App\Http\Controllers;

use App\Tabeliao;
use Illuminate\Http\Request;

class TabeliaoController extends Controller
{
    //
    //
    public function index(Request $req)
    {
        $tabelioes = Tabeliao::all();
        $mensagem = $req->session()->get('mensagem');
        return view('tabelioes.index', compact('tabelioes', 'mensagem'));
    }


    public function adicionar()
    {
        return view('tabelioes.adicionar');
        
    }

    public function salvar(Request $req)
    {        
        $tabeliao = $req->all();
        Tabeliao::create($tabeliao);

        //Cria uma variavel mensagem na sessão atual
        $req->session()->flash('mensagem', 'Tabelião cadastrado com sucesso');

        return redirect()->route('tabelioes.index');
    }
    
    public function editar($id)
    {
        $tabeliao = Tabeliao::find($id);
        return view('tabelioes.editar', compact('tabeliao'));
    }

    public function atualizar(Request $req, $id)
    {
        //echo 'salvando no banco';
        $tabeliao = $req->all();

        Tabeliao::find($id)->update($tabeliao);

        //Cria uma variavel mensagem na sessão atual
        $req->session()->flash('mensagem', 'Tabelião editado com sucesso');

        return redirect()->route('tabelioes.index');
    }

    public function deletar(Request $req, $id)
    {
        $tabeliao = Tabeliao::find($id);
        

        Tabeliao::find($id)->delete();

        $req->session()->flash('mensagem', 'Tabelião deletado com sucesso');

        return redirect()->route('tabelioes.index');
    }
}
