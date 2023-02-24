<?php
    include("koneksi.php");


    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];



    $query = $koneksi->query("select * from masyarakat where username='$username' AND password='$password'")->fetchAll();
    
    if ($query){
        $_SESSION["username"] = $_REQUEST['username'];
        $_SESSION["password"] = $_REQUEST['password'];
        header("Location:catatan.php");
    }
    else{
        header("Location:index.php");
    }
?>




