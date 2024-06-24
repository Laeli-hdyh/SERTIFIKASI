<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FORM PENDAFTARAN SERTIFIKASI</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      FORMULIR PENDAFTARAN SERTIFIKASI
    </div>
    <?php 
      if (isset($_SESSION['pesan'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>
              <?php echo $_SESSION['pesan']; ?>
          </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php 
        session_destroy();
            }
    ?>
      <div class="card-body">
        <form action="aksi_tambah.php" method="post">
        <div class="mb-3">

           <label for="kd_skema" class="form-label">Kode Skema</label>
          <input type="text" name="kd_skema" class="form-control" id="kd_skema" required>
        </div>
         <div class="mb-3">
          <label for="nm_peserta" class="form-label">Nama Lengkap</label>
          <input type="text" name="nm_peserta" class="form-control" id="nm_peserta" required>
        </div>
        <div class="mb-3">
           <label for="jekel" class="form-label">Jenis Kelamin</label>
          <select type="text" name="jekel" class="form-control" id="jekel" required>
        <option value="Laki-laki"></option>     
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
        </div>
          <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat">
        </div> 
        <div class="mb-3">
          <label for="no_hp" class="form-label">NO. Handphone</label>
          <input type="text" name="no_hp" class="form-control" id="no_hp">
        </div> 
        <input type="submit" value="DAFTAR" class="btn btn-primary">
        </form>
      </div>
    </div>
</div>