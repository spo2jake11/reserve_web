<?php
$this->extend('layout/main');
$this->section('body');
?>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="<?= base_url('img/logo.png') ?>" alt="Logo" id="img_logo">
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="menu" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="reserve" class="nav-link">Reservation</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
    </ul>
</header>
<section class="highlight">
    <div class="row">
        <div class="high_img col mx-auto">
            <img src="/img/s.jpeg" alt="" class="img-fluid mx-auto">
        </div>
        <div class="high_txt col text-center my-auto">
            <h3>HIGHLIGHT</h3>
            <p>kajhsdkfjhaksdjhfkahsdkjfad</p>
        </div>
    </div>
</section>



<?php
$this->endSection();
?>