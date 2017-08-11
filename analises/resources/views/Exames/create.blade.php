@extends('principal')

@section('conteudo')

<h1>Criar Procedimento</h1>

<form method="POST" action="{{ route('procedimentos.store') }}">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

{{csrf_field()}}

Nome: <input type="text" name="nome" maxlength="100"><br>
Preco: <input type="text" name="preco"><br>
<input type="submit" name="botaoSalvar" value="Salvar">



</form>

@endsection
