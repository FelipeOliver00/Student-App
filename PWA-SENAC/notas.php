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

	<title>Notas</title>

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

		<h2 style="font-size: 1.5em; color: white; text-align: center; padding-top: 10%; font-family: 'Orbitron', sans-serif;">Notas</h2>

		<table border="1">

			<tr>
				
				<th style="color: black;text-align: center;font-size: 0.9em;">Descrição</th>
				<th style="color: black;text-align: center;font-size: 0.9em;">Notas / Menções</th>
				<th style="color: black; text-align: center;font-size: 0.9em;">% CH Aprovação</th>
				<th style="color: black; text-align: center;font-size: 0.9em;">Resultados</th>
			</tr>
			
				<?php 

			include_once("conexao.php");
			$mencao = "";
			$aprovacao = 0;
			$resultado = 0;
			$sql ="SELECT descricao, tp,tf FROM faltas WHERE email = '$email'";
			$resultado= mysqli_query($conn, $sql) or die ('Erro ao retornar dados');
			while ($linha = mysqli_fetch_array($resultado)) {
				if ($linha['tp']!=0 and $linha['tf']!=0){
				$aprovacao = ($linha['tp']/($linha['tp']+$linha['tf']))*100;
				$aprovacao=number_format($aprovacao,1);
				if ($aprovacao>=75){
					$mencao="D";
					$notafinal='APR';
				}
				else {$mencao="ND";
					$notafinal='REP';

			}}
				?>
			<tr>
				<td><?php echo $linha['descricao']; ?></td>
				<td><?php echo $mencao; ?></td>
				<td><?php echo $aprovacao; ?></td>
				<td><?php echo $notafinal; ?></td>
			</tr>
<?php 
}
	mysqli_close($conn);
?>
	
		</table>
		<br><br>

	</main>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>