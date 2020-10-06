<div class="form-group">
    <label for="tipo">Tipo de Certidão</label>
<input type="text" class="form-control" id="tipo" name="tipo" value="{{$certidao->tipo ?? ''}}">

<div class="form-group">
    <label for="nome1">Nome do envolvido 1</label>
<input type="text" class="form-control" id="nome1" name="nome1" value="{{$certidao->nome1 ?? ''}}">

<div class="form-group">
    <label for="nome2">Nome do envolvido 2</label>
<input type="text" class="form-control" id="nome2" name="nome2" value="{{$certidao->nome2 ?? ''}}">

<div class="form-group">
    <label for="data">Data da Certidão</label>
<input type="date" class="form-control" id="data" name="data" value="{{$certidao->data ?? ''}}">

<div class="form-group">
    <label for="nome_tabeliao">Nome do Tabelião</label>
    <select class="form-control" id="nome_tabeliao" name="nome_tabeliao">
      
      @foreach ($tabelioes as $tabeliao)
        <option>{{$tabeliao->nome}}</option>
      @endforeach
    </select>
</div>