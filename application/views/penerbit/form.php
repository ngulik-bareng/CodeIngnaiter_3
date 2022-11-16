<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('penerbit/save') ?>">
    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
    <div>
        <label></label>
        <div>
            <h3 class="text-center">Tambah || Edit Penerbit</h3>
        </div>
    </div>
    <div>
        <label>Nama Penerbit</label>
        <div>
            <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>" required />
        </div>
    </div>

    <div>
        <label>Alamat</label>
        <div>
            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $alamat ?>" required />
        </div>
    </div>

    <div>
        <label>Telpon</label>
        <div>
            <input type="tel" name="telpon" class="form-control" id="telpon" value="<?= $telpon ?>" required />
        </div>
    </div>

    <div>
        <label>Email</label>
        <div>
            <input type="email" name="email" class="form-control" id="email" value="<?= $email ?>" required />
        </div>
    </div>

  <div class="mt-2 d-flex justify-content-end">
      <input class="btn btn-dark me-3" type="button" value="Cancel" onclick="history.back()" />
      <input class="btn btn-primary" type="submit" value="Simpan" />
  </div>

</form>