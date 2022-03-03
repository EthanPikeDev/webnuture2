<?php      
        $host = "127.0.0.1";  
        $user = "root";  
        $password = 'my_secret_password';  
        $db_name = "app_db";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
    ?>  