<?php

include('koneksi.php');

//get id
$id_siswa = $_GET['id_siswa'];

$query = "DELETE FROM siswa WHERE id_siswa = '$id_siswa'";

if($koneksi->query($query)) {
    header("location:  index.php?page=home&pesan=hapus");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>