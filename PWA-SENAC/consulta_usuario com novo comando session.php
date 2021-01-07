<?php 

session_start();
$email = $_POST['femail'];
if(!isset($_SESSION['email']))
    {
	header("location:index.html");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>
<?php
	$email=$senha="";
	if (!empty($_POST["femail"])) {
		$email=$_POST["femail"]; }
	else 
		{echo ('<script> alert("Email não informado!"); window.location.href="index.html";</script>'); }

	if (!empty($_POST["fsenha"])) {
		$senha=$_POST["fsenha"]; }
	else 
		{echo ('<script> alert("Senha não informada!"); window.location.href="index.html";</script>'); }
//trabalhando com session
//*******************************************	
	// colocando a variavel email na session
	$_SESSION['email'] =$_POST['femail'];
 
//********************************
	include_once("conexao.php");
    
	$sql = "SELECT * FROM aluno WHERE email = '$email'  AND senha = '$senha'";

	$resultado= mysqli_query($conn, $sql) or die ('Erro ao retornar dados');

	$registro = mysqli_fetch_array($resultado);
	if (!$registro) {
	echo ('<script>alert("Usuário não encontrado!");
		window.location.href="index.html";</script>');
	die();
}
else {
	$_SESSION['turma'] = $registro['turma'];
	echo ('<script>window.location.href="home.php";</script>'); }	
     
  mysqli_close($conn);
	
  ?> 		
