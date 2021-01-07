<?php 
			session_start();
			$email=$_SESSION['email'];
			if(!isset($_SESSION['email']))
    {
	header("location:index.html");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>Cronograma</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="imagens/icone.png">

	<link rel="stylesheet" href="css/styleschool.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<a href="menu.html"><i style="color: white; font-size: 2.5em; margin-left: 5%; padding-top: 4.5%;" class="fa fa-arrow-left"></i></a>

	<header>

		<img class="logo2" src="imagens/senac-logo2.png" alt="Logotipo do aplicativo"></a>

	</header>

	<main>

		<h2 style="font-size: 1.5em; color: white;text-align: center;padding-top: 10%;font-family: 'Orbitron', sans-serif;">Cronograma</h2>


		<table border="1">

			<tr>
				
				<th style="color: black;text-align: center;">Descrição</th>

				<th style="color: black;text-align: center;">Docente</th>

				<th style="color: black;text-align: center;">Inicio / Término</th>

			</tr>
			
			<?php 
			date_default_timezone_set('America/Sao_Paulo');
			$turma=$_SESSION['turma'];
			include_once("conexao.php");
		
			$sql = "SELECT  DATE_FORMAT(inicio,'%d/%m/%Y') AS inicio_formatado,DATE_FORMAT(termino,'%d/%m/%Y') AS termino_formatado,docente,descricao,turma FROM cronograma1 WHERE turma = '$turma' AND ((now()>=inicio) AND (now()<=termino)) ORDER BY inicio DESC";
			
			$resultado= mysqli_query($conn, $sql) or die ('Erro ao retornar dados');
			while ($linha = mysqli_fetch_array($resultado)) {
				?>

			<tr>
				<td><?php echo $linha['descricao']; ?></td>
				<td><?php echo $linha['docente']; ?></td>
				<td><?php echo $linha['inicio_formatado']." <br> ".$linha['termino_formatado']; ?></td>
			</tr>
			<?php
}
	mysqli_close($conn);
?>

		</table>


	</main>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>