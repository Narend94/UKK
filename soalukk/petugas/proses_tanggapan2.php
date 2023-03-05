<?php

    $tanggapan = $_POST['tanggapan'];
    

    $database = new PDO("mysql:host=localhost;dbname=pelaporan", 'root', '');
    $query = $database->query("INSERT INTO tanggapan values('$tanggapan')");

    if($query){
        header("Location:tanggapan.php");
     }
     ?>

     