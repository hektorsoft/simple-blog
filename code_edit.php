<?php
session_start();
include('conexao.php');

$conectar = conn_db();

if (empty($_SESSION['users'])){
	header('Location: index.php');
};

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$idPost = $_POST['idPost'];

echo $titulo.'<br>'.$conteudo;

echo $idPost;

$update = "UPDATE artigos SET titulo= '{$titulo}', conteudo= '{$conteudo}' WHERE id = '{$idPost}';";

if ($conectar->query($update) === TRUE) {
    header('Location: index.php');
} else {
	echo "Erro ao publicar ";
};