<?php
require("../class/database.php");
require '../template/header.php';

$database = new database();

// Mengambil data dari tabel 'tb_project' di database
$query = "SELECT * FROM tb_project"; // Customize this query based on your needs
$data = $database->query($query);

?>
<html>

<head>
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="../template/styles.css">
</head>

<body>
  <div class="table-container">
    <h2>Daftar Mahasiswa</h2>
    <table class="my-table">
      <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Nomer absen</th>
        <th>Aksi</th>
      </tr>
      <?php
      // Menampilkan data dalam tabel
      foreach ($data as $row) {
      ?>
        <tr>
          <td> <?= $row['nim']; ?></td>
          <td> <?= $row['nama']; ?></td>
          <td> <?= $row['kelas']; ?></td>
          <td> <?= $row['nomer_absen']; ?></td>
          <td>
          <a href="../update.php?nim=<?= $row['nim']; ?>"><input type='button' class='btn-update'></a>
          <a href="module/artikel/delete.php?nim=<?= $row['nim']; ?>"><input type='button' class='btn-delete'></a>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
  <?php require("../template/footer.php"); ?>
</body>

</html>
