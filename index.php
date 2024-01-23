<?php

include './includes/constants.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="">
    <header class="vh-100 overflow-hidden">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">EMS</a>
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">EMS</h5>
                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                        <ul class="navbar-nav align-items-center justify-content-center fs-5 flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">News</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> -->
                        </ul>
                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 mt-3">
                            <?php if ($_SESSION['user']) : ?>
                                <a href="./accounts/logout.php" class="btn btn-primary me-3">Logout</a>
                            <?php else : ?>
                                <a href="./accounts/login.php" class="btn btn-primary me-3">Login</a>
                                <a href="./accounts/register.php" class="btn btn-outline-primary">Register</a>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
        <main>
            <section class="w-100 vh-100 d-flex justify-content-center align-items-center text-white fs-1">
                <h1>EVENT MANAGEMENT SYSTEM</h1>
            </section>
        </main>
    </header>

    <section class="events-section">
        <div class="container">
            <h2 class="mb-4 border-bottom">Upcoming Events</h2>

            <div class="events">
                <!-- Events will be dynamically added here -->
            </div>

        </div>
    </section>

    <section class="subscribe-section">
        <div class="container">

            <div class="subscribe p-5 text-center">

                <h2 class="mb-3">Subscribe</h2>
                <p>Get the latest news and event updates!</p>

                <form>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter email">
                            <button class="btn btn-primary">
                                <i class="fa fa-envelope"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </section>

    <footer class="py-8">
        <div class="bg-dark py-4 text-white text-center">
            <p class="mb-0">Event Management System</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/scripts.js"></script>
</body>

</html>