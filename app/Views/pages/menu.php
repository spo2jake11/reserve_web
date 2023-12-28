<?php
$this->extend('layout/main');
$this->section('body');
?>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">******** Dining</span>
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">Menu</a></li>
        <li class="nav-item"><a href="reserve" class="nav-link">Reservation</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
    </ul>
</header>
<main>
    <div>
        <p class="fs-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula porttitor risus,
            at rhoncus lacus ultricies eget. Donec viverra lectus magna, et ullamcorper risus ultricies et.
            Sed elementum eget dui vel pretium. Maecenas dignissim pellentesque augue, a rhoncus felis lacinia vel.
        </p>
    </div>
    <div>

    </div>
</main>

<?=
$this->endSection();
?>