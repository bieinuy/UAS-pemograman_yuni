<?php
include 'koneksi.php';

$sql = "SELECT * FROM mahasiswa";
$reqult = $sconn->query($sql);
?>

<!DOCTYPE html>
<html lang= "en">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <a href="tambah_mahasiswa.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Email</th>
            <th>Nomor</th>
            <th>Jurusan</th>
        </tr>

<?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['nomor']; ?></td>
        <td><?php echo $row['jurusan']; ?></td>
        <td>
            <a href="edit_mahasiswa.php?id=<?php echo $row['id']; ?>">Edit</a>|
            <a href="hapus_mahasiswa.php?id=<?php echo $row['id']; ?>">hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>
</body>

</html>

<?php $sconn->close(); ?>

