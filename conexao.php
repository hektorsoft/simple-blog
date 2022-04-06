<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '==1254ga');
define('DB', 'blogdb');



function conn_db()
{
  $conexao = new mysqli(HOST, USUARIO, SENHA, DB);
  if ($conexao->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
  } else {
    return $conexao;
  }
}

$db_conn = conn_db();