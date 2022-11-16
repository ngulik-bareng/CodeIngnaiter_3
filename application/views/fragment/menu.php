<?php
$folder = $this->uri->segment(1);
?>
<div class="container py-2 d-flex justify-content-between align-content-center">
    <a class="navbar-brand text-secondary fs-4" href="<?= base_url() ?>"><b>E-Katalog</b></a>
    <a class="navbar-brand text-secondary fs-5" href="<?= base_url() ?>"><b>Phone:+6281318486932</b></a>
    
    
</div>
<nav class="navbar navbar-dark bg-primary navbar-expand-lg py-3">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" ariacontrols="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $folder == 'welcome' ? 'active' : '' ?>" aria-current="page" href="<?= base_url()
                                                                                                                ?>welcome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $folder == 'penerbit' ? 'active' : '' ?>" href="<?= base_url() ?>penerbit">Penerbit</a>
                </li>
                <a class="nav-link <?= $folder == 'buku' ? 'active' : '' ?>" href="<?= base_url() ?>buku">Buku</a></li>
                </li>
            </ul>
        </div>
    </div>

</nav>
<div class="container">
    <p></p>