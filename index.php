<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="restrito/css/bootstrap.min.css" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
          <div class="col-6">
            <div class="p-3 mb-2 bg-light text-dark">  
              <h1 class="display-4">Login</h1>
              <form action="index.php" method="POST">
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="email"  aria-describedby="emailHelp">
                  <small class="form-text">Entre com seu Email</small>
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Senha</label>
                  <input type="password" class="form-control" name="senha">
                </div>

                <button type="submit" class="btn btn-success">Entrar</button>
                <a type="button" class="btn btn-primary" href="cadastro.php">Criar Conta</a>
              </form>  
              <?php
              
                if(isset($_POST['email'])) {
                  $email = $_POST['email'];
                  $senha = $_POST['senha'];

                  include "restrito/conexao.php";
                  $sql = "SELECT * FROM `usuarios` WHERE email = '$email' AND senha = '$senha'";

                  $result = mysqli_query($conn, $sql); 
                  $num_registros = mysqli_num_rows($result);
                    
                  if($num_registros == 1){
                    $linha = mysqli_fetch_assoc($result);
                    if(($email == $linha['email']) and ($senha == $linha['senha'])) {
                      if($linha['permissao'] == "1"){
                        session_start();
                        $_SESSION['email'] = "Professor";
                        header("location: restrito/index_professor.php");
                      } 
                      else if($linha['permissao'] == "2"){
                        session_start();
                        $_SESSION['email'] = "Aluno";
                        header("location: restrito");
                      }  
                    }
                    else{
                      echo "Email invalido";
                    }
                  }
                  else{
                    echo "Email ou senha não encontrados ou inválidos.";
                  }
                }                                     
              ?>
            </div>
          </div> 
        <div class="col-3"></div>   
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