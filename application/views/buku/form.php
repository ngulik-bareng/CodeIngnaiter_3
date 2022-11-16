<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1 class="text-center">Tambah/Ubah Buku</h1>

<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" class="my-3" enctype="multipart/form-data" action="<?= base_url('buku/save') ?>">
    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
    <input type="hidden" name="gambar_lama" value="<?= isset($gambar) ? $gambar : '' ?>" />

    <div class="row ">
        <div class="col-md-6">
            <div>
                <label>ISBN</label>
                <input type="text" name="isbn" class="form-control" id="isbn" value="<?= $isbn ?>" required />
            </div>
        
            <div>
                <label>Judul Buku</label>
                <input type="text" name="judul" class="form-control" id="judul" value="<?= $judul ?>" required />
            </div>
        
            <div>
                <label>Pengarang</label>
                <input type="text" name="pengarang" class="form-control" id="pengarang" value="<?= $pengarang ?>" required />
            </div>
        
            <div>
                <label>Sinopsis</label>
                <textarea name="sinopsis" class="form-control" id="sinopsis"><?= $sinopsis ?></textarea>
            </div>
        
            <div>
                <label>Tanggal Rilis</label>
                <input placeholder="dd-mm-yyyy" type="date" name="tanggal_rilis" class="form-control" id="tanggal_rilis" value="<?= $tanggal_rilis ?>" required />
            </div>
        </div>
        <div class="col-md-6">
    
            <div>
                <label>Jumlah Halaman</label>
                <input type="number" name="jumlah_halaman" class="form-control" id="jumlah_halaman" value="<?= $jumlah_halaman ?>" required />
            </div>
        
            <div>
                <label>Tersedia</label>
                <input type="radio" name="tersedia"  id="tersedia" value="1" <?= $tersedia == '1' ? 'checked' : '' ?> />Tersedia
                <input type="radio" name="tersedia"  id="tersedia" value="0" <?= $tersedia == '0' ? 'checked' : '' ?> />Tidak tersedia
            </div>
        
            <div>
                <label>Penerbit</label>
                <select class="form-controll" name="id_penerbit" id="id_penerbit">
                    <?php
                    // $idx = row ke-x, $row => datanya
                    foreach ($penerbits as $idx => $row) {
                    ?>
                        <option value="<?= $row['id'] ?>" <?= $id_penerbit == $row['id'] ? 'selected' : '' ?>>
                            <?= $row['nama'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        
            <div>
                <label>gambar</label>
                <input type="file" name="gambar" id="gambar" accept="image/*" onchange="loadFile(event)" />
                <img id="preview" src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg'  : BASE_ASSETS . 'uploads/' . $gambar ?>" height="120" width="120" />
            </div>
        
            <div>
                <input class="btn btn-dark "type="button" value="Cancel" onclick="history.back()" />
                <input class="btn btn-primary "type="submit" name="submit" id="submit" value="Simpan" />
            </div>
        </div>
    </div>



</form>

<script>
    var loadFile = function(event) {
        var image = document.getElementById('preview');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

<?php
include APPPATH . 'views/fragment/footer.php';
?>