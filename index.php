<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://kit.fontawesome.com/ee5054d3af.js" crossorigin="anonymous"></script>
    <title>Sesi 12 dan 13</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <b><a class="navbar-brand" href="#">Digital Talent</a></b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=daftar_baru">Daftar Baru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=pendaftar">Pendaftar</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($_GET['pesan'])) {
                    $pesan = $_GET['pesan'];
                    if ($pesan == "input") {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Pendaftaran siswa baru berhasil!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                    } else if ($pesan == "update") {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Data siswa berhasil diubah!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                    } else if ($pesan == "hapus") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data siswa berhasil dihapus!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                    }
                }

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];

                    switch ($page) {
                        case 'home':
                            include "home.php";
                            break;
                        case 'daftar_baru':
                            include "daftar_baru.php";
                            break;
                        case 'daftar_baru_proses':
                            include "daftar_baru_proses.php";
                            break;
                        case 'edit_siswa':
                            include "edit_siswa.php";
                            break;
                        case 'edit_siswa_proses':
                            include "edit_siswa_proses.php";
                            break;
                        case 'hapus_siswa_proses':
                            include "hapus_siswa_proses.php";
                            break;
                        case 'pendaftar':
                            include "pendaftar.php";
                            break;
                        default:
                            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                            break;
                    }
                } else {
                    include "home.php";
                }

                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>