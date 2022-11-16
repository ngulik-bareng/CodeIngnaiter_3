<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1 class="text-center">Detail Buku</h1>
<dl>
  <div class="container py-3 my-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <dt>ISBN</dt>
          <dd><?= $isbn ?></dd>
        
          <dt>Judul</dt>
          <dd><?= $judul ?></dd>
        
          <dt>Pengarang</dt>
          <dd><?= $pengarang ?></dd>
        
          <dt>Tanggal Rilis</dt>
          <dd><?= date_format(date_create($tanggal_rilis), "d/m/Y") ?></dd>
        
          <dt>Jumlah Halaman</dt>
          <dd><?= $jumlah_halaman ?></dd>
        </div>

        <div class="col">
          <dt>Sinopsis</dt>
          <dd><?= $sinopsis ?></dd>
        
          <dt>Penerbit</dt>
          <dd><?= $nama_penerbit ?></dd>
        
          <dt>Gambar</dt>
          <dd><img id="preview" src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg'  : BASE_ASSETS . 'uploads/' . $gambar ?>" height="120" width="120" /></dd>
        </div>
        <a class="btn btn-primary" href="<?= base_url() ?>buku" onclick="history.back()">Back</a>
      </div>
    </div>
  </div>

</dl>

<?php
include APPPATH . 'views/fragment/footer.php';
?>