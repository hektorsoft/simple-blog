<?php
session_start();
include('conexao.php');

$conectar = conn_db();

if (empty($_SESSION['users'])){
	header('Location: index.php');
};

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$idUser = $_POST['idUser'];

echo $titulo.'<br>'.$conteudo;

$inserir = "INSERT INTO artigos (titulo, conteudo,id_users)
VALUES ('{$titulo}', '{$conteudo}','{$idUser}')";

if ($conectar->query($inserir) === TRUE) {
    header('Location: index.php');
} else {
	echo "Erro ao publicar ";
};