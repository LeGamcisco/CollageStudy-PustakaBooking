<?= $this->session->flashdata('pesan'); ?>


    <div class="container-fluid">
        <!-- Tampilkan semua produk -->
        <div class="row mt-4 mb-3">
            <h3>DATA KELOMPOK 5</h3>
        </div>
        <hr class="mb-5">
        <div class="row text-center justify-content-center ">
            
        <?php foreach ( $result as $k) : ?>
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <img src="<?php echo base_url('assets/img/profile/') . $k->image; ?>" class="card-img-top hover-img" height="240px" alt="Foto Kelompok" />
                    <div class="card-body ">
                        <h5 class="card-title"><?= $k->nama ?></h5>
                    </div>
                    <p class="card-title"><?= $k->id ?></p>
                </div>
            </div>
                
            <?php endforeach; ?>
            <!-- end looping -->
        </div>
    </div>

