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
        <li class="nav-item"><a href="#" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">Reservation</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
    </ul>
</header>



<main class="m-auto row d-flex container">
    <div class="col d-flex">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula porttitor risus,
            at rhoncus lacus ultricies eget. Donec viverra lectus magna, et ullamcorper risus ultricies et.
            Sed elementum eget dui vel pretium. Maecenas dignissim pellentesque augue, a rhoncus felis lacinia vel.
        </p>
    </div>
    <form class="col d-flex flex-column" action="/reserve" method="POST">

        <?php
        if (session()->has('message')) : ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong><?= session("message") ?></strong>
            </div>
        <?php
        endif ?>

        <h1 class="h3 mb-3 fw-normal">Reservation Form</h1>
        <!-- Email input -->
        <div class="form my-1">
            <label for="floatingEmail">Email address</label>
            <input type="text" name="Email" class="form-control my-1" id="floatingEmail" placeholder="name@example.com">
            <span style="color:red">
                <?php
                if (session()->has("validation") &&  session("validation")->hasError("Email")) : ?>
                    <p><?= session("validation")->getError("Email") ?></p>
                <?php
                endif;
                ?>
            </span>
        </div>
        <!-- Name input -->
        <div class="form my-1">
            <label for="floatingName">Name</label>
            <input type="text" name="Name" id="floatingName" class="form-control my-1" placeholder="John Doe">
            <span style="color:red">
                <?php
                if (session()->has("validation") &&  session("validation")->hasError("Name")) : ?>
                    <p><?= session("validation")->getError("Name") ?></p>
                <?php
                endif;
                ?>
            </span>
        </div>
        <!-- Date input -->
        <label for="floatingDate">Date of Reservation</label>
        <div class="form-floating my-1">
            <input type="date" name="Date" id="floatingDate" class="form-control">
            <span style="color:red">
                <?php
                if (session()->has("validation") &&  session("validation")->hasError("Date")) : ?>
                    <p><?= session("validation")->getError("Date") ?></p>
                <?php
                endif;
                ?>
            </span>
        </div>
        <!-- Reservation time input. Default Time 15:00 or 3:00pm -->
        <label for="floatingTime">Time of Reservation</label>
        <div class="form-floating my-1">
            <select name="Time" id="floatingTime" class="form-select">
                <option value="0" selected>Select time</option>
                <?php
                $times = ['15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00'];
                foreach ($times as $time) : ?>
                    <option value=<?= strtotime($time) ?>><?= $time ?></option>
                <?php endforeach; ?>
            </select>
            <span style="color:red">
                <?php
                if (session()->has("validation") &&  session("validation")->hasError("Time")) : ?>
                    <p><?= session("validation")->getError("Time") ?></p>
                <?php
                endif;
                ?>
            </span>
        </div>
        <!-- Table seat input -->
        <label for="floatingTable">Expected Seat/s</label>
        <div class="form-floating my-1">
            <select name="Table" id="floatingTable" class="form-select">
                <option value="0" selected>Select how many seat/s</option>
                <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>
            <span style="color:red">
                <?php
                if (session()->has("validation") &&  session("validation")->hasError("Table")) : ?>
                    <p><?= session("validation")->getError("Table") ?></p>
                <?php
                endif;
                ?>
            </span>
        </div>
        <!-- Payment Input -->
        <label for="floatingPayment">Mode of Payment</label>
        <div class="form-floating my-1">
            <select name="Payment" id="floatingPayment" class="form-select">
                <option value="None" selected>Select payment method</option>
                <option value="Cash">Cash</option>
                <option value="Credit">Credit Card</option>
            </select>
            <span style="color:red">
                <?php
                if (session()->has("validation") &&  session("validation")->hasError("Payment")) : ?>
                    <p><?= session("validation")->getError("Payment") ?></p>
                <?php
                endif;
                ?>
            </span>
        </div>
        <!-- Hidden input to generate random code -->
        <input type="hidden" name="Code" value=<?= rand(000000000, 999999999) ?>>
        <!-- Button -->
        <button class="btn btn-primary w-100 py-2 my-1" type="submit">Review Reservation</button>
    </form>
</main>
<style>
    body {
        background-color: skyblue;
    }

    .main_body {
        background-color: lightgray;
    }
</style>
<?=
$this->endSection();
?>