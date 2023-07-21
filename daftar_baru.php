<div class="card">
    <div class="card-header">
        <b><i class="fa-solid fa-user"></i> FORMULIR PENDAFTARAN SISWA BARU</b>
    </div>
    <div class="card-body">
        <form action="daftar_baru_proses.php" method="POST">

            <div class="form-group">
                <label>Nama : </label>
                <input type="text" name="nama" placeholder="Masukkan Nama Siswa" class="form-control">
            </div>

            <div class="form-group">
                <label>Alamat : </label>
                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa " rows="4"></textarea>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin : </label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jenis_kelamin" value="L" class="form-check-input">
                    <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="jenis_kelamin" value="P" class="form-check-input">
                    <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label>Agama : </label>
                <select class="form-control" name="agama" id="">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                </select>
            </div>

            <div class="form-group">
                <label>Asal Sekolah : </label>
                <input type="text" name="sekolah" placeholder="Masukkan Asal Sekolah" class="form-control">
            </div>

            <button type="submit" class="btn btn-info"><i class="fa-solid fa-floppy-disk"></i> DAFTAR</button>
            <button type="reset" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> RESET</button>

        </form>
    </div>
</div>