<!DOCTYPE html>
<html lang="en">
<?php 
include('../components/partials/head.php')
?>
<body>  
<?php 
include('../components/partials/header.php')
?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 shadow">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                <h1 class="d-flex align-items-center py-lg-5 py-sm-3 mb-md-0 me-md-auto">
                    <span class="fs-5 d-none d-sm-inline fw-bold">KATEGORI</span>
                </h1>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                    <li class="w-100">
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <!-- CONTENT -->
        <div class="col py-3">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" style="object-fit: cover;" width="100%" height="100%" src="../components/image/header.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p class="paragraf">Some representative placeholder content for the first slide of the carousel.</p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" style="object-fit: cover;" width="100%" height="100%" src="../components/image/2.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
                    <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p class="paragraf">Some representative placeholder content for the second slide of the carousel.</p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" style="object-fit: cover;" width="100%" height="100%" src="../components/image/1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

                    <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p class="paragraf">Some representative placeholder content for the third slide of this carousel.</p>
                    </div>
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?php
include('../components/partials/footer.php');
include('../components/partials/script.php'); 
?>
</body>
</html>