@extends('layout.site')

@section('title', 'Editar tabelião')

@section('content')
    <div class="container">
        <h3>Editar tabelião</h3>
        <div class="row">
            <form action="{{route('tabelioes.atualizar', $tabeliao->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('tabelioes.form')
                <button type="submit" class="btn btn-success">Salvar</button>
                
            </form>
        </div>    
    </div>
@endsection() 

