@extends('principal')

@section('conteudo')

<h1>Editar Procedimento</h1>

<form method ="post" action="/procedimentos/{{$procedimento->id}}">

{{csrf_field()}}

{{ method_field('PATCH') }}

Nome: <input type="text" name="nome" maxlength="100" value="{{$procedimento->nome}}"><br>
Preco: <input type="text" name="preco" value="{{$procedimento->preco}}"><br>
<input type="submit" name="botaoSalvar" value="Salvar">

</form>

@endsection
