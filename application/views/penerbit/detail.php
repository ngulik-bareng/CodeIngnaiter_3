<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1 class="text-center">Detail Penerbit</h1>
<div class="continer py-3 my-3">
  <div class="continer-fluid">
    <div class="row">
      <dl>
        <dt>Nama Peberbit</dt>
        <dd><?= $nama ?></dd>
      
        <dt>Alamat</dt>
        <dd><?= $alamat ?></dd>
      
        <dt>Telpon</dt>
        <dd><?= $telpon ?></dd>
      
        <dt>Email</dt>
        <dd><?= $email ?></dd>
      </dl>
    </div>
  </div>
  <a class="btn btn-primary" href='#' onclick="history.back()">Back</a>
</div>


<?php
include APPPATH . 'views/fragment/footer.php';
?>