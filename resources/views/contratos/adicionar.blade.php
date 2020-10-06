@extends('layout.site')

@section('title', 'Adicionar contrato')

@section('content')
    <div class="container">
        <h3>Adicionar contrato</h3>
        <div class="row">
            <form action="{{route('contratos.salvar')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('contratos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>    
    </div>
@endsection() 

