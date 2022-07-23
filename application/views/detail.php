<section class="content">
    <h4 class="text-center">DETAIL DATA MAHASISWA</h4>
    <table class="table">
        <tr>
            <th>Nama Lengkap</th>
            <td><?= $detail->nama ?></td>
        </tr>
        <tr>
            <th>Nim</th>
            <td><?= $detail->nim ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?= $detail->tgl_lahir ?></td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <td><?= $detail->jurusan ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?= $detail->alamat ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $detail->email ?></td>
        </tr>
        <tr>
            <th>No Telp</th>
            <td><?= $detail->no_telp ?></td>
        </tr>
    </table>
    <a href="<?= base_url('mahasiswa') ?>" role="button" class="btn btn-danger"> Kembali</a>
</section>