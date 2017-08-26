@extends('principal')

@section('conteudo')


<header>
        <div class="col-md-13">
          <div class="jumbotron text-center">
            <h1>Carrinho de compras</h1>
          </div>
        </div>
</header>

<style>

      table {
        width: 100%;
        border-collapse: collapse;
      }

      tr:hover {
        background-color: #e8e8e8;
      }

      tr:nth-child(even) {
        background-color: #d0d0d0;
      }
</style>

@if(Session::has('carrinho'))
  @php
    $carrinho = Session::get('carrinho');

  @endphp

  @foreach($carrinho as $c)
  <table border="1">
    <br><tr>
      <td>Código do Produto: {{ $c->produto_id }}</td>
      <td>Nome do Produto: {{ $c->produto->nome }}</td>
      <td>Quantidade: {{ $c->quantidade }}</td>
    </tr>
  </table>
  @endforeach

  <br><a class="btn btn-primary" href="/carrinho/comprar">Comprar</a><br><br>

@else
  <p class="alert alert-warning">Não existe nenhum produto no carrinho.</p>
@endif

@endsection
