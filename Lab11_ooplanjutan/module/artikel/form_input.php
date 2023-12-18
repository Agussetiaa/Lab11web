<!-- Program memanfaatkan Program 5.2 untuk membuat form inputan sederhana. -->
<?php
require("../../class/database.php");
require("../../class/form.php");
require("../../template/header.php");

$database = new database();

if (isset($_POST['submit'])) {
  $data = [
    'nim' => $_POST['txtnim'],
    'nama' => $_POST['txtnama'],
    'kelas' => $_POST['txtkelas'],
    'nomer_absen' => $_POST['txtnomer_absen']
  ];
  $database->insert('tb_project', $data);
  // Menampilkan notifikasi jika data berhasil disimpan
  echo "<script>alert('Data berhasil disimpan')</script>";
}
?>
<html>

<head>
  <title>Identitas Mahasiswa</title>
  <link rel="stylesheet" href="../../template/styles.css">
</head>

<body>
  <div class="form-container">
    <h2 style="margin-left: 80px;">Silahkan isi form berikut ini</h2>
    <?php
    $form = new Form("form_input.php", "submit");
    $form->addField("txtnim", "nim");
    $form->addField("txtnama", "nama");
    $form->addField("txtkelas", "kelas");
    $form->addField("txtnomer_absen", "nomer Absen");
    $form->displayForm();
    ?>
  </div>
  <?php require("../../template/footer.php"); ?>
</body>

</html>
