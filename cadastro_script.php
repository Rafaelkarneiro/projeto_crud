<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="restrito/css/bootstrap.min.css" rel="stylesheet">
    <link href="restrito/css/estilo.css" type="text/css" rel="stylesheet">

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <?php
                include "restrito/conexao.php";

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $data_nascimento = $_POST['data_nascimento'];
                $senha = $_POST['senha'];
                $foto = $_FILES['foto'];
                $nome_foto = mover_foto2($foto);
                $permissao = $_POST['permissao'];
                if($nome_foto == 0) {
                  $nome_foto = null;
                }

                if($permissao == "professor"){
                  $permissao = "1";
                }
                else if($permissao == "aluno"){
                  $permissao = "2";
                }
                
                $sql = "INSERT INTO `usuarios`(`nome`, `email`, `data_nascimento`, `senha`, `permissao`,`foto`) VALUES ('$nome','$email','$data_nascimento','$senha','$permissao','$nome_foto')";
                

                if (mysqli_query($conn, $sql)) {
                  if($nome_foto != null) {
                    echo "<img src='restrito/img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
                  }
                  mensagem("$nome cadastrado com sucesso!",'success');
                }
                else{
                  mensagem("$nome não foi cadastrado!",'danger');
                }
            ?>
            <a href="cadastro.php" class="btn btn-primary">Voltar</a>
        </div>
    </div> 
    

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