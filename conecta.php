<?php
$servidor = "localhost:3307";
$usuario = "root";
$senha = "";
$banco = "inf261";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);


if (!$conexao) {
  die("Conexão falhou: " . mysqli_connect_error());
}
?>