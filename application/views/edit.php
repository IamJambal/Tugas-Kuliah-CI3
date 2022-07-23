
    <section class="content">
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" value="<?= $mahasiswa['id']; ?>">
            </div>
            <div class="form-group">
                <label for=""> Nama Mahasiswa</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $mahasiswa['nama']; ?>">
            </div>
            <div class="form-group">
                <label for=""> Nim</label>
                <input type="text" name="nim" id="nim" class="form-control" value="<?= $mahasiswa['nim']; ?>">
            </div>
            <div class="form-group">
                <label for=""> Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $mahasiswa['tgl_lahir']; ?>">
            </div>
            <div class="form-group">
                <label for=""> Jurusan</label>
                <select type="text" name="jurusan" id="jurusan" class="form-control">
                <?php foreach ($jurusan as $j) : ?>
                    <?php if($j == $mahasiswa['jurusan']) : ?>
                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                    <?php else : ?>
                        <option value="<?= $j; ?>"><?= $j; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $mahasiswa['alamat']; ?>">
            </div>
            <div class="form-group">
                <label for=""> Email</label>
                <input type="text" name="email" id="email" class="form-control" value="<?= $mahasiswa['email']; ?>">
            </div>
            <div class="form-group">
                <label for=""> No Telp</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $mahasiswa['no_telp']; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="ubah">Simpan</button>
            <a href="<?= base_url('mahasiswa') ?>" role="reset" class="btn btn-danger"> Cancel</a>
        </form>
    </section>
