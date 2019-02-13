<?php
    session_start();
    $con= mysqli_connect('localhost', 'root', 'password');
    if($con)
    {
        echo 'connection sucessful';
    } else {
        echo 'connection unsucessful';
    }
    $db = mysqli_select_db($con, 'phplogin');
    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];
    }
    echo $username;
    $sql="select * from login where username='$username' and password='$password'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_num_rows($query);
    if($row == 1)
    {
        echo 'login sucessful';
        $_SESSION['user'] = $username;
        header('location:userpage.php');
    }
    else 
    {
        echo 'login unsucessful';
    }
?>