<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet"  href="./bootstrap/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="./js/bootstrap.js"></script>
</head>

<body>

  <div class="col-md-13">
    <div class="jumbotron text-center">
      <h1>Cadastro de Alunos</h1>
    </div>
  </div>

  <main class="container">
      <form action="#">
          <fieldset>
                <div class="form-group">
                <div class="row">

                  <?php
                    //var_dump($_GET);

                    $nome = "Nome: " . $_POST["nome"];
                    echo "<h1>$nome</h1>";
                    $genero = "Sexo:  " . $_POST["genero"];
                    echo "<h1>$genero</h1>";
                    $cpf = "CPF:  " . $_POST["cpf"];
                    echo "<h1>$cpf</h1>";
                    $rg = "RG: " . $_POST["rg"];
                    echo "<h1>$rg</h1>";
                    $nascimento = "Data Nascimento: " . $_POST["nascimento"];
                    echo "<h1>$nascimento</h1>";
                    $telefone = "Telefone: " . $_POST["telefone"];
                    echo "<h1>$telefone</h1>";
                    $email = "Email:  " . $_POST["email"];
                    echo "<h1>$email</h1>";
                    $rua = "Rua: " . $_POST["rua"];
                    echo "<h1>$rua</h1>";
                    $numero = "Número: " . $_POST["numero"];
                    echo "<h1>$numero</h1>";
                    $bairro = "Bairro: " . $_POST["bairro"];
                    echo "<h1>$bairro</h1>";
                    $cidade = "Cidade: " . $_POST["cidade"];
                    echo "<h1>$cidade</h1>";
                    $cep = "CEP: " . $_POST["cep"];
                    echo "<h1>$cep</h1>";
                    $estado = "Estado: " . $_POST["estado"];
                    echo "<h1>$estado</h1>";

                    ?>

                </div>
              </div>
            </fieldset>
        </form>
      </main>
</body>
</html>
