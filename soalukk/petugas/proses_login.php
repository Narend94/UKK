<?php
    include("koneksi.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $koneksi->query("select * from petugas where username='$username' AND password='$password'")->fetch();
    
    
    if ($query){
        
        $_SESSION["username"] = $_REQUEST['username'];
        $_SESSION["password"] = $_REQUEST['password'];
        $_SESSION['id_petugas'] = $query['id_petugas']; 
        // die($_SESSION);
        header("Location:tanggapan.php");
    }
    else{
        header("Location:login.php");
    }
?>