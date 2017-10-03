<?php
$title = 'Name of product';
include 'templates/header.php';
include 'templates/navigation.php';
?>

<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/product_large_01.jpg" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block"> Name of product</h2>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row">
        <main class="col-lg-8 main-content">
            <h2 class="d-block d-md-none">Name of product</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet porta mauris. Morbi eleifend ultricies eleifend. Etiam eget condimentum velit, sed aliquam turpis. Suspendisse pellentesque ultrices odio, sit amet tincidunt tellus egestas sed. Morbi vitae ante quis justo pulvinar pharetra sit amet non est. Cras vitae nunc sit amet purus elementum semper at eu erat. Fusce ornare diam ante, eu accumsan nulla euismod at. Nulla scelerisque lacinia eleifend.</p>
            <p>Nulla lacinia gravida ligula, ac pharetra magna gravida tempor. Vivamus tempus viverra urna ut molestie. Fusce ultrices, libero id luctus sollicitudin, mi ex ultrices risus, a convallis orci quam eget nisl. Proin quis enim ornare metus vestibulum dapibus sed vitae felis. Vestibulum mattis vehicula ante, non ullamcorper tortor aliquam ut. Mauris sed hendrerit orci. Ut eget tincidunt augue. Aliquam cursus mauris ut enim elementum, sed imperdiet urna rhoncus. In dapibus metus a consequat condimentum. Nullam elementum et eros sit amet dictum.</p>
            <p>Pellentesque at blandit lorem. Suspendisse potenti. Vivamus a mi sit amet nibh pellentesque rutrum sit amet eget est. Vivamus hendrerit mi lacus, vel tempor velit vulputate at. Nullam iaculis, dolor sed feugiat sodales, dolor nisl eleifend justo, fringilla interdum mauris leo vel nisi. Phasellus tellus justo, faucibus vitae elit a, sagittis pretium dui. Praesent id urna ac diam pellentesque ullamcorper. Donec sed felis sed neque euismod viverra. Mauris varius pellentesque tortor. Vestibulum erat lacus, rhoncus sed augue sit amet, porttitor cursus purus.</p>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0 product_description">
            <h3 class="text-center text-uppercase mt-5">Description</h3>
            <p class="text-center lead p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <h3 class="text-center text-uppercase mt-2">Price</h3>
            <p class="display-4 text-center lead p-3">$25</p>
        </aside>
    </div>
</div>

<?php
include 'templates/footer.php';
?>

