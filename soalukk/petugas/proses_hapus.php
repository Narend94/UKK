<?php
include('koneksi.php');

$id_pengaduan = $_GET['id_pengaduan'];

$db = new PDO("mysql:host=localhost;dbname=pelaporan", 'root', '');
$query = $db->query("DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");

 if($query){
     header("location:tanggapan.php");
 }
 ?>