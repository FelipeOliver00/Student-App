<?php 
			session_start();
			date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>Dados</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="imagens/icone.png">

	<link rel="stylesheet" href="css/stylevagas.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<a href="home.php">

		<i style="color: white; font-size: 2.5em; margin-left: 5%; padding-top: 4.5%;" class="fa fa-arrow-left"></i>

	</a>

	<header>

		<img class="logo2" src="imagens/senac-logo2.png" alt="Logotipo do aplicativo">

	</header>

	<main>

		<h1 style="font-size: 1.5em;color: white; text-align: center; padding-top: 10%;">Meus Dados</h1>

<br>

		<table style="margin-top: -1px; border="1">

			<tr>

				<td colspan="2">

					<i style="color: black; display: flex; align-items: center;justify-content: center;" class="fa fa-user fa-2x"></i>

				<h1 style="font-size: 1.3em; color: black; text-align: center;">Dados Pessoais</h1></td>

			</tr>

			<?php
			$turma=$_SESSION['turma'];
			include_once("conexao.php");
			$sql = "SELECT DATE_FORMAT(data,'%d/%m/%Y') AS data, nome, email, rua, bairro, cidade, telefone, celular, turma FROM dados WHERE turma = '$turma'";
			$resultado= mysqli_query($conn, $sql) or die ('Erro ao retornar dados');
			while ($linha = mysqli_fetch_array($resultado)) {
				?>
			
			<tr>

				<td style="text-align: center; font-weight: bolder;">Nome</td>

				<td style="text-align: center;"><?php echo $linha ['nome']; ?></td>

			</tr>
			

			<tr>
				
				<td style="text-align: center; font-weight: bolder;">Data de Nascimento</td>

				<td><?php echo $linha ['data']; ?></td>

			</tr>

			<tr>
				
				<td style="text-align: center; font-weight: bolder;">Email</td>

				<td><?php echo $linha ['email']; ?></td>

			</tr>

		
<!-- Inicio de Endereço -->

			<tr>

				<td colspan="2">

					<i style="color: black;display: flex; align-items: center;justify-content: center;" class="fa fa-home fa-2x"></i>

					<h1 style="font-size: 1.3em; color: black; text-align: center;">Endereço</h1>

				</td>

			</tr>
			
			<tr>

				<th style="text-align: center; font-weight: bolder;">Rua</th>

				<th style="text-align: center;"><?php echo $linha ['rua']; ?></th>

			</tr>


			<tr>
				
				<td style="text-align: center; font-weight: bolder;">Bairro</td>

				<td><?php echo $linha ['bairro']; ?></td>

			</tr>

			<tr>
				
				<td style="text-align: center; font-weight: bolder;">Cidade</td>

				<td><?php echo $linha ['cidade']; ?></td>

			</tr>

			<tr>

				<td colspan="2">

					<i style="color: black;display: flex; align-items: center;justify-content: center;" class="fa fa-phone fa-2x"></i>

					<h1 style="font-size: 1.3em; color: black; text-align: center;">Contato</h1>

				</td>

			</tr>

			<tr>
				
				<td style="text-align: center; font-weight: bolder;">Telefone<br> Residencial</td>

				<td><?php echo $linha ['telefone']; ?></td>

			</tr>

			<tr>
				
				<td style="text-align: center; font-weight: bolder;">Celular</td>

				<td><?php echo $linha ['celular']; ?></td>

			</tr>
<?php
	}
	mysqli_close($conn);
?>

		</table>
<br>


