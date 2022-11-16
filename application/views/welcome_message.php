<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>

<div class="container d-flex justify-content-center py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Hallo, <?= $nama;?>  </h1>
                    <h1 class="text-center">
                        <i>
                            Selamat Datang di Aplikasi 
                        </i> 
                        <b>E-Katalog</b>
                    </h1>      
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include APPPATH . 'views/fragment/footer.php';
?>