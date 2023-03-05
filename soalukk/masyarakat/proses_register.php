<?php

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];

    $koneksi = new PDO("mysql:host=localhost;dbname=pelaporan", 'root', '');
    $query = $koneksi->query("INSERT INTO masyarakat values('$nik','$nama','$username','$password','$telp')");

    if($query){
        header("Location:index.php");
     }
     ?>