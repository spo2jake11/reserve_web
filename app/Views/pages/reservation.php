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

<?php if (!empty($errors)) : ?>
    <?php foreach ($errors as $error) : ?>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading"></h4>
            <p><?= $error ?></p>
            <p class="mb-0"></p>
        </div>
    <?php endforeach; ?>
<?php elseif (!empty($message)) : ?>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading"></h4>
        <p><?= $message ?></p>
        <p class="mb-0"></p>
    </div>
<?php endif; ?>

<main class="m-auto row d-flex container">
    <div class="col d-flex">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula porttitor risus,
            at rhoncus lacus ultricies eget. Donec viverra lectus magna, et ullamcorper risus ultricies et.
            Sed elementum eget dui vel pretium. Maecenas dignissim pellentesque augue, a rhoncus felis lacinia vel.
        </p>
    </div>
    <form class="col d-flex flex-column" action="/reserve" method="POST">

        <h1 class="h3 mb-3 fw-normal">Reservation Form</h1>

        <div class="form-floating my-1">
            <input type="email" name="userEmail" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
            <label for="floatingEmail">Email address</label>
        </div>

        <div class="form-floating my-1">
            <input type="text" name="userName" id="floatingName" class="form-control" placeholder="Name" required>
            <label for="floatingName">Name</label>
        </div>

        <label for="floatingDate">Date of Reservation</label>
        <div class="form-floating my-1">
            <input type="date" name="userDate" id="floatingDate" class="form-control" required>
        </div>

        <label for="floatingTime">Time of Reservation</label>
        <div class="form-floating my-1">
            <select name="userTime" id="floatingTime" class="form-select" required>
                <?php
                $times = ['15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00'];
                foreach ($times as $time) : ?>
                    <option value=<?= strtotime($time) ?>><?= $time ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <label for="floatingTable">Expected Seat/s</label>
        <div class="form-floating my-1">
            <select name="userTable" id="floatingTable" class="form-select" required>
                <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>
        </div>

        <label for="floatingPayment">Mode of Payment</label>
        <div class="form-floating my-1">
            <select name="userPayment" id="floatingPayment" class="form-select" required>
                <option value="Cash">Cash</option>
                <option value="Credit">Credit Card</option>
            </select>
        </div>

        <input type="hidden" name="userCode" value=<?= rand(000000000, 999999999) ?>>
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