<?php

require "koneksi.php";

$sql = "SELECT * FROM kader";
$rows = $koneksi-> execute_query($sql,[]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <a href="tambah_data.php">Tambah</a>
        <thead>
            <table>
            <tr>
                <th>No</th>
                <th>Nama </th>
                <th>berat</th>
                <th>tinggi</th>
                <th>tanggal</th>

            </tr>
        
        </thead>
        <tbody id="table-body">
            <?php
            $no = 1;
            foreach ($rows as $item) :
            
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item["nama"]; ?></td>
                <td><?php echo $item["berat"]; ?></td>
                <td><?php echo $item["tinggi"]; ?></td>
                <td><?php echo $item["tanggal"]; ?></td>
            </tr>
            <?php
                $no +=1;
            endforeach;
            ?>
            <?php foreach ($rows as $row) : ?>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
