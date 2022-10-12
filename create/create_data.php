<?php
    include "../connection.php";

    $id = rand(1, 999);
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $insert = mysqli_query($koneksi, "INSERT INTO siswa SET id='$id', nama='$nama', kelas='$kelas', jurusan='$jurusan'");
    if($insert){
        header('location: ../index.php');
    } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
    }
