<?php 
  session_start();
  $id = $_GET['id_pengaduan'];
//  echo $_SESSION['id_petugas']; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UKK DIMAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
  <div class="container">
    <a class="navbar-brand"><b>Pelaporan Pengaduan Masyarakat</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard_petugas.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Logout</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="col-md-5">
<form action="proses_tanggapan.php?id_pengaduan=<?= $id ?>" method="POST">
    <label for="inputEmail4" class="form-label">Tanggal Kejadian</label>
    <input type="date" name="tanggal" class="form-control" id="inputEmail4">
  </div>
  <div class="container">
  <div class="col-md-6">
<label for="floatingTextarea2">Tanggapan</label>
  <div class="form-floating">
  <textarea class="form-control" name="isi_tanggapan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
</div>
    <select name="status" id="level ">
      <option selected value="proses">proses</option>
      <option value="selesai">selesai</option>
    </select>
  <div class="col-12">
    <button type="submit" class="btn btn-primary mt-5">Kirim Tanggapan</button>
  </div>
</form>
    </div>
    <div class="col">
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>