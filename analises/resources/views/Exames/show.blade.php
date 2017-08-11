@extends('principal')

@section('conteudo')

<h1>Excluir Procedimento</h1>

<a href="/procedimentos">Voltar</a>


<p> Id: {{$procedimento->id}}</p>
<p> Nome: {{$procedimento->nome}}</p>
<p> Preço R$: {{$procedimento->preco}}</p>

<form method ="post" action="/procedimentos/{{$procedimento->id}}">


{{csrf_field()}}
{{ method_field('DELETE') }}


<input type="submit" value="Confirmar Exclusao">

</form>

@endsection
