<?php
session_start();
include('conexao.php');
$conectar = conn_db();

if (empty($_SESSION['users'])){
	header('Location: index.php');
};

$idPost = (!empty($_GET['id']) ? $_GET['id']:"");
echo($idPost);
$sql="DELETE FROM artigos WHERE id = '{$idPost}'; ";

if ($conectar->query($sql) === TRUE) {
  header('Location: index.php?');
} else {
	echo "Erro ao Deletar ";
};



?>