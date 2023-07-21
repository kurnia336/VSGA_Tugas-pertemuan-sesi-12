<?php
//include koneksi database
include('koneksi.php');

//get data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah'];

//query insert data ke dalam database
$query = "INSERT INTO siswa (nama_siswa, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($koneksi->query($query)) {

    //redirect ke halaman index.php
    header("location: index.php?page=home&pesan=input");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>