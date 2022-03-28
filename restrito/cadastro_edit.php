<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Editar Cadastro</title>
  </head>
  <body>
  
    <?php
        include "conexao.php";
        //Verifica se a variável GET existe
        $id = $_GET['id'] ?? '';

        
        $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";
        $dados = mysqli_query($conn,$sql);
        $linha = mysqli_fetch_assoc($dados);

    ?>
    <!-- Container cadastro -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar Cadastro</h1>
                <!-- Forms de cadastro -->
                <form action="edit_script.php" method="POST">
                    <br>
                    <div class="form-group">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome'];?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco'];?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone'];?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $linha['email'];?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="data" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento'];?>">
                    </div>
                    <br>
                    <!-- Botão de Cadastro -->
                    <div class="form-group">
                        <a type="button" class="btn btn-danger" href="index.php">Voltar</a>
                        <input type="submit" class="btn btn-success" value="Salvar alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'];?>">
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