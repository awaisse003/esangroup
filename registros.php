<?php 
session_start();
if(isset($_SESSION['username']))
{
require 'db_connection.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)https://www.esangroup.com/tatc/registros.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Registros</title>
<style type="text/css">
.formulario {
	word-wrap: break-word;
        word-break:break-all;
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
			
			}#lgo{
			
				margin-left:30px;
				background:#FFF;
				width:150;
				height:15px;
				
				}
</style>
</head>

<body>

<div id="banner" align="center"><img src="image001 copy.jpg"></div>
<form id="form1" name="form1" method="post" action="registros.php" class="formulario">
<table width="498" height="241" border="0" cellpadding="0" cellspacing="0">
  <tbody>
  <a href="history.php">&nbsp; History</a>

 <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="plomo">
    <th scope="row">Numero _tatc</th>
<th><input type="text" name="numero_tato"> </th>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <th scope="row">Codigo_aduana</th>
<th><input type="text" name="codigo_aduana"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr class="plomo">
    <th scope="row">Codigo_operador</th>
<th><input type="text" name="codigo_operador"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Resolucion</th>
<th><input type="text" name="resolucion"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr class="plomo">
    <th scope="row">Tipo</th>
<th><input type="text" name="tipo"> </th>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <th scope="row">Tamaño</th>
<th><input type="text" name="tamano"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr class="plomo">
    <th scope="row">Sigla</th>
<th><input type="text" name="sigla"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Observación</th>
<th><input type="text" name="observation"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr class="plomo">
    <th scope="row">Nave</th>
<th><input type="text" name="nave"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Viaje</th>
<th><input type="text" name="viaje"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr class="plomo">
    <th scope="row">Lugar de devolucion</th>
<th><input type="text" name="lugar_de"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Agente</th>
<th><input type="text" name="agente"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr class="plomo">
    <th scope="row">B_L</th>
<th><input type="text" name="b_l"> </th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Estado</th>
    <th><input type="text" name="estado"> </th>

    <td>&nbsp;</td>
  </tr>
  <tr>
  <th><input type="submit" name="submit" > </th>
  </tr>
</tbody></table></form><a href="https://www.esangroup.com/tatc/registros.php?doLogout=true" id="lgo">  Cerrar sesión</a>




<div id="des_xnba_ewn"></div></body></html>

<?php
	
	if(isset($_POST['submit']))
	{
			$numero_tato= $_POST['numero_tato'];
			$codigo_aduana = $_POST['codigo_aduana'];
			$codigo_operador=$_POST['codigo_operador'];
			$resolucion=$_POST['resolucion'];
			$tipo=$_POST['tipo'];
			$tamano=$_POST['tamano'];
			$sigla=$_POST['sigla'];
			$observation=$_POST['observation'];
			$nave=$_POST['nave'];
			$viaje=$_POST['viaje'];
			$lugar_de=$_POST['lugar_de'];
			$agente=$_POST['agente'];
			$b_l=$_POST['b_l'];
			$estado=$_POST['estado'];
			
$sql = "INSERT INTO `easngroup`.`tablaregistro` ( `numero_tatc`, `codigo_aduana`, `codigo_operador`, `resolucion`, `tipo`, `tamano`, `sigla`, `observacion`, `nave`, `viaje`, `lugar_devolucion`, `agente`, `B_L`,estado) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$numero_tato,$codigo_aduana,$codigo_operador,$resolucion,$tipo,$tamano,$sigla,$observation,$nave,$viaje,$lugar_de,$agente,$b_l,$estado]);
  
	}

}
else
{
	session_destroy();
	echo "<script> window.location= 'index.php' ;</script>";
}
 ?>