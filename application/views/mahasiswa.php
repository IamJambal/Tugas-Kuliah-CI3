  <div class="content">
    <?= $this->session->flashdata('message'); ?>
    <buttton class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-plus"></i> 
      Tambah Data Mahasiswa
    </buttton>
    <table class="table table-hover text-center">
      <tr>
        <th>NO</th>
        <th>NAMA MAHASISWA</th>
        <th>NIM</th>
        <th>TANGGAL LAHIR</th>
        <th>JURUSAN</th>
        <th colspan="3"> AKSI</th>
        <!-- <th>ALAMAT</th>
        <th>EMAIL</th>
        <th>NO. TELEPON</th> -->
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <th scope="row"><?= $i; ?></th>
        <td><?php echo $mhs['nama']; ?></td>
        <td><?php echo $mhs['nim']; ?></td>
        <td><?php echo $mhs['tgl_lahir']; ?></td>
        <td><?php echo $mhs['jurusan']; ?></td>
        <!-- <td><?php echo $mhs['alamat']; ?></td>
        <td><?php echo $mhs['email']; ?></td>
        <td><?php echo $mhs['no_telp']; ?></td> -->

        <!-- Lihat  -->
        <td><a href="<?= base_url('mahasiswa/detail/') . $mhs['id']; ?>">
          <div class="btn btn-success btn-sm">
            <i class="fa fa-eye"></i>
          </div>
          </a>
        </td>
        <!-- Hapus  -->
        <td>
          <a href="<?= base_url('mahasiswa/edit/') . $mhs['id']; ?>">
          <div class="btn btn-primary btn-sm">
            <i class="fa fa-pencil-alt"></i>
          </div>
          </a>
        </td>
        <!-- Edit  -->
        <td onclick="javascript: return confirm ('Apakah Anda yakin ingin menghapus Data ini ?')">
          <a href="<?= base_url('mahasiswa/hapus/') . $mhs['id']; ?>">
          <div class="btn btn-danger btn-sm">
            <i class="fa fa-trash-alt"></i>
          </div>
          </a>
        </td>
      </tr>
      <?php $i++; ?>
      <?php endforeach ?>
    </table>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"action="<?= base_url('mahasiswa/tambah_aksi') ?>">
        <div class="form-group">
          <label> Nama Mahasiswa </label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label> NIM </label>
          <input type="text" name="nim" class="form-control">
        </div>
        <div class="form-group">
          <label> Tgl Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control">
        </div>
        <div class="form-group">
          <label> Jurusan</label>
          <select name="jurusan" id="" class="form-control">
            <option value="0">Pilih Jurusan</option>
            <option value="Bisnis"> Bisnis</option>
            <option value="Desain Grafis"> Desain Grafis</option>
            <option value="Komputer Akuntansi"> Komputer Akuntansi</option>
            <option value="Sistem Informasi"> Sistem Informasi</option>
            <option value="Sistem Komputer"> Sistem Komputer</option>
            <option value="Teknik Informatika"> Teknik Informatika</option>
          </select>
        </div>
          <div class="form-group">
            <label> Alamat</label>
            <input type="text" name="alamat" class="form-control">
          </div>
          <div class="form-group">
            <label> Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label> Nomer Telephone</label>
            <input type="text" name="no_telp" class="form-control">
          </div>
        </div>
        <div class="modal-footer text-center">
          <button type="reset" class="btn btn-dark" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>