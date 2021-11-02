<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Form Login</title>
    <link rel="icon" href="<?=base_url()?>/assets/img/icon.png" type="image/gif">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>

<body>
    <div class="registration-form">
        <form method="post" action="<?php echo base_url('login1/login'); ?>">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="number" name="nis" class="form-control item" id="nis" placeholder="NIS" required>
                <?= form_error('nis','<small class="text-danger pl-3>"','</small>');?>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control item" id="password" placeholder="Password" aria-hidden="true" required>
                <?= form_error('password','<small class="text-danger pl-3>"','</small>');?>
            </div>
            <div>
                Belum Punya Akun? <a href="/evoting2/evoting/register/">Buat Sekarang</a>
            </div>
            <div>
                <button type="submit" name="login" class="btn btn-block create-account">Masuk</button>
            </div>
        </form>
        <div class="social-media">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <script src="<?= base_url('js/script.js'); ?>"></script>
</body>

</html>