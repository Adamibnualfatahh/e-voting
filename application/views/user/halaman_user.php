<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
    <title>E-PILKETOS</title>
    <link rel="shortcut icon" href="image/icon.png">
</head>

<body>

    <div class="header-3-2 container-xxl mx-auto p-0 position-relative">
        <nav class="navbar navbar-expand-lg navbar-light">

            <!-- <img style="margin-right: 0.75rem"
             src=""
             alt="" /> -->
            <a href="/view/index.html" style="text-decoration: none;">
                <h3 style="margin-right: 0.75rem; color: #FF7468;font-weight: bold;">E-PILKETOS</h3>
            </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active position-relative">
                        <a class="nav-link main=" style="color: #243142;" href="#">Halaman Utama</a>
                    </li>
                </ul>
                <div>
                    <a href="<?= base_url('login1/logout') ?>" class="btn btn-fill text-white">Logout</a>
                </div>
        </nav>


        <div>
            <div class="mx-auto d-flex flex-lg-row flex-column hero">
                <!-- Column kiri -->
                <div class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-center">
                    <h1 class="title-text-big">
                        E-PILKETOS<br class="d-lg-block d-none" />
                        <span style="color: #FF7468">WEB PEMILIHAN KETUA OSIS</span>

                    </h1>
                    <p class="text-caption">
                        Membuat Pemilihan Ketua Osis Semakin Mudah Aman Dan Terpercaya
                    </p>
                    <?php if ($user->status==0) : ?>
                    <div>
                        <a href="<?php echo base_url('pilih') ?>"><button class="btn btn-get text-white"> Mulai Pilih !</button></a>
                    </div>
                    <?php else : ?>
                    <div>
                        <a href=""><button class="btn btn-get text-white" disabled > ANDA SUDAH MEMILIH !!</button></a>
                    </div>
                    <?php endif ?>
                    
                </div>
            </div>
        </div>
        <footer class="footer">Kelompok I XII RPL A</footer>
        <!-- footer -->
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script type="text/script" src="<?php echo base_url('js/bootstrap.bundle.min.js'); ?>" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>