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
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                <div class="table-responsive table-rounded">
                    <table class="table table-bordered table-striped text-center" style="width: 100%;">
                        <thead class="table-heading">
                            <tr>
                                <th>Gambar</th>
                                <th>Merk/Type</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody"></tbody>
                    </table>
                    <nav class="mt-3">
                        <ul class="pagination justify-content-center" id="pagination"></ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $.getJSON('data-katalog.json', function (data) {
                var rowsShown = 5;
                var currentPage = 1;
                var numPages = Math.ceil(data.length / rowsShown);

                function showPage(page) {
                    var startIndex = (page - 1) * rowsShown;
                    var endIndex = Math.min(startIndex + rowsShown, data.length);
                    var tableRows = '';

                    for (var i = startIndex; i < endIndex; i++) {
                        if (i < data.length) {
                            tableRows += '<tr>';
                            tableRows += '<td class="align-middle">' + data[i].gambar + '</td>';
                            tableRows += '<td class="align-middle">' + data[i].merk_type + '</td>';
                            tableRows += '<td class="align-middle">' + data[i].deskripsi + '</td>';
                            tableRows += '<td class="align-middle">' + data[i].kategori + '</td>';
                            tableRows += '<td class="align-middle">Aksi</td>';
                            tableRows += '</tr>';
                        }
                    }

                    $('#tableBody').html(tableRows);
                }

                function createPagination() {
                    var pagination = '';

                    if (currentPage > 1) {
                        pagination += '<li class="page-item" id="prevPage"><a class="page-link" href="#">Previous</a></li>';
                    }

                    var startPage = currentPage - 2;
                    var endPage = currentPage + 2;

                    if (startPage <= 0) {
                        startPage = 1;
                        endPage = Math.min(5, numPages);
                    }

                    if (endPage > numPages) {
                        endPage = numPages;
                        startPage = Math.max(1, endPage - 4);
                    }

                    if (startPage > 1) {
                        pagination += '<li class="page-item disabled"><a class="page-link" href="#">...</a></li>';
                    }

                    for (var i = startPage; i <= endPage; i++) {
                        if (i === currentPage) {
                            pagination += '<li class="page-item active"><a class="page-link" href="#">' + i + '</a></li>';
                        } else {
                            pagination += '<li class="page-item"><a class="page-link" href="#">' + i + '</a></li>';
                        }
                    }

                    if (endPage < numPages) {
                        pagination += '<li class="page-item disabled"><a class="page-link" href="#">...</a></li>';
                    }

                    if (currentPage < numPages) {
                        pagination += '<li class="page-item" id="nextPage"><a class="page-link" href="#">Next</a></li>';
                    }

                    $('#pagination').html(pagination);
                }

                showPage(currentPage);
                createPagination();

                $(document).on('click', '.pagination li a', function () {
                    var id = $(this).parent().attr('id');

                    if (id === 'prevPage' && currentPage > 1) {
                        currentPage--;
                    } else if (id === 'nextPage' && currentPage < numPages) {
                        currentPage++;
                    } else if (!$(this).parent().hasClass('active')) {
                        currentPage = parseInt($(this).text());
                    }

                    showPage(currentPage);
                    createPagination();
                });
            }).fail(function () {
                console.error('Failed to load JSON data.');
            });
        });
    </script>

    <?php
    include('../components/partials/footer.php');
    include('../components/partials/script.php');
    ?>
</body>

</html>
