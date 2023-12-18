<?php
require("../../class/database.php");
require("../../class/form.php");
require("../../template/header.php");

$database = new database();
$nim = $_GET["nim"];
// echo $Nim;

if (isset($_POST['submit'])) {
    $data = [
        'nim' => $_POST['txtnim'],
        'nama' => $_POST['txtnama'],
        'kelas' => $_POST['txtkelas'],
        'nomer_absen' => $_POST['txtnomer_absen']
    ];
    $database->update("tb_project", $data, "nim=" . $nim);
    header("location: Home");
}

$data = $database->get("tb_project", "where nim=" . $nim);
?>
<html>

<head>
    <title>Update Data Mahasiswa</title>
    <link rel="stylesheet" href="../../template/main.css">
</head>

<body>
    <div class="form-container">
        <h2 style="margin-left: 80px;">Silahkan isi form berikut ini</h2>
        <?php
        $form = new Form("", "submit");
        $form->addField("txtnim", "nim", $data["nim"]);
        $form->addField("txtnama", "kama", $data["nama"]);
        $form->addField("txtkelas", "kelas", $data["kelas"]);
        $form->addField("txtnomer_absen", "nomer_absen", $data["nomer_absen"]);
        $form->displayForm();
        ?>
    </div>
    <?php require("../../template/footer.php"); ?>
</body>

</html>