<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1 class="text-center mt-3">Data Penerbit</h1>
<div class="d-flex justify-content-lg-end text-lg-end text-right">
    <a  href="<?= base_url("penerbit/form")?>" class="btn  d-block btn-primary mb-3">Tambah Penerbit +++</a>
</div>
<table class="table table-bordered table-responsive">
    <tr class="bg-secondary text-light">
        <th>Nama Peberbit</th>
        <th>Alamat</th>
        <th>Telpon</th>
        <th>Email</th>
        <th style="width: 20%;">Aksi</th>
    </tr>
    <?php
    foreach ($records as $idx => $data) {
    ?>
        <tr>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['telpon'] ?></td>
            <td><?= $data['email'] ?></td>
            <td>
                    <a class="btn btn-info" href="<?= base_url("penerbit/detail/{$data['id']}") ?>">Detail</a>
                    <a class="btn btn-success" href="<?= base_url("penerbit/form/{$data['id']}") ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('menghapus data?')" href="<?= base_url("penerbit/hapus/{$data['id']}") ?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php';
?>