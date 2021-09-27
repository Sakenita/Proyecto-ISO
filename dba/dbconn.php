<?php
    $con=mysqli_connect("localhost", "root", "", "parqueo");
    if(mysqli_connect_errno()){
    echo "Error de conexión".mysqli_connect_error();
    }
?>