<?php
$title = 'Services';
include 'templates/header.php';
include 'templates/navigation.php';
?>

<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/services.jpg" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block"> Services</h2>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row">
        <main class="col-lg-8 main-content">
            <h2 class="d-block d-md-none">Services</h2>
            <div id="services" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header py-2" role="tab" id="service_1">
                        <h3 class="mb-0">
                            <a href="#service_1desc" data-toggle="collapse" data-parent="#services"
                               aria-expanded="true" aria-controls="service_1desc">Service 1</a>
                        </h3>
                    </div>
                    <div id="service_1desc" class="collapse show" role="tabpanel"
                         aria-labelledby="service_1">
                        <div class="card-block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tellus non felis volutpat molestie. Etiam volutpat, quam varius ultrices sagittis, purus nunc condimentum magna, in vulputate massa tellus consectetur nunc. Vestibulum justo nunc, congue eget elementum vitae, cursus vitae orci. Etiam pellentesque felis quis vehicula varius. Ut tellus sem, tincidunt in ligula nec, pharetra luctus velit. Morbi ullamcorper, lorem non viverra sagittis, erat ligula gravida justo, eget congue orci dolor ut erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere varius purus, non congue sem volutpat at. Quisque dapibus odio vitae lorem condimentum, id posuere mi eleifend.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header py-2" role="tab" id="service_2">
                        <h3 class="mb-0">
                            <a class="collapsed" href="#service_2desc" data-toggle="collapse" data-parent="#services"
                               aria-expanded="false" aria-controls="service_1desc">Service 2</a>
                        </h3>
                    </div>
                    <div id="service_2desc" class="collapse" role="tabpanel"
                         aria-labelledby="service_2">
                        <div class="card-block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet metus mauris, vel eleifend ante aliquam in. Pellentesque id sapien gravida nunc varius laoreet. Nam hendrerit nunc vitae tortor accumsan, nec viverra est sollicitudin. Fusce at auctor felis, vel eleifend lectus. Aliquam nulla lorem, facilisis et nisl sed, hendrerit pellentesque mauris. Quisque finibus vitae leo vitae tristique. Quisque rutrum tellus ipsum, luctus elementum purus posuere vitae. Nullam lacinia pharetra facilisis. Vestibulum ac eleifend lorem. Curabitur sed lectus gravida mauris tincidunt sollicitudin varius eget lacus. Phasellus vitae lorem pellentesque, dictum nisl vitae, viverra mi. Proin commodo, metus vitae pretium auctor, neque orci efficitur magna, vitae molestie tortor turpis a erat. Ut tempus sem eget sem elementum suscipit.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header py-2" role="tab" id="service_3">
                        <h3 class="mb-0">
                            <a class="collapsed" href="#service_3desc" data-toggle="collapse" data-parent="#services"
                               aria-expanded="false" aria-controls="service_1desc">Service 3</a>
                        </h3>
                    </div>
                    <div id="service_3desc" class="collapse" role="tabpanel"
                         aria-labelledby="service_3">
                        <div class="card-block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac ligula non orci blandit lacinia eu nec nulla. Proin semper pretium condimentum. Nunc eu magna mi. Duis elementum neque vel molestie efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent faucibus velit non nisi porta, vel cursus mauris imperdiet. Vivamus sollicitudin in ipsum sed porta. Morbi viverra convallis velit quis laoreet. Cras eu posuere enim. Phasellus mauris nisi, condimentum ac quam a, consectetur pellentesque sapien.
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0 discount">
            <div class="p-3">
                <h3 class="text-center text-uppercase mt-4">First Time Customers</h3>
                <p class="lead text-center mt-4">Get 20% off in any service, with this coupon:</p>
                <div class="coupon p-1">
                    <p class="text-center text-uppercase">
                        <span class="display-4 pt-3">20% OFF</span>in any service
                    </p>
                </div>
            </div>
        </aside>
    </div>
</div>

<?php
include 'templates/appointment.php';
include 'templates/footer.php';
?>

