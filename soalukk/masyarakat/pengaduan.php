

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
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
          <a class="nav-link active" aria-current="page" href="index.php">Logout</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row align-items-start">
    <div class="col-7">
    <form class="row g-2" action="proses_tambah.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
        <h4 class="my-4">Masukan Data Sesuai Dengan Kejadian</h4>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Tanggal Kejadian</label>
    <input type="date" name="tgl_pengaduan" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">NIK-Nomor Induk Kependudukan</label>
    <input type="text" name="nik" class="form-control" id="inputPassword4" placeholder="Masukkan NIK anda">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Kronologi Kejadian</label>
    <input type="text" name="isi_laporan" class="form-control" id="inputAddress" placeholder="Masukkan detail kejadian">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Upload Foto Kejadian</label>
    <input type="file" name="foto" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"  accept="image/jpeg, image/png, image/jpg" required>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Kirim Laporan</button>
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