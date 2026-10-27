<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'"));
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h2>Edit Data</h2>

        <form method="post" action="update.php">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <input type="text" name="nim" value="<?= $data['nim'] ?>" required>
            <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
            <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>" required>
            <input type="number" name="angkatan" value="<?= $data['angkatan'] ?>" required>
            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>