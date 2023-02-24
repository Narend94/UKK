<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <?php 
    $db = new PDO("mysql:host=localhost;dbname=pelaporan", 'root', '');
    $query = $db->query('select * from pengaduan');

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
 
    <div class="col">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Pengaduan</th>
      <th scope="col">Tanggal Pengaduan</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
     while ($data = $query->fetch()):
     ?>
    
    <tr>
    
      <td><?= $data['id_pengaduan' ]?></td>
      <td> <?= $data['tgl_pengaduan']?></td>
      <td><?= $data['isi_laporan']?></td>
      <td><?= $data['foto']?></td>
      <td><?= $data['status']?></td>
      <td>
        <a href="update.php?id_pengaduan=<?= $data['id_pengaduan']; ?>" class="btn btn-secondary"> Update </a>
        <a href="prodelete.php?id_pengaduan=<?= $data['id_pengaduan']; ?>" class="btn btn-danger"> Delete</a>
      </td>
      
    </tr>
    <?php endwhile ?>
  </tbody>
</table>
    
      </div>
        

    
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>