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
  <div class="container">
    <div class="row">
      <div class="col-lg-12 pt-4">
        <h1 class="display-3 text-center">Pasien Baru</h1>
      </div>
      <div class="col-lg-12 pb-4">
        <a href="index.php" class="text-info">
          Kembali ke halaman utama
        </a>
      </div>
      <div class="col-lg-12">
        <form action="configure/simpan.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="nama">Nama Pasien</label>
                <input type="text" name="nama" id="nama" class="form-control">
              </div>
              <div class="form-group">
                <label for="nomor">Nomor Telp</label>
                <input type="text" name="nomor" id="nomor" class="form-control">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="5"></textarea>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="golongan_darah">Golongan Darah</label>
                    <select name="golongan_darah" id="golongan_darah" class="form-control">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                      <option value="O">O</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="tinggi_badan">Tinggi Badan</label>
                    <input type="number" id="tinggi_badan" name="tinggi_badan" class="form-control">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="berat_badan">Berat Badan</label>
                    <input type="number" id="berat_badan" name="berat_badan" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </form>
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