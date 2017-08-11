<?php

  // Model
  $db = new PDO('mysql:host=localhost;dbname=academico1', 'sistemaweb', '123456');

  $retorno = $db->query("SELECT * FROM alunos ORDER BY nome");

?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Tabela</title>
  <link rel="stylesheet"  href="./bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="./js/bootstrap.js"></script>
</head>

  <body>

    <header>
        <div class="col-md-13">
          <div class="jumbotron text-center">
            <h1>Lista de alunos matriculados</h1>
          </div>
        </div>
    </header>

    <style>

      table {
        width: 100%;
        border-collapse: collapse;
      }

      tr:hover {
        background-color: #e8e8e8;
      }

      tr:nth-child(even) {
        background-color: #d0d0d0;
      }

      </style>

      <main class="container">
        <table border="1">
          <tr>
          <th>Código</th>
          <th>Nome</th>
        </tr>

        <?php
        // Controller
        while ($linha = $retorno->fetch(PDO::FETCH_ASSOC)) {
          // View
          echo "<tr>";
          echo "<td>" . $linha["id"] . "</td>";
          echo "<td>" . $linha["nome"] . "</td>";
          echo "</tr>";
        }
        ?>

      </main>
    </table>
  </body>
</html>
