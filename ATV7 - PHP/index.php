<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Introdução ao PHP</title>
  </head>
  <body>

    <div class="col-md-13">
      <div class="jumbotron text-center">
        <h1>Cadastro de Alunos</h1>
      </div>
    </div>

    <form action="exibir.php" method="post">

      <fieldset>
      <legend>Dados Pessoais</legend>
      Nome: <input type="text" name="nome"  class="form-control" placeholder="Digite seu nome" >
      Sexo: <input type="radio" name="genero"  value="male"> Masculino
      Sexo:      <input type="radio" name="genero"  value="female"> Feminino<br><br>
      CPF:  <input type="text" name="cpf" class="form-control" placeholder="111.111.111-11">
      RG:   <input type="number" name="rg" class="form-control"placeholder="11.111.111"><br><br>
      Telefone: <input type="number" name="telefone"class="form-control"placeholder="(11) 1111-1111">
      Email: <input type="email" name="email"class="form-control"placeholder="Digite o seu email"><br><br>
      </fieldset>

      <fieldset>
      <legend>Endereço</legend>
      Rua: <input type="text" name="rua"class="form-control"placeholder="Digite a rua">
      Número:  <input type="text" name="numero"class="form-control"placeholder="Digite o número">
      Bairro: <input type="text" name="bairro"class="form-control"placeholder="Digite o bairro"><br><br>
      Cidade: <input type="text" name="cidade"class="form-control"placeholder="Digite a cidade">
      CEP: <input type="text" name="cep"class="form-control"placeholder="Digite o CEP">
      Estado <input type="text" name="estado"class="form-control"placeholder="Digite o Estado"><br><br>
      </fieldset>

      <fieldset>
      <legend>Login</legend>
      Login: <input type="text" name="usuario"class="form-control"placeholder="Digite o Usuário" required >
      Senha: <input type="password" name="senha"class="form-control" placeholder="Digite a Senha" >
      <input type="submit" name="botaoCadastrar" value="Cadastrar">
      </fieldset>

    </form>

  </body>
</html>
