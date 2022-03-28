<?php
  include "../validar.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro</title>
  </head>
  <body>
  
    <!-- Container cadastro -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <!-- Forms de cadastro -->
                <form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
                    <br>
                    <div class="form-group">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="data" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="foto" class="form-label">Foto de Perfil</label>
                        <input type="file" class="form-control" name="foto" accept="image/*">
                        <!-- Para aceitar todo tipo de imagem: accept="image/*" -->
                    </div>
                    <br>
                    <!-- Botão de Cadastro -->
                    <div class="form-group">
                        <a type="button" class="btn btn-danger" href="index.php">Voltar</a>
                        <input type="submit" class="btn btn-success" value="Cadastrar">
                    </div>
                    <!-- Fim botão de Cadastro -->
                </form>
                <!-- Fim forms de Cadastro -->
            </div>
        </div>
    </div> 
    <!-- Fim container cadastro -->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>