<?php
$this->extend('layout/main');
$this->section('body');
?>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="<?= base_url('img/logo.png') ?>" alt="Logo" id="img_logo">
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="menu" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="reserve" class="nav-link">Reservation</a></li>
        <li class="nav-item"><a href="about" class="nav-link active">About Us</a></li>
    </ul>
</header>
<section>
    <br>
    <div class="mx-auto text-center">
        <h3>ABOUT US</h3>
        <p class="fs-6 w-75 mx-auto">
            An idea bred from the mind of an young witful man turned restauranteur
            comes the best chicken dishes in town, sourced from a local farm. We also bring the
            nostalgic feeling of a classic city fine dining. Yat’s creativity for the food flourished as he
            ensures that quality will always be the top priority.
            The classic blend of a city Diner matched with the ambience of the well lit room is
            nothing short of an intuitive design and feel, we aimed to ensure that this place is for
            everyone to enjoy.
        </p>
    </div>
    <br><br>
    <div class="mx-auto text-center">
        <h3>LOCAL IS THE NEW HIP</h3>
        <p class="fs-6 w-75 mx-auto">
            It is beneficial for a restaurant to get its produce locally and help promote the
            introduction of the farmers market to the masses. We aim to do just that so that
            produces will not come in fresh to peoples plates.
            NO TO MICROWAVES, since our produce is locally sourced we are not the ones to
            stoop so low as to reheat the food.
            Chick N’ Yats is inspired by the feeling of a fine dining experience along with the feeling
            of connectivity between a rainy daytime city with dark blue clouds and that peaceful feel
            in the Diner, and made it worked by the variety of Chicken based menu and the millions
            to cook them and serve them in a precise manner. Its not always that you can see a
            Fine Dining establishment that offers an abundant and creative Chicken dishes, not
            many people know of all the creative ways to cook them either and we’re here to show
            them to you hot and ready.
        </p>
    </div>
</section>

<?php
$this->endSection();
?>