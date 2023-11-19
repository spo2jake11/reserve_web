<?php
    $this->extend('layout/main');
    $this->section('body');
?>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">******** Dining</span>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">Reservation</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
        </ul>
    </header>
    <main class="m-auto row">
        <div class="col">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula porttitor risus, at rhoncus lacus ultricies eget. Donec viverra lectus magna, et ullamcorper risus ultricies et. Sed elementum eget dui vel pretium. Maecenas dignissim pellentesque augue, a rhoncus felis lacinia vel.
            </p>
        </div>
        <form class="col ms-5">
            <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Reservation Form</h1>

            <div class="form-floating">
                <input type="email" name="userEmail" class="form-control" id="floatingInput" placeholder="name@example.com" >
                <label for="floatingInput">Email address</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p>
        </form>
    </main>
    <style>
        body{
            background-color: skyblue;
        }
        .main_body{
            background-color: lightgray;
        }
    </style>
<?php
    $this->endSection();
?>
