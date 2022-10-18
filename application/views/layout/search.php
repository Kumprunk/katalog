<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url()?>">
                <i class="fas fa-film mr-2"></i>
                Katalog 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <?php if($this->session->userdata('username') == true) { ?>
                        <a class="nav-link nav-link-4" href="<?= base_url('login/logout')?>"><?= $this->session->userdata('username') ?></a>
                    <?php } else { ?>
                        <a class="nav-link nav-link-4" href="<?= base_url('login')?>">Login</a>
                    <?php }?>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?= base_url("assets/img/hero.jpg")?>">
        <form class="d-flex tm-search-form" action="<?= base_url('katalog/search')?>" method="POST">
            <input class="form-control tm-search-input" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>