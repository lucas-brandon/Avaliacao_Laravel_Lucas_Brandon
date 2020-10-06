@extends('layout.site')

@section('title', 'Adicionar tabelião')

@section('content')
    <div class="container">
        <h3>Adicionar tabelião</h3>
        <div class="row">
            <form action="{{route('tabelioes.salvar')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('tabelioes.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>    
    </div>
@endsection() 

