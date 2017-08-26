@extends('principal')

@section('conteudo')

<h1>Editar Fornecedor</h1>

<form method ="post" action="/fornecedores/{{$fornecedor->id}}">

{{csrf_field()}}

{{ method_field('PATCH') }}


Nome: <input type="text" name="nome" maxlength="100" value="{{$fornecedor->nome}}"><br>
Nome Fantasia: <input type="text" name="nomeFantasia" value="{{$fornecedor->nomeFantasia}}"><br>
Telefone: <input type="text" name="telefone" value="{{$fornecedor->telefone}}"><br>

<input type="submit" name="botaoSalvar" value="Salvar">

</form>

@endsection
