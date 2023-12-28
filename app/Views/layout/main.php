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
    body {
        background-color: skyblue;
    }

    .main_body {
        background-color: lightgray;
    }
</style>

<body>
    <div class="main_body container-md mx-auto">
        <?= $this->renderSection('body') ?>
    </div>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>