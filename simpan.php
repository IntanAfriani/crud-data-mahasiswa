<?php
include 'koneksi.php';

mysqli_query($koneksi, "INSERT INTO mahasiswa (nim,nama,jurusan,angkatan)
VALUES (
'$_POST[nim]',
'$_POST[nama]',
'$_POST[jurusan]',
'$_POST[angkatan]'
)"); 

header("location:index.php");