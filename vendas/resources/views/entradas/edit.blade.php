@extends('principal')

@section('conteudo')

<h1>Editar Entrada</h1>

<form method ="post" action="/entradas/{{$entradas->id}}">

{{csrf_field()}}

{{ method_field('PATCH') }}

Nome: <input type="text" name="nome" maxlength="100" value="{{$produto->nome}}"><br>
Fornecedor: <input type="text" name="nome" maxlength="100" value="{{$fornecedor->nome}}"><br>
Quantidade: <input type="text" name="quantidade" value="{{$produto->quantidade}}"><br>


<input type="submit" name="botaoSalvar" value="Salvar">

</form>

@endsection
