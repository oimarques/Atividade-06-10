<?php
  include "conecta.php";
  echo "Inserindo dados...";

  $sql = "insert into usuario(usuario, senha)
  values('Samuel', '12345')";

  if (mysqli_query($conexao, $sql)) {
    echo "Cadastrado com sucesso.";
  } else {
    echo "Erro: " . $sql . "<br>" . mysqli_error
    ($conexao);
  }
  mysqli_close($conexao)
?>