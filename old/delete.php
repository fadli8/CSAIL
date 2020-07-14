<?php  
 $connect = mysqli_connect("sql9.freemysqlhosting.net", "sql9351309", "RQy7Yk8QyN", "sql9351309");  
 $sql = "DELETE FROM projects WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>