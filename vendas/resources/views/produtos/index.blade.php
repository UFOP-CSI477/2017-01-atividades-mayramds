@extends('principal')

@section('conteudo')


<header>
        <div class="col-md-13">
          <div class="jumbotron text-center">
            <h1>Produtos</h1>
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

<a href="/produtos/create">Inserir</a>

<table border="1">
        <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Preco</th>
        <th>Excluir</th>
        <th>Editar</th>
      </tr>

@foreach($produtos as $p)

    <tr>
      <td>{{ $p->id }}</td>
      <td>{{ $p->nome }}</td>
      <td>{{ $p->preco}}</td>
      <td><a href="/produtos/{{ $p->id}}">Excluir</a></td>
      <td><a href="/produtos/{{ $p->id}}/edit">Editar</a></td>
    </tr>

@endforeach
</table>
@endsection
