<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE siswa SET nama_siswa = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', agama = '$agama', sekolah_asal = '$sekolah_asal' WHERE id_siswa = '$id_siswa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    //redirect ke halaman index.php
    header("location: index.php?page=home&pesan=update");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>