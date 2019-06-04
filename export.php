 <?php  
      //export.php  
 require 'db_connection.php';
 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      	$sql = "select * from  tablaregistro";
$stmt= $pdo->prepare($sql);
$stmt->execute();
while($row = $stmt->fetch())
{ 
           fputcsv($output, $row);  
      }  

      fclose($output);  
 
 ?>