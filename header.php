<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link rel="stylesheet" href="../assets/styles/bootstrap.min.css">
    <title><?= $title; ?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light container">
  <div class="container-fluid">
    <a class="navbar-brand text-success fw-bold" href="./view-wisata.php">Jateng Tour</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link"href="./view-wisata.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="./view-data-wisata.php">Data Pariwisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./view-chart-pengunjung.php">Data Pengunjung</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./view-ticket.php">Pesan Tiket</a>
        </li>
      </ul>
    </div>
  </div>
</nav>