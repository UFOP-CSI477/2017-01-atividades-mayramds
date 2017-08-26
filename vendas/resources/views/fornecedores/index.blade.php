@extends('principal')

@section('conteudo')

<header>
        <div class="col-md-13">
          <div class="jumbotron text-center">
            <h1>Fornecedores</h1>
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

<a href="/fornecedores/create">Inserir</a>

  <table border="1">
          <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Nome Fantasia</th>
          <th>Telefone</th>
          <th>Excluir</th>
          <th>Editar</th>
        </tr>

@foreach($fornecedores as $f)

      <tr>
        <td>{{ $f->id }}</td>
        <td>{{ $f->nome }}</td>
        <td>{{ $f->nomeFantasia }}</td>
        <td>{{ $f->telefone }}</td>
        <td><a href="/fornecedores/{{ $f->id}}">Excluir</a></td>
        <td><a href="/fornecedores/{{ $f->id}}/edit">Editar</a></td>
      </tr>


@endforeach
</table>
@endsection
