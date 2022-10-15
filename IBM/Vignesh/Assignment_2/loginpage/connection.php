<?php      
    $host = "localhost";  
    $user = "login1";  
    $password = '12345';  
    $db_name = "login1";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  