<?php
session_start();

if (!$_SESSION['username']) {
  header('location:login.php');
}

include "database/db.php";

$query = "SELECT * FROM pasien";

$pasien = mysqli_query($connection, $query);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Aplikasi Kesehatan!</title>
</head>

<body>
  <!-- Image and text -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="img/heartbeat.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      Kesehatan
    </a>

    <a href="configure/logout.php" class="btn btn-outline-primary">Logout</a>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 py-4">
        <a href="form.php" class="btn btn-primary">Tambah Data Pasien</a>
      </div>
      <div class="col-lg-12">
        <table class="table table-striped table-hovered">
          <thead>
            <th>ID</th>
            <th>Nama Pasien</th>
            <th>Nomor Telp</th>
            <th>Alamat</th>
            <th>Tempat, Tanggal lahir</th>
            <th>Golongan Darah</th>
            <th>Tinggi Badan (cm)</th>
            <th>Berat Badan (kg)</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php if (mysqli_num_rows($pasien) > 0) : ?>
              <?php while ($row = mysqli_fetch_assoc($pasien)) : ?>
                <tr>
                  <td>P_000<?= $row['id'] ?></td>
                  <td><?= $row['nama'] ?></td>
                  <td><?= $row['nomor'] ?></td>
                  <td><?= $row['alamat'] ?></td>
                  <td><?= $row['tempat_lahir'] ?>, <?= date('d M Y', strtotime($row['tanggal_lahir'])) ?></td>
                  <td><?= $row['golongan_darah'] ?></td>
                  <td><?= $row['tinggi_badan'] ?></td>
                  <td><?= $row['berat_badan'] ?></td>
                  <td>
                    <a href="form_edit.php?id=<?= $row['id'] ?>" class="badge badge-info badge-pill">Ubah</a>
                    <a href="configure/hapus.php?id=<?= $row['id'] ?>" class="badge badge-danger badge-pill">Hapus</a>
                  </td>
                </tr>
              <?php endwhile; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>