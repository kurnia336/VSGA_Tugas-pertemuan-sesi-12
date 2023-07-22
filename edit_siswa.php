<?php

include('koneksi.php');

$id = $_GET['id_siswa'];

$query = "SELECT * FROM siswa WHERE id_siswa = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);

?>

<div class="card">
    <div class="card-header">
        <i class="fa-solid fa-user-pen"></i> <b>FORMULIR EDIT SISWA</b>
    </div>
    <div class="card-body">
        <form action="edit_siswa_proses.php" method="POST">
            <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">

            <div class="form-group">
                <label>Nama : </label>
                <input type="text" name="nama" value="<?php echo $row['nama_siswa'] ?>" placeholder="Masukkan Nama Siswa"
                    class="form-control">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa"
                    rows="4"><?php echo $row['alamat'] ?></textarea>
            </div>

            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo $row['jenis_kelamin'] == 'L' ? "checked" : ""; ?> class="form-check-input">
                    <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo $row['jenis_kelamin'] == 'P' ? "checked" : ""; ?> class="form-check-input">
                    <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label>Agama : </label>
                <select name="agama" id="">
                    <option value="Islam" <?php if ($row['agama'] == 'Islam') { ?>
                        selected="selected" <?php } ?>>Islam</option>
                    <option value="Kristen" <?php if ($row['agama'] == 'Kristen') { ?> selected="selected"
                        <?php } ?>>Kristen</option>
                    <option value="Hindu" <?php if ($row['agama'] == 'Hindu') { ?> selected="selected"
                        <?php } ?>>Hindu</option>
                    <option value="Buddha" <?php if ($row['agama'] == 'Buddha') { ?> selected="selected"
                        <?php } ?>>Buddha</option>
                </select>
            </div>

            <div class="form-group">
                <label>Asal Sekolah : </label>
                <input type="text" name="sekolah" value="<?php echo $row['sekolah_asal'] ?>" placeholder="Masukkan Asal Sekolah" class="form-control">
            </div>

            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen"></i> UPDATE</button>
            <button type="reset" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> RESET</button>

        </form>
    </div>
</div>