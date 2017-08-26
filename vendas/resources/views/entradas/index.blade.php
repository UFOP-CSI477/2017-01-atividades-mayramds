@extends('principal')

@section('conteudo')


<header>
        <div class="col-md-13">
          <div class="jumbotron text-center">
            <h1>Entradas</h1>
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

<a href="/entradas/create">Inserir</a>

<table border="1">
        <tr>
        <th>Código</th>
        <th>Produto</th>
        <th>Fornecedor</th>
        <th>Quantidade</th>
        <th>Data</th>
        <th>Excluir</th>
        <th>Editar</th>
      </tr>

@foreach($entradas as $e)

    <tr>
      <td>{{ $e->id }}</td>
      <td>{{ $e->produto->nome }}</td>
      <td>{{ $e->fornecedor->nome}}</td>
      <td>{{ $e->quantidade }}</td>
      <td>{{ $e->created_at}}</td>
      <td><a href="/entradas/{{ $e->id}}">Excluir</a></td>
      <td><a href="/entradas/{{ $e->id}}/edit">Editar</a></td>
    </tr>

@endforeach
</table>
@endsection
