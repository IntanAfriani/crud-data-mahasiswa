<?php
include 'koneksi.php';

mysqli_query($koneksi, "UPDATE mahasiswa SET
nim='$_POST[nim]',
nama='$_POST[nama]',
jurusan='$_POST[jurusan]',
angkatan='$_POST[angkatan]'
WHERE id='$_POST[id]'");

header("location:index.php");