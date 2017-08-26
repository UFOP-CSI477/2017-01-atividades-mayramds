@extends('principal')

@section('conteudo')

<header>
        <div class="col-md-13">
          <div class="jumbotron text-center">
            <h1>Detalhes do Produto</h1>
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


<table border="1">
  <tr>
    <td>Nome: {{ $produto->nome }}<br></td>
    <td>Preço: {{ $produto->preco }}<br></td>
  </tr>
</table>
  <form method="post" action="/carrinho/adicionar/{{$produto->id}}">

    {{ csrf_field() }}

    <br><input type="text" name="quantidade" value="1">
    <input type="submit" value="Inserir no carrinho">

  </form>

@endsection
