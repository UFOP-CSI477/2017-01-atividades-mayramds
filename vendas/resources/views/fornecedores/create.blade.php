@extends('principal')

@section('conteudo')

<h1>Inserir Fornecedor</h1>

<form method ="post" action="/fornecedores">

{{csrf_field()}}

Nome: <input type="text" name="nome" maxlength="100"><br>
Nome Fantasia: <input type="text" name="nomeFantasia"><br>
Telefone: <input type="text" name="telefone"><br>



<input type="submit" name="botaoSalvar" value="Salvar">



</form>

@endsection
