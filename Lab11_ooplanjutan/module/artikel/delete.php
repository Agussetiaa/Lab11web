<?php
require("../../class/database.php");
$database = new database();
$nim = $_GET["nim"];
echo $nim;

if (isset($_GET["nim"])) {
    $database->delete("tb_project", "where nim=" . $nim);
    header("location: Home");
}
