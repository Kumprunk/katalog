

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?= base_url("assets/img/hero.jpg")?>">
        <form class="d-flex tm-search-form" action="<?= base_url('katalog/search')?>" method="POST">
            <input class="form-control tm-search-input" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>