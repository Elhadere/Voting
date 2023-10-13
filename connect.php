<?php 
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "db_voting";

    $con = mysqli_connect($db_server, 
                          $db_user, 
                          $db_password, 
                          $db_name);

    if (!($con)){
        die(mysqli_error($con));
    }
?>