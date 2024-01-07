<?php
$this->extend('layout/main');
$this->section('body');
?>
<style>
    article div {
        background-image: url("/img/home.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: scroll;
        height: 300px;
        width: 90%;
    }
</style>
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

<article>
    <div class="mx-auto d-flex justify-content-center">
        <h2 class="text-center mx-auto my-auto h-0 bg-white">
            Welcome to Chick n' Yats
        </h2>
    </div>
</article>

<section class="w-75 mx-auto">
    <div class="row my-5">
        <div class="col">
            <img src="/img/1.jpg" alt="" class="w-50 d-block mx-auto">
        </div>
        <div class="col mx-auto my-auto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dolor omnis? Veniam unde voluptate repudiandae inventore et recusandae iste sed impedit facere, maxime enim explicabo! Quasi ipsam possimus odio beatae.</p>
        </div>
    </div>
    <div class="row my-5">
        <div class="col mx-auto my-auto">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, distinctio! Itaque iure impedit voluptas quidem voluptatum quisquam ex suscipit, repudiandae fugit minus iusto praesentium. Esse praesentium doloribus necessitatibus illo provident.</p>
        </div>
        <div class="col">
            <img src="/img/2.jpg" alt="" class="w-50 d-block mx-auto">
        </div>
    </div>
    <div class="row my-5">
        <div class="col">
            <img src="/img/3.jpg" alt="" class="w-50 d-block mx-auto">
        </div>
        <div class="col mx-auto my-auto">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam neque deserunt obcaecati, porro adipisci dicta incidunt maiores pariatur reprehenderit nulla hic iste enim perspiciatis, nostrum dolor iusto earum illum ratione.</p>
        </div>
    </div>



</section>



<?php
$this->endSection();
?>