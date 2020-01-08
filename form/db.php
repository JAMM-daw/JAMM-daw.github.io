<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "formulario";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if($conn){

      	echo "connect";
      }
      	else {
          die('Could not Connect MySql Server:' .mysql_error());
      	}
        
?>