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
    <main class="m-auto row d-flex container">
        <div class="col d-flex">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula porttitor risus, 
                at rhoncus lacus ultricies eget. Donec viverra lectus magna, et ullamcorper risus ultricies et. 
                Sed elementum eget dui vel pretium. Maecenas dignissim pellentesque augue, a rhoncus felis lacinia vel.
            </p>
        </div>
        <form class="col d-flex flex-column">
            
            <h1 class="h3 mb-3 fw-normal">Reservation Form</h1>

            <div class="form-floating my-1">
                <input type="email" name="userEmail" class="form-control"
                    id="floatingEmail" placeholder="name@example.com" >
                <label for="floatingEmail">Email address</label>
            </div>

            <div class="form-floating my-1">
                <input type="text" name="userName" id="floatingName" class="form-control" placeholder="Name">
                <label for="floatingName">Name</label>
            </div>

            <div class="form-floating my-1">
                <input type="date" name="userDate" id="floatingDate" class="form-control">
                <label for="floatingDate"></label>
            </div>

            <div class="form-floating my-1">
                <select name="userTime" id="floatingTime" class="form-select">
                    <option selected>Select time</option>
                    <?php 
                        for ($i = 15; $i <= 21; $i++)
                        { 
                            ?>
                                <option value=""><?= "$i:00";?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>

            <div class="form-floating">
                <select name="userTable" id="floatingTable" class="form-select">
                    <option selected>Expected seat/s</option>
                    <?php 
                        for ($i = 1; $i <= 10; $i++)
                        {
                            ?>
                                <option value=""><?= $i?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Review Reservation</button>
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
