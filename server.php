
<?php
           $servername = "localhost";
           $username = "root";
           $password = "localhost";
           $dbname = "actividad";

           $conn = new mysqli($servername,$username,$password,$dbname);
           if ($conn -> connect_error){
               die ("Fallo la conexión". $conn->connect_error);
           }
?>
