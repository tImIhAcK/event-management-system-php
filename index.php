<?php
    include './partials/_header.php';
?>
<header class="vh-100 overflow-hidden">
    <?php
            include './partials/_navbar.php';
        ?>
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

<?php

    include './partials/_footer.php';

    ?>