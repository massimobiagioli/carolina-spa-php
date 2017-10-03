<?php
$title = 'About Us';
include 'templates/header.php';
include 'templates/navigation.php';
?>

<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/about_us.jpg" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block"> About Us</h2>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row">
        <main class="col-lg-8 main-content">
            <h2 class="d-block d-md-none">About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu nibh sed diam laoreet elementum. Nullam luctus arcu ac sem ornare elementum. Aliquam luctus, nulla ac tempus mollis, ipsum nulla tristique ligula, sit amet ultricies sem ipsum ac mauris. Morbi eu ornare justo, sit amet fringilla ipsum. Suspendisse in iaculis mauris. Aliquam eget quam nunc. Mauris vulputate lobortis nisi, vitae placerat nisi suscipit et. Sed venenatis, dolor et aliquam dapibus, diam velit sodales enim, et ultrices lectus velit quis sapien. Donec ullamcorper bibendum nisi id sagittis. Sed pulvinar quis nisl a ornare. In magna nulla, varius sed urna eu, eleifend efficitur lectus. Suspendisse ut tristique dui.</p>
            <p>Morbi at fermentum elit, sit amet tincidunt libero. Pellentesque egestas mi nec orci eleifend facilisis. Proin ac condimentum massa. Pellentesque sed ante vitae ex condimentum aliquam a quis nunc. Etiam quis rutrum eros. Pellentesque id risus eu sem posuere egestas sed in lorem. Proin at feugiat dolor. Curabitur non condimentum mauris. Morbi aliquet eleifend convallis. Suspendisse sollicitudin blandit varius. Pellentesque aliquam nibh a tellus tempor pulvinar.</p>
            
            <div id="facilities-gallery">
                <h3 class="text-center text-uppercase py-4">
                    <span class="text-lowercase">Check our</span>facilities
                </h3>
                
                <a href="#" data-target="#image_1" data-toggle="modal">
                    <img src="img/gallery_thumb_01.jpg" class="rounded">
                </a>
                <a href="#" data-target="#image_2" data-toggle="modal">
                    <img src="img/gallery_thumb_02.jpg" class="rounded">
                </a>
                <a href="#" data-target="#image_3" data-toggle="modal">
                    <img src="img/gallery_thumb_03.jpg" class="rounded">
                </a>
                
                <div class="modal fade" id="image_1" tabindex="-1" role="dialog" 
                    aria-labelledby="image-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="img/gallery_large_01.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="image_2" tabindex="-1" role="dialog" 
                    aria-labelledby="image-2" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="img/gallery_large_02.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="image_3" tabindex="-1" role="dialog" 
                    aria-labelledby="image-3" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="img/gallery_large_03.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="sidebar hours p-3">
                <?php include 'templates/business_hours.php'; ?> 
            </div>
        </aside>
    </div>
</div>

<?php
include 'templates/footer.php';
?>

