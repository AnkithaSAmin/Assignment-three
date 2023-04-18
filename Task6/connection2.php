<?php      
    $host = "localhost";  
    $user = "ankitha";  
    $password = "ankitha28";  
    $db_name = "ankitha_reg";  
      
    $con = mysqli_connect("localhost", "ankitha", "ankitha28", "ankitha_reg");  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  
