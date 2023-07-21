<div class="card">
    <div class="card-header">
    <i class="fa-solid fa-users"></i> <b>DATA SISWA YANG SUDAH MENDAFTAR</b>
    </div>
    <div class="card-body">
        <a href="index.php?page=daftar_baru" class="btn btn-md btn-info" style="margin-bottom: 10px"><i class="fa-solid fa-user-plus"></i> TAMBAH
            SISWA BARU</a>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">AGAMA</th>
                    <th scope="col">SEKOLAH ASAL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('koneksi.php');
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM siswa");
                while ($row = mysqli_fetch_array($query)) {
                    $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
                    ?>

                    <tr>
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $row['nama_siswa'] ?>
                        </td>
                        <td>
                            <?php echo $row['alamat'] ?>
                        </td>
                        <td>
                            <?php echo $jenis_kelamin ?>
                        </td>
                        <td>
                            <?php echo $row['agama'] ?>
                        </td>
                        <td>
                            <?php echo $row['sekolah_asal'] ?>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</div>