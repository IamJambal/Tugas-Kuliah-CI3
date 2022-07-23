<div class="content">
    <buttton class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-plus"></i> 
      Tambah Data Dosen
    </buttton>
    <table class="table table-hover text-center">
      <tr>
        <th>NO</th>
        <th>NAMA DOSEN</th>
        <th>NIM DOSEN</th>
        <th>JURUSAN</th>
        <th>JENIS KELAMIN</th>
        <th colspan="3"> AKSI</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($dosen as $dsn) : ?>
      <tr>
        <th scope="row"><?= $i; ?></th>
        <td><?php echo $dsn['nama_d']; ?></td>
        <td><?php echo $dsn['nim_d']; ?></td>
        <td><?php echo $dsn['jurusan_d']; ?></td>
        <td><?php echo $dsn['jenis_kel']; ?></td>

      <td>
        <!-- <a href="<?= base_url('dosen/detail/') . $mhs['id']; ?>"> -->
          <div class="btn btn-success btn-sm">
            <i class="fa fa-eye"></i>
          </div>
          <!-- </a> -->
        </td>
        <!-- Hapus  -->
        <td>
          <!-- <a href="<?= base_url('dosen/edit/') . $mhs['id']; ?>"> -->
          <div class="btn btn-primary btn-sm">
            <i class="fa fa-pencil-alt"></i>
          </div>
          <!-- </a> -->
        </td>
        <!-- Edit  -->
        <td onclick="javascript: return confirm ('Apakah Anda yakin ingin menghapus Data ini ?')">
          <!-- <a href="<?= base_url('dosen/hapus/') . $mhs['id']; ?>"> -->
          <div class="btn btn-danger btn-sm">
            <i class="fa fa-trash-alt"></i>
          </div>
          <!-- </a> -->
          </tr>
        </td>
        <?php $i++; ?>
      <?php endforeach ?>
        </table>
</div>