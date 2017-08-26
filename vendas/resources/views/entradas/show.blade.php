@extends('principal')

@section('conteudo')

<h1>Excluir Entrada</h1>

<a href="/entradas">Voltar</a>



<p> Id: {{$produto->id}}</p>
<p> Nome: {{$produto->nome}}</p>
<p> Nome Fornecedor: {{$fornecedor->nome}}</p>
<p> Quantidade: {{$produto->quantidade}}</p>


<form method ="post" action="/entradas/{{$produto->id}}">


{{csrf_field()}}
{{ method_field('DELETE') }}


<input type="submit" value="Confirmar Exclusao">

</form>

@endsection
