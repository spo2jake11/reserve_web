<?php
$this->extend('layout/main');
$this->section('body');
?>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="<?= base_url('img/logo.png') ?>" alt="Logo" id="img_logo">
    </a>
    <ul class="nav nav-pills inline-middle">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">Menu</a></li>
        <li class="nav-item"><a href="reserve" class="nav-link">Reservation</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
    </ul>
</header>
<main class="row m-auto">
    <div>
        <p class="fs-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula porttitor risus,
            at rhoncus lacus ultricies eget. Donec viverra lectus magna, et ullamcorper risus ultricies et.
            Sed elementum eget dui vel pretium. Maecenas dignissim pellentesque augue, a rhoncus felis lacinia vel.
        </p>
    </div>
    <div>
        <nav class="navbar navbar-expand navbar-light justify-content-center">
            <ul class="navbar-nav mx-auto fs-5">
                <li class="nav-item">
                    <a class="nav_menu nav-link" href="menu/#">Appetizers</a>
                </li>
                <li class="nav-item">
                    <a class="nav_menu nav-link" href="menu/#">Main Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav_menu nav-link" href="menu/#">Deserts</a>
                </li>
                <li class="nav-item">
                    <a class="nav_menu nav-link" href="menu/#">Beverages</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col mx-auto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo accusamus dolorum optio enim eum? Repellat, facilis suscipit. Porro, iusto expedita, eos quos consequatur esse culpa eum, ratione soluta aliquid fugiat!</p>
        </div>
        <div class="col mx-auto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, amet! Nostrum obcaecati quibusdam perferendis, velit nemo alias repudiandae tempore fugiat, fugit nisi sunt corporis cumque. Provident cumque quibusdam quia laboriosam?</p>
        </div>
    </div>
</main>
<?=
$this->endSection();
?>