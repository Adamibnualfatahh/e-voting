<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Registration</title>
    <link rel="icon" href="<?=base_url()?>/assets/img/icon.png" type="image/gif">
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="registration-form">
        <form method="post" action="<?php echo base_url('login1/register') ?>">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            
            <div class="form-group">

                <select  required name="nis" class="form-select form-select-lg mb-4 " aria-label=".form-select-lg example" style="border-radius: 25px;">
                        <?php
                        $query = $this->db->query('SELECT nis FROM nis');
                        foreach ($query->result() as $row) {
                        ?>
                            <option class="text-Secondary"  value="<?= $row->nis; ?>"><?= $row->nis; ?></option>
                        <?php } ?>
                    </select>

            </div>
            <div class="form-group">
                <input type="text" name="username" class="form-control item" id="username" placeholder="Nama Lengkap">
                <?= form_error('nama'); ?>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control item" id="password" placeholder="Password">
                <?= form_error('password'); ?>
            </div>
            <div>
                <button type="submit" class="btn btn-block create-account">Buat Akun</button>
            </div>
        </form>
        <div class="social-media">
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="<?= base_url('js/script.js'); ?>"></script>
    <script src="<?= base_url('/assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('/assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('/assets/js/sb-admin-2.min.js') ?>"></script>
    <script src="<?= base_url('/assets/ckeditor/ckeditor.js') ?>"></script>
    <!-- Page level plugins -->
    <script src="<?= base_url('/assets/vendor/chart.js/Chart.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('/assets/js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= base_url('/assets/js/demo/chart-pie-demo.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>


</html>



