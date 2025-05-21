<?php

require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    var_dump($_POST);
    $nama = $_POST["nama"];
    $berat = $_POST["berat"];
    $tinggi = $_POST["tinggi"];
    $tanggal = $_POST["tanggal"];

    $sql = "INSERT INTO kader(nama,berat,tinggi,tanggal)values (?,?,?,?)";
    $row = $koneksi ->execute_query($sql,[$nama,$berat,$tinggi,$tanggal]);

    if ($row) {
        header("Location:data.php");
    }
   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="pinjam-container">
        <h2>masukkan data bayi</h2>
        <form action="" method="POST" class="pinjam-form">
            <input type="text" name="nama" id="nama" placeholder="masukkan nama bayi">
            <input type="number" name="berat" id="berat" placeholder="masukkan berat bayi">
            <input type="number" name="tinggi" id="tinggi" placeholder="masukkan berat bayi">
            <input type="date" name="tanggal" id="tanggal">
            <button type="submit" class="btn-submit">submit</button>
            <a href="index.php" class="btn-submit">keluar</a>
        </form>
    </div>
</body>
</html>