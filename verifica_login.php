<?php

session_start();
if(!$SESSION['users']) {
	header('Location: logar.php');
	exit();
}