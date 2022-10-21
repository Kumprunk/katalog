<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Barang</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?= base_url("assets/fontawesome/css/all.min.css")?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/templatemo-style.css")?>">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
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
                <!-- <li class="nav-item">
                    <?php if($this->session->userdata('username') == true) { ?>
                        <a class="nav-link nav-link-4" href="<?= base_url('login/logout')?>"><?= $this->session->userdata('username') ?></a>
                    <?php } else { ?>
                        <a class="nav-link nav-link-4" href="<?= base_url('login')?>">Login</a>
                    <?php }?>
                </li> -->
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="<?= base_url('assets/'); ?>images/icons/favicon.ico" class="rounded-circle mr-1" style="width: 30px; height:30px;">
                    <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('username') ?></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                    <a href="<?= base_url('user/profile'); ?>" class="dropdown-item has-icon">
                        <i class="fas fa-user-cog"></i> Akun Profil
                    </a>
                    <a href="<?= base_url('keranjang'); ?>" class="dropdown-item has-icon">
                        <i class="fas fa-shopping-cart"></i> Keranjang
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url('login/logout'); ?>" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </li>
            </ul>
            
            </div>
        </div>
    </nav>