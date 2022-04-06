<?php
session_start();
include('conexao.php');
	  


$conectar = conn_db();

if(empty($_POST['users']) || empty($_POST['pass'])){
	header('Location: logar.html');
	exit();
}

$users = $_POST['users'];
$pass = md5($_POST['pass']);
								 
$querry = "select id_users, users from users where users = '{$users}' AND pass = '{$pass}'";
$result = mysqli_query($conectar, $querry);

$usr= $result->fetch_assoc();
$idUsuario= $usr['id_users'];
echo($idUsuario);
$_SESSION['usr'] = $idUsuario;

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['users'] = $users;
	header('Location: index.php');
	exit();
} else {
	header('Location: logar.html');
	exit();
}