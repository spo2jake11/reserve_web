<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <base href="/">
    <title>Document</title>
</head>
<style>
    html {
        height: 100%;
    }

    body {
        min-height: 100%;
    }

    #bg {
        background-image: url('<?= base_url('img/bg.jpg') ?>');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    #img_logo {
        width: 160px;
        margin-left: 25px;
    }

    #img_foot {
        width: 160px;
    }

    #navbar {
        margin-right: 25px;
    }

    .nav_menu:active,
    .nav_menu:hover {
        color: blue;
    }

    header ul li.nav-item:hover {
        border: 0.5px solid blue;
        border-radius: 5px;
    }

    .main_body {
        background-color: rgba(255, 255, 255, 0.6);
        min-height: 100%;
        margin-bottom: 10px;
    }

    footer {
        background-color: rgba(255, 255, 255, 0.6);
    }
</style>

<body class="bg-image d-flex flex-column" id="bg">

    <div class="bg-image"></div>
    <div class="main_body container mx-auto mask">
        <?= $this->renderSection('body') ?>
    </div>
    <footer class="footer container mx-auto mt-auto">
        <p class="text-center">Copyright &copy 2024 </p>
        <img class="mx-auto d-block" src="<?= base_url('img/logo.png') ?>" alt="Logo" id="img_foot">
    </footer>
</body>
<script src="/bootstrap/dist/js/bootstrap.min.js"></script>

</html>