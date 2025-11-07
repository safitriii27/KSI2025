<?php
include 'koneksi.php';
mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, npm) VALUES ('safitri', '23753117')");
echo 'Data berhasil ditambah';
?>
