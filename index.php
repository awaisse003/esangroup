<?php
require 'db_connection.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)https://www.esangroup.com/tatc/ingreso.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

<title>Registros</title>
<style type="text/css">
.formulario {
	margin-top:5%;
	height: auto;
	width: 600px;
	margin-left:auto;
	margin-right:auto;
	background:rgba(255,255,255,1);
	font-family:Verdana, Geneva, sans-serif;
	border-radius:30px;
}
body {
background: #004792;
margin-top:0px;
}table{
	text-align:left;
	
	padding-top:30px;
	padding-bottom:30px;
	padding-left:50px;
	
	
	
	}.plomo{
		background:rgba(204,204,204,1);
		
		}#banner{
			
			padding-top:0px;
			margin-left:auto;
			margin-right:auto;
			
			}
</style>
</head>

<body>

<div id="banner" align="center"><img src="image001 copy.jpg"></div>

<div class="formulario" align="center">

<form name="borm" action="index.php" method="POST">

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>Ingreso Empresa</p>
  <p>&nbsp;</p>
  <p> Usuario
      &nbsp; &nbsp;   <input name="usuario" type="text">
    <br><br>
  Contraseña 
  <input name="password" type="password">
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Ingresar">
  
  </p>
  <p>&nbsp;</p>


</form>

</div>


<div id="des_xnba_ewn"></div></body></html>
<?php
	
	if(isset($_POST['button']))
	{
		
		$username = $_POST['usuario'];
		$password = $_POST['password'];
		
		
$sql = "select * from  admin where name = ? AND password = ?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$username, $password]);
$row = $stmt->fetch();
if($stmt->rowCount())
{
	session_start();
	$_SESSION['username'] = $row['name'];
	echo "<script>window.location = 'registros.php';</script>";
}
	}

 ?>
