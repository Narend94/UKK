<?php
    $id_petugas = $_POST['id_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $level = $_POST['level'];

    $koneksi = new PDO("mysql:host=localhost;dbname=pelaporan", 'root', '');
    $query = $koneksi->query("INSERT INTO petugas values('$id_petugas','$nama_petugas','$username','$password','$telp','$level')");

    if($query){
        header("Location:login.php");
     }
    ?>