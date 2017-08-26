@extends('principal')

@section('conteudo')

<h1>Excluir Fornecedor</h1>
<a href="/fornecedores">Voltar</a>

<p> Id: {{$fornecedor->id}}</p>
<p> Nome Fantasia: {{$fornecedor->nomeFantasia}}</p>
<p> Telefone: {{$fornecedor->telefone}}</p>

<form method ="post" action="/fornecedores/{{$fornecedor->id}}">


{{csrf_field()}}
{{ method_field('DELETE') }}


<input type="submit" value="Confirmar Exclusao">

</form>

@endsection
