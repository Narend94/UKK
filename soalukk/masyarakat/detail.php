<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UKK DIMAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <?php 
  session_start();
    $db = new PDO("mysql:host=localhost;dbname=pelaporan", 'root', '');
    $nik = $_SESSION['nik'];
    $query = $db->query("select * from pengaduan where nik='$nik'");

?>
  <nav class="navbar navbar-expand-lg bg-info navbar-dark">
  <div class="container">
    <a class="navbar-brand" ><b>Pelaporan Pengaduan Masyarakat</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pengaduan.php">Tambah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Logout</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container text-center">
  <div class="row align-items-start">
  
  </div>       
    <div class="container">
        <?php
        $query = $db->query("SELECT * FROM tanggapan INNER JOIN pengaduan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan INNER JOIN petugas ON petugas.id_petugas = tanggapan.id_petugas;");
        $datas = $query->fetchAll();
        // var_dump($data);
        // die();
        ?>
  <div class="container text-center">
  <div class="row align-items-start">
 
    <div class="col">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Tanggapan</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Tanggal Tanggapan</th>
      <th scope="col"> Tanggapan</th>
      <th scope="col">Petugas</th>
    </tr>
  </thead>
        
            <tbody>
                <?php foreach ($datas as $data) : ?>
                    <tr>
                        <td><?= $data['id_tanggapan'] ?></td>
                        <td><?= $data['isi_laporan'] ?></td>
                        <td><?= $data['tgl_tanggapan'] ?></td>
                        <td><?= $data['tanggapan'] ?></td>
                        <td><?= $data['nama_petugas'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    </hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
