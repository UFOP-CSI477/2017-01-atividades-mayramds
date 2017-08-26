@extends('principal')

@section('conteudo')

  <div class="container-fluid bg-3 text-center">
    <h3>Produtos</h3><br>
      <div class="row">

@foreach($produtos as $p)

    <div class="col-sm-3">
      {{ $p->nome }}</br>
      {{ $p->preco}}</br>
    <a href="/loja/view/{{ $p->id}}">Ver detalhes</a></br>
    </div>

@endforeach
</div>
@endsection
