<?php
$nama     = $_POST['nama'];
$tempat   = $_POST['tempat_lahir'];
$tgl_lahir= $_POST['tgl_lahir'];
$alamat   = $_POST['alamat'];
$jk       = $_POST['jk'];
$sekolah  = $_POST['sekolah'];
$nilai    = $_POST['nilai'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Pendaftaran</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
      <h3>Terimakasih <?php echo $nama; ?> sudah mengisi form pendaftaran</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Nama Lengkap</th>
          <td><?php echo $nama; ?></td>
        </tr>
        <tr>
          <th>Tempat Lahir</th>
          <td><?php echo $tempat; ?></td>
        </tr>
        <tr>
          <th>Tanggal Lahir</th>
          <td><?php echo $tgl_lahir; ?></td>
        </tr>
        <tr>
          <th>Alamat Rumah</th>
          <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td><?php echo $jk; ?></td>
        </tr>
        <tr>
          <th>Asal Sekolah</th>
          <td><?php echo $sekolah; ?></td>
        </tr>
        <tr>
          <th>Nilai UAN</th>
          <td><?php echo $nilai; ?></td>
        </tr>
      </table>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>