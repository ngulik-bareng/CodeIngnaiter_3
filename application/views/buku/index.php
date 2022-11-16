<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1 class="text-center">Daftar Buku</h1>
<div class="d-flex justify-content-lg-end text-lg-end text-right">
    <a href="<?= base_url("buku/form") ?>" class="btn  d-block btn-primary mb-3">Tambah Buku +++</a>
</div>
<table class="table table-bordered table-responsive">
    <tr class="bg-secondary text-light">
        <th>ISBN</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Tanggal Rilis</th>
        <th>Jumlah Halaman</th>
        <th>Penerbit</th>
        <th>Tersedia</th>
        <th class="text-center" style="width: 20%;">Aksi</th>
    </tr>
    <?php
    foreach ($records as $idx => $data) {
    ?>
        <tr>
            <td><?= $data['isbn'] ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['pengarang'] ?></td>
            <td><?= date_format(date_create($data['tanggal_rilis']), "d/m/Y") ?></td>
            <td><?= $data['jumlah_halaman'] ?></td>
            <td><?= $data['nama_penerbit'] ?></td>
            <td><?= $data['tersedia'] == '1' ? 'tersedia' : 'tidak tersedia' ?></td>
            <td>
    
                    <a class="btn btn-info" href="<?= base_url("buku/detail/{$data['id']}") ?>">Detail</a>
                    <a class="btn btn-success" href="<?= base_url("buku/form/{$data['id']}") ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('menghapus data?')" href="<?= base_url("buku/hapus/{$data['id']}") ?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php';
?>