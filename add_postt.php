<?php
session_start();
include('conexao.php');
$conectar = conn_db();


if (empty($_SESSION['users'])){
	header('Location: index.php');
};
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Postar um Artigo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/css.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body class="text-center">

<div class="p-5 bg-primary text-white text-center">
  <h1>Meu Blog - Adicionar Artigo</h1>
</div>

</div>


<?php
if (!empty($_SESSION['users'])){
?>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_postt.php">Publicar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deslogar.php">Sair</a>
        </li>
      </ul>
    </div>
  </nav>
<?php
} else {
?>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logar.html">Entrar</a>
        </li>
      </ul>
    </div>
  </nav>
<?php
}
?>

<form id="addPost" action="add_post.php" method="post">
    <br>
    <br>
    <div class="form-group" id="titulo2">
      <label for="exampleFormControlInput1">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título da postagem" required>
    </div>
    <div class="form-group" id="conteudo2" >
      <label for="exampleFormControlTextarea1">Conteúdo</label>
      <textarea class="form-control" id="conteudo2" name="conteudo" placeholder="Digite aqui o conteúdo de sua postagem" required rows="10"></textarea>
    </div>
    <?php
		$sql = "SELECT * FROM users";
		$resultado = $conectar->query($sql);

    
		if ($resultado->num_rows > 0) {
		  // output data of each row
		  while($row = $resultado->fetch_assoc()) {
        
      $idUsuario = $_SESSION['usr'] ;
			?>
      <input type="hidden" id="idUser" name="idUser" value="<?=$idUsuario?>">
      <?php 
      }
    }
    ?>
    <button class="btn btn-outline-dark btn-lg btn-block"    type="submit" id="postar">Postar </button>
  </form>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Criado por Gabriel A. de Lima - 2022</p>
</div>

</body>
</html>