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
        <li class="nav-item"><a href="about" class="nav-link">About Us</a></li>
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
    <div class="my-5 mx-auto w-75">
        <p class="fs-5">Welcome to Chick N' Yats. Home of the best Chicken Cuisine and a Paradise for Chicken food lovers!
            Here at Chick N' Yats, we value our customer's taste and ensure that the food we serve are hygienically clean
            and has been cooked and served with our finest ingredients and top-notch culinary equipment and skill from our esteemed chefs.</p>
    </div>
    <div class="row my-5">
        <div class="col">
            <img src="/img/menu/Baked Buffalo Chicken Thigh.png" alt="" class="w-75 d-block mx-auto">
        </div>
        <div class="col">
            <img src="/img/menu/Orange Marmalade Roasted Chicken.png" alt="" class="w-75 d-block mx-auto">
        </div>
        <div class="col">
            <img src="/img/menu/Chicken Sisig.png" alt="" class="w-75 d-block mx-auto">
        </div>
    </div>
    <div class="row my-5">
        <div class="col">
            <img src="/img/menu/Honey BBQ Chicken Bites.png" alt="" class="w-50 d-block mx-auto">
        </div>
        <div class="col">
            <img src="/img/menu/Spinach Stuffed Breast Sandwich.png" alt="" class="w-50 d-block mx-auto">
        </div>
        <div class="col">
            <img src="/img/menu/Whole Fried Chicken.png" alt="" class="w-50 d-block mx-auto">
        </div>
    </div>

    <div class=" my-5 w-75 mx-auto">
        <p class="fs-5">Thank you for your patronage for the Chick N' Yats restaurant. If you have problems with your reservation or with the website itself, please contact our
            Help Desk on their email at chicknyatsresto@gmail.com or call us through this number : 09278154408 </p>
    </div>
</section>



<?php
$this->endSection();
?>