<?php
session_start();
include('conexao.php');
$conectar = conn_db();

$sql="Select id from users;";
$users_id = mysqli_query($conectar, $sql);


$idPost = (!empty($_GET['id']) ? $_GET['id']:"");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="css/css.css">
<?php
		$sql = "SELECT * FROM artigos WHERE id = '{$idPost}'";
		$resultado = $conectar->query($sql);

    
		if ($resultado->num_rows > 0) {
		  // output data of each row
		  while($row = $resultado->fetch_assoc()) {
			?>
  <title><?=$row['titulo']?> - Meu Blog</title>
  <?php
      } }
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
  
</head>
<body >

<div class="p-5 bg-primary text-white text-center">
  <h1>Meu Blog</h1>
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


<div class="container mt-5">
  <div class="row">
    <div class="col-sm-8">
        <h2>Leitura</h2>

        <?php
      if (!empty($_SESSION['users'])){
?>
		<?php
		$sql = "SELECT * FROM artigos WHERE id = '{$idPost}'";
		$resultado = $conectar->query($sql);

    
		if ($resultado->num_rows > 0) {
		  // output data of each row
		  while($row = $resultado->fetch_assoc()) {
			?>
			<div class="card-post">
      <h6>Publicado em <?=date("d/m/Y \à\s H:i", strtotime($row['data']))?> <a href="edit.php?id=<?=$row['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          </svg></a>
          <a href="delete_post.php?id=<?=$row['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="darkred" class="bi bi-trash2-fill" viewBox="0 0 16 16">
          <path d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z"/>
      </svg></a><br></h6>
      <h4 class="mt-4" id="titulo"><?=$row['titulo']?>  
       
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          
      
        </h4>
				
				<p id ="conteudo"><?=$row['conteudo']?></p>
			</div>
			<?php
		  }
		} else {
		  echo "0 results";
		}
		?>
  <?php
      }else{
      ?>
      		<?php
		$sql = "SELECT * FROM artigos WHERE id = '{$idPost}'";
		$resultado = $conectar->query($sql);

    
		if ($resultado->num_rows > 0) {
		  // output data of each row
		  while($row = $resultado->fetch_assoc()) {
			?>
			<div class="card-post">
      <h6>Publicado em <?=date("d/m/Y \à\s H:i", strtotime($row['data']))?><br></h6>
				<h4 class="mt-4" id="titulo"><?=$row['titulo']?>  
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></h4>

				<p id="conteudo"><?=$row['conteudo']?></p>
			</div>
			<?php
		  }
		} else {
		  echo "0 results";
		}}
		?>
      
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Criado por Gabriel A. de Lima - 2022</p>
</div>

</body>
</html>