<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Konsep Modularisasi</title>
  <link rel="stylesheet" href="../template/styles.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background: linear-gradient(to right, #3498db, #2ecc71); /* Ubah warna background header menjadi biru */
      color: white;
      text-align: center;
      padding: 1em;
    }

    .main-navigation {
      background-color: #3498db; /* Ubah warna background navigasi menjadi biru */
      overflow: hidden;
    }

    .main-navigation a {
      float: left;
      display: block;
      color: #fff; /* Ubah warna teks menjadi putih */
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .main-navigation a:hover {
      background-color: #2980b9; /* Ubah warna background saat hover menjadi biru tua */
      color: #fff; /* Ubah warna teks saat hover menjadi putih */
    }
  </style>
</head>

<body>
  <header>
    <h1>Implementasi dengan Modularisasi</h1>
  </header>
  <div class="main-navigation">
    <a href="module/mobil.php">Home</a>
    <a href="module/about.php">About</a>
    <a href="module/artikel/form_input.php">Form</a>
    <a href="module/contact.php">Contact</a>
    <a href="module/data.php">Data Form</a>
  </div>
</body>

</html>
