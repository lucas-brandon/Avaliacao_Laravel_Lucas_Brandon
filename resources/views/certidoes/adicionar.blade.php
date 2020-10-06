@extends('layout.site')

@section('title', 'Adicionar certidão')

@section('content')
    <div class="container">
        <h3>Adicionar certidão</h3>
        <div class="row">
            <form action="{{route('certidoes.salvar')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('certidoes.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>    
    </div>
@endsection() 

