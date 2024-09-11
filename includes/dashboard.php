<?php include('dbcon.php'); ?>
<?php session_start(); ?>
<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$query = "select * from `login` where `email` = '$email' and `password` = '$password'";

$result = mysqli_query($con, $query);

if(!$result){
    die("Query Failed".mysqli_error($con));
}
else{
    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location:../home.php');
    }
    else{
        header('location:../login.php?message=Sorry you have entered wrong credentials....');
    }
    }

?>