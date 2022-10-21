<div class="container-fluid tm-container-content tm-mt-60">
    <?php foreach($produk as $row) : ?>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary"><?= $row->nama_produk?></h2>
        </div>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="<?= base_url("assets/img/ipon.jpg")?>" alt="Image" class="img-fluid">
            </div>
            
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <form action="<?= base_url('keranjang/tambah')?>" method="POST">
                    <div class="tm-bg-gray tm-video-details">
                        <p class="mb-4">
                            <?= $row->deskripsi?>
                        </p>                    
                        <div class="mb-4 d-flex flex-wrap">
                            <div class="mr-4 mb-2">
                                <span class="tm-text-gray-dark">Kategori: </span><span class="tm-text-primary"><?= $row->kategori ?></span>
                            </div>
                            <div class="mr-4 mb-2">
                                <span class="tm-text-gray-dark">Departement: </span><span class="tm-text-primary"><?= $row->departement?></span>
                            </div>
                        </div>
                        <div class="mb-4">
                            
                            <span class="tm-text-gray-dark">Harga: </span><span class="tm-text-primary">Rp. <?= $row->harga_jual_umum?></span>
                        </div>
                        <div class="text-center mb-5">
                            <input type="hidden" value="<?= $row->nama_produk?>" name="nama_produk">
                            <input type="hidden" value="<?= $row->deskripsi?>" name="deskripsi">
                            <input type="hidden" value="<?= $row->kategori?>" name="kategori">
                            <input type="hidden" value="<?= $row->departement?>" name="departement">
                            <input type="hidden" value="<?= $row->kd_produk?>" name="kd_produk">
                            <input type="hidden" value="<?= $row->harga_jual_umum?>" name="harga">
                            <button type="submit" class="btn btn-primary tm-btn-big">Tambah Ke Keranjang</button>
                        </div>
                    </div>
                    </form>
                </div>
            
        </div>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Related Photos
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="<?= base_url('assets/')?>img/img-01.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Hangers</h2>
                        <a href="#">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">16 Oct 2020</span>
                    <span>12,460 views</span>
                </div>
            </div>
           
        </div> <!-- row -->
        <?php endforeach;?>
    </div>