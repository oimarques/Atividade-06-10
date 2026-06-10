<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cadastro</title>
  <style>
    p {
      color: green;
    }

    div {
      border: 1px solid;
      border-radius: 10px;
      
    }

    #principal {
      width: 200px;
      padding: 20px;
      margin: auto;
      background:
        linear-gradient(to right, cyan, pink)
    }

    .caixa {
      padding: 15px;
    }

    input {
      border-radius: 20px;
      display: flex;
    }

    h1 {
      text-align: center;
    }

    #botao {
      width: 100%;
      color: antiquewhite;
      background: gray;
      display: flex;  
    }

    body
    {
      background-image: url('https://png.pngtree.com/png-clipart/20231007/original/pngtree-cool-emoticon-cut-out-picture-image_13100993.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
  </style>
</head>

<body>
  <div id="principal">
    <form action="" method="POST">

      <div>
        <h1>CADASTRO</h1>
      </div>
      <br>
      <div class="caixa">
        <label for="USUÁRIO:">USUÁRIO:</label>
        <input type="USER" name="USUARIO">
      </div>
      <br>
      <div class="caixa">
        <label for="SENHA:">SENHA
          <input type="password" name="SENHA">
      </div>
      <br>  
        <input id="botao" type="submit" value="CADASTRAR" name="cadastrar">
      </div>
          
    </form>
  </div>
  <div style="border: 0px;">
    <?php    
    
    include "conecta.php";

    if(isset($_POST["cadastrar"]))
      {
      $usuario = $_POST["USUARIO"];
      $senha = $_POST["SENHA"];       
      $sql = "insert into usuario(usuario, senha)
      values('$usuario', '$senha')";  
        if (mysqli_query($conexao, $sql)) {
        
          echo "Cadastrado com sucesso.";

          header ("location: login.php");        
        } else {
          echo "Erro: " . $sql . "<br>" . mysqli_error
          ($conexao);
        }
        mysqli_close($conexao);

      }
    ?>
  </div>

</body>

</html>