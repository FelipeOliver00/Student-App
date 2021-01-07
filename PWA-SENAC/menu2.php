<?php 
		session_start();
		$turma=$_SESSION["turma"]; 
		?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>Manual, grade curricular e livros</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="imagens/icone.png">

	<link rel="stylesheet" href="css/stylemenus.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<span class="circle">

		<a href="home.php"><i style="color: black; font-size: 2.5em; padding-top: 6%; padding-left: 10%;" class="fa fa-home"></i>

		</a>

	</span>

	<header>

		<img class="logo2" src="imagens/senac-logo2.png" alt="Logotipo do aplicativo"></a>

	</header>

	<main>
		
		<form class="curso_conteudo"> 
			
			<button class="botao_menu"><a href="manual_aluno.php">Manual do Aluno</button></a><br>

			<button class="botao_menu2"><a href="gradecurricular.php">Grade Curricular</button></a><br>
			<?php
			if ($turma=="TI08"){?>
				<button class="botao_menu3"><a href="livros.php ">Livros</button></a><br>
				<?php }
			else { ?>
				<button class="botao_menu3"><a href="livros2.php ">Livros</button></a><br>
				<?php } ?>
		</form>

	</main>
	











	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>