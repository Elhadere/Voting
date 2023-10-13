<?php
    include("connect.php");

    $username  = $_POST['username'] ;
    $password  = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phone     = $_POST['phone'];
    $standard  = $_POST['std'];
    if($password!=$cpassword){
        echo '<script>
        alert("Passwords does not match !!");
        window.location="../parts/register.php";
        </script>';
    }
  


    
    if($password == $cpassword){
        $sql = "INSERT INTO `users`(username, phone, password, standard, status, votes)
                VALUES ('$username','$phone', '$password', '$standard', '0', '0')";
        $result = mysqli_query($con, $sql);
        echo '<script>
        alert("you are registered !!  You can login now");
        window.location="index.php";
        </script>';
    }
?>