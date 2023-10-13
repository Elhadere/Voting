<?php 
    session_start();
    include("connect.php");

 
    $username  = $_POST['username'] ;
    $password  = $_POST['password'];
    $phone     = $_POST['phone'];
    $standard  = $_POST['std'];

    $sql = "SELECT * FROM `users` WHERE (username ='$username' 
                                     AND password = '$password' 
                                     AND phone = '$phone' 
                                     AND standard = '$standard')";

    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0){
        $sql = "SELECT username, photo, votes, id FROM `users` WHERE standard = 'group'";
        $resultGroup = mysqli_query($con, $sql);
        if(mysqli_num_rows($resultGroup)>0){
            $group = mysqli_fetch_all($resultGroup, MYSQLI_ASSOC);
            $_SESSION['group'] = $group;
        }
        $data = mysqli_fetch_array($result);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data; 
        header("dashbord.php");
        echo '<script>
        alert("Login succesfully !!");
        window.location="dashbord.php";
        </script>';
    }else{
        echo '<script>
        alert("Information Invalid !!");
        window.location="../";
        </script>';
    }

?>