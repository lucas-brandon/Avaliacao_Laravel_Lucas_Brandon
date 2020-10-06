@extends('layout.site')

@section('title', 'Editar contrato')

@section('content')
    <div class="container">
        <h3>Editar contrato</h3>
        <div class="row">
            <form action="{{route('contratos.atualizar', $contrato->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('contratos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
                
            </form>
        </div>    
    </div>
@endsection() 

