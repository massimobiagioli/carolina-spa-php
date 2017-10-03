<?php
$title = 'Home';
include 'templates/header.php';
include 'templates/navigation.php';
?>

    <!-- Carousel -->
    <div class="container">
        <div id="main-slider" class="carousel slide mt-4" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/slide_01.jpg" class="d-block img-fluid" alt="our facilities">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-uppercase">Brand new facilities</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide_02.jpg" class="d-block img-fluid" alt="our facilities">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-uppercase">Learn about our services</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide_03.jpg" class="d-block img-fluid" alt="our facilities">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-uppercase">New website 2 for 1 in all services</h3>
                    </div>
                </div>
            </div>

            <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#main-slider" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- New Website Section -->
    <section class="new-website py-5">
        <h2 class="text-center text-uppercase"><span class="text-lowercase">Welcome to our new</span> website</h2>
        <p class="text-center mt-4">Feel like new with our massages and professional <br> therapists</p>
    </section>

    <div class="container pb-5">
        <div class="row">
            <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
                <div class="image-links">
                    <img src="img/service_01.jpg" class="img-fluid">
                    <div class="row no-gutters">
                        <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                            <h3 class="text-center text-uppercase"><span class="text-lowercase">Learn more</span> About us</h3>
                            <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
                <div class="image-links">
                    <img src="img/service_02.jpg" class="img-fluid">
                    <div class="row no-gutters">
                        <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                            <h3 class="text-center text-uppercase"><span class="text-lowercase">About our</span> services</h3>
                            <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
                <div class="image-links">
                    <img src="img/service_03.jpg" class="img-fluid">
                    <div class="row no-gutters">
                        <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                            <h3 class="text-center text-uppercase"><span class="text-lowercase">Visit our</span> store</h3>
                            <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Hours Section -->
    <div class="business-hours">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5">
                    <?php include 'templates/business_hours.php'; ?> 
                </div>
                <div class="col-md-6 bg-hours">
                </div>
            </div>
        </div>
    </div>

    <!-- Check our products section -->
    <div class="container products py-5">
        <h2 class="text-center text-uppercase"><span class="text-lowercase">Checkout our</span> products</h2>
        <div class="row py-4">
            <div class="col-6 col-md-3 mb-5 mb-md-0">
                <div class="card">
                    <a href="#">
                        <img src="img/product_thumb_01.jpg" class="card-img-top img-fluid">
                        <div class="card-block">
                            <h3 class="card-title text-center text-uppercase mb-0">Product 1</h3>
                            <p class="card-text text-uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, suscipit.</p>
                            <p class="price text-center mb-0">$ 25</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-5 mb-md-0">
                <div class="card">
                    <a href="#">
                        <img src="img/product_thumb_02.jpg" class="card-img-top img-fluid">
                        <div class="card-block">
                            <h3 class="card-title text-center text-uppercase mb-0">Product 2</h3>
                            <p class="card-text text-uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, debitis.</p>
                            <p class="price text-center mb-0">$ 25</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-5 mb-md-0">
                <div class="card">
                    <a href="#">
                        <img src="img/product_thumb_03.jpg" class="card-img-top img-fluid">
                        <div class="card-block">
                            <h3 class="card-title text-center text-uppercase mb-0">Product 3</h3>
                            <p class="card-text text-uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, voluptatem!</p>
                            <p class="price text-center mb-0">$ 25</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-5 mb-md-0">
                <div class="card">
                    <a href="#">
                        <img src="img/product_thumb_04.jpg" class="card-img-top img-fluid">
                        <div class="card-block">
                            <h3 class="card-title text-center text-uppercase mb-0">Product 4</h3>
                            <p class="card-text text-uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, nulla.</p>
                            <p class="price text-center mb-0">$ 25</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
include 'templates/appointment.php';
include 'templates/footer.php';
?>