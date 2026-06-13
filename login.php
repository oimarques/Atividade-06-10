<!DOCTYPE html>
<html lang="en">

<head>
  <title>login</title>
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
      linear-gradient(to bottom, blue, green, black);

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


    body {
      background-image: url('https://wallpapers.com/images/hd/4k-tech-acbb4nkybiijedhg.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;

      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
  </style>
</head>

<body>
  <div id="principal">
    <form action="" method="POST">

      <div>
        <h1>LOGIN</h1>
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
      <div style="display: flex; justify-content: center; min-width: 100%;">
        <input id="botao" type="submit" value="ENVIAR" name="enviar">
      </div>
      <div style="display: flex; justify-content: center; min-width: 100%;">
        <input id="botao" type="submit" value="CADASTRAR" name="cadastrar" formnovalidate>
      </div>

    </form>
  </div>
  <div style="border: 0px;">
    <?php

    if (isset($_POST["enviar"])) {

      $USUARIO = $_POST["USUARIO"];
      $SENHA = $_POST["SENHA"];

      if ($USUARIO == "Ingryd" && $SENHA == "12345")
        header("location: site.html");
      else
        echo "Usuário e/ou senha inválido";
    }

    if (isset($_POST["cadastrar"])) {
      header("location: cadastro.php");
    }

    ?>
  </div>
</body>

</html>