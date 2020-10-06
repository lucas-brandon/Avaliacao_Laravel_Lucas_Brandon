@extends('layout.site')

@section('title', 'Editar certidão')

@section('content')
    <div class="container">
        <h3>Editar certidão</h3>
        <div class="row">
            <form action="{{route('certidoes.atualizar', $certidao->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('certidoes.form')
                <button type="submit" class="btn btn-success">Salvar</button>
                
            </form>
        </div>    
    </div>
@endsection() 

