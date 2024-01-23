<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
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
                        <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>">Home</a>
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
                </ul>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 mt-3">
                    <?php if ($_SESSION['user']) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-user me"></i> <?php echo $_SESSION['user']['username']; ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="./account/profile.php"><i class="fa-regular fa-address-card me-3"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-regular fa-calendar-days me-3"></i>Book
                                        Event</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="./account/logout.php" class="btn btn-primary dropdown-item">Logout</a>
                                </li>
                            </ul>
                        </li>

                    <?php else : ?>
                        <a href="./account/login.php" class="btn btn-primary me-3">Login</a>
                        <a href="./account/register.php" class="btn btn-outline-primary">Register</a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</nav>