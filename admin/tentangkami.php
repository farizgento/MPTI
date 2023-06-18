<!DOCTYPE html>
<html lang="en">
<?php include('../components/partials/head.php') ?>
<body>  
<?php include('../components/partials/header.php') ?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 col-lg-2 px-sm-2 d-none d-lg-block">
            <div class="ms-2 shadow min-vh-100" style="width: 100%;">
                <div class="align-items-center align-items-sm-start">
                    <div class="my-5 py-5">    
                        <img src="../components/image/Ellipse.png" class="d-none d-lg-block" alt="">
                        <img src="../components/image/HiAdmin.png" class="d-none d-lg-block" alt="">
                    </div>
                    <div class="text-center mt-4 pt-3">
                        <a href="./katalog.php" class="nav-link link-secondary mb-3"><h5>Katalog</h5></a>
                        <a href="./service.php" class="nav-link link-secondary mb-3"><h5>Servis</h5></a>
                        <a href="#" class="nav-link link-secondary mb-3"><h5>Tentang Kami</h5></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTENT -->
        <div class="col-auto col-md-9 col-xl-10 px-sm-10 py-3">
            <div class="d-flex px-4 my-5">
                <h4 class="w-100 fw-bold d-none d-lg-block ">KATALOG</h4>
                <div class="dropdown w-100 d-lg-none">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Katalog</a></li>
                        <li><a class="dropdown-item" href="#">Service</a></li>
                        <li><a class="dropdown-item" href="#">Tentang Kami</a></li>
                    </ul>
                </div>
                <a href="#" class=""><img src="../components/image/tambah.png" width="100%" alt=""></a>
            </div>
            <!-- TABLE -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center" style="width: 100%;">
                    <tr class="" style="background-color: #FFB703;">
                        <th>Track Number</th>
                        <th>Nama Pelanggan</th>
                        <th>Perangkat</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="border rounded-3 bg-secondary p-2 text-white text-center">
                                TN001
                            </div>
                        </td>
                        <td>Itsnaini Irvina</td>
                        <td>HP Pavilion Envy</td>
                        <td>16/03/2023</td>
                        <td>Selesai</td>
                        <td>
                            <div class="dropdown">
                                <a class="text-decoration-none text-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Aksi
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#"><img src="../components/image/material-symbols_edit-square-outline-rounded.png" class="mb-2 me-3" height="20px" width="20px" alt="">Edit</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="../components/image/material-symbols_delete-rounded.png" height="20px" width="20px" class="mb-1 me-3" alt="">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="border rounded-3 bg-secondary p-2 text-white text-center">
                                TN001
                            </div>
                        </td>
                        <td>Itsnaini Irvina</td>
                        <td>HP Pavilion Envy</td>
                        <td>16/03/2023</td>
                        <td>Selesai</td>
                        <td>
                            <div class="dropdown">
                                <a class="text-decoration-none text-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Aksi
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#"><img src="../components/image/material-symbols_edit-square-outline-rounded.png" class="mb-2 me-3" height="20px" width="20px" alt="">Edit</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="../components/image/material-symbols_delete-rounded.png" height="20px" width="20px" class="mb-1 me-3" alt="">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="border rounded-3 bg-secondary p-2 text-white text-center">
                                TN001
                            </div>
                        </td>
                        <td>Itsnaini Irvina</td>
                        <td>HP Pavilion Envy</td>
                        <td>16/03/2023</td>
                        <td>Selesai</td>
                        <td>
                            <div class="dropdown">
                                <a class="text-decoration-none text-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Aksi
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#"><img src="../components/image/material-symbols_edit-square-outline-rounded.png" class="mb-2 me-3" height="20px" width="20px" alt="">Edit</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="../components/image/material-symbols_delete-rounded.png" height="20px" width="20px" class="mb-1 me-3" alt="">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>
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
