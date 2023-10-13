<?php 
session_start();
$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status = '<b class = "text-success"> Voted</b>';
}else{
    $status = '<b class = "text-danger"> Not Voted</b>';

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System | Dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-secondary text-light">
    <div class="container my-5"> 
        <a href="../"><button class="btn btn-dark px-3">Back</button></a>
        <a href="./actions/logout.php"><button class="btn btn-dark px-3">Log out</button></a>
        <h2 class="my-3"> Voting System</h2>
        <div class="row my-5">
            <div class="col-md-7">
                <!--- Groups --->
                <div class="row">
                    <div class="col-md-4">
                        <img src="" alt="Image1">
                    </div>
                <div class="col-md-8">
                    <strong class="text-dark h5"> Group name :</strong><br><br>
                    <strong class="text-dark h5"> Votes :</strong><br>
                </div>
            </div>
            <hr>
            </div>
            <div class="col-md-5">
                 <!--- User --->
                 <img src="" alt="Image1">
                 <br><br>
                 <strong class="text-dark h5"> Name :</strong>
                 <?php echo $data['username'];?><br><br>
                 <strong class="text-dark h5"> Mobile :</strong>
                 <?php echo $data['phone'];?><br><br>
                 <strong class="text-dark h5"> Status :</strong>
                 <?php echo $status;?><br><br>

            </div>

        </div>
    </div>
</body>
</html>
