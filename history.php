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
<table  border="1" >
  <tbody>
  


  <tr >
  <th>#.</th>
    <th >Numero _tatc</th>

    <th >Codigo_aduana</th>
	 <th >Codigo_operador</th>

    <th >Resolucion</th>
	    <th > Tipo</th>
	    <th > Tamaño</th>
	    <th >Sigla </th>
	    <th >Observación </th>
	    <th >Nave </th>
	    <th > Viaje</th>
	    <th > Lugar de devolucion</th>
			    <th >Agente </th>
	    <th > B_L	</th>
	    <th > Estado</th>
	
  </tr>
    <?php 
	
	$sql = "select * from  tablaregistro";
$stmt= $pdo->prepare($sql);
$stmt->execute([$username, $password]);
while($row = $stmt->fetch())
{
	echo "<tr>";
	echo "<td>".$row['idtablaregistro']."</td>";
		echo "<td>".$row['numero_tatc']."</td>";

			echo "<td>".$row['codigo_aduana']."</td>";

				echo "<td>".$row['codigo_operador']."</td>";
	echo "<td>".$row['resolucion']."</td>";
	echo "<td>".$row['tipo']."</td>";
	echo "<td>".$row['tamano']."</td>";
	echo "<td>".$row['sigla']."</td>";
	echo "<td>".$row['observacion']."</td>";
	echo "<td>".$row['nave']."</td>";
	echo "<td>".$row['viaje']."</td>";
	echo "<td>".$row['lugar_devolucion']."</td>";
	echo "<td>".$row['agente']."</td>";
	echo "<td>".$row['B_L']."</td>";
	echo "<td>".$row['estado']."</td>";

}
  ?>
  </tbody></table></form><a href="https://www.esangroup.com/tatc/registros.php?doLogout=true" id="lgo">  Cerrar sesión</a>




<div id="des_xnba_ewn"></div></body></html>

<?php



}
else
{
	session_destroy();
	echo "<script> window.location= 'index.php' ;</script>";
}
 ?>