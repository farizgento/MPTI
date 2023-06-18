<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <title>Responsive Table with Pagination</title>
    <style>
        .table-heading {
            background-color: #FFB703;
        }
        
        .table-rounded {
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="table-responsive table-rounded">
            <table class="table table-bordered">
                <thead class="table-heading">
                    <tr>
                        <th class="align-middle">Track Number</th>
                        <th class="align-middle">Nama Pelanggan</th>
                        <th class="align-middle">Perangkat</th>
                        <th class="align-middle">Tanggal</th>
                        <th class="align-middle">Status</th>
                        <th class="align-middle">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>
        </div>
        <nav class="mt-3">
            <ul class="pagination justify-content-center" id="pagination"></ul>
        </nav>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.getJSON('data-service.json', function(data) {
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
                            tableRows += '<td class="align-middle">' + data[i].track_number + '</td>';
                            tableRows += '<td class="align-middle">' + data[i].nama_pelanggan + '</td>';
                            tableRows += '<td class="align-middle">' + data[i].perangkat + '</td>';
                            tableRows += '<td class="align-middle">' + data[i].tanggal + '</td>';
                            tableRows += '<td class="align-middle">' + data[i].status + '</td>';
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
                
                $(document).on('click', '.pagination li a', function() {
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
            }).fail(function() {
                console.error('Failed to load JSON data.');
            });
        });
    </script>
</body>
</html>
