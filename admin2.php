<?php

require "koneksi.php";

$sql = "SELECT username FROM admin";
$rows = $koneksi-> execute_query($sql) -> fetch_all(MYSQLI_ASSOC);

$no =0 ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <h1>daftar kader</h1>
</head>
<body>

        <thead>
            <table>
            <tr>
                <th>No</th>
                <th>username</th>
            </tr>
        
        </thead>
        <tbody id="table-body">
            <?php foreach($rows as $row) { ?>

            <tr>
                <td><?= ++$no ?></td>
                <td><?= $row['username'] ?></td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
    <a href="admin1.php">tambah</a>
    <a href="index.php">kembali</a>
</body>
</html>