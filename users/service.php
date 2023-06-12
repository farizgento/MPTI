<!DOCTYPE html>
<html lang="en">
<?php 
include('../components/partials/head.php')
?>
<body>
<?php 
include('../components/partials/header.php')
?>
<div style="min-height:50vh">
<div class="container my-5 py-5 text-center">
    <h1 class="my-3 fw-bold">Status Service</h1>
    <p class="lead mb-0">Kami selalu ingin memberikan pengalaman terbaik </p>
    <p class="lead mb-0">kepada pelanggan kami. Cek status service dan pastikan</p>
    <p class="lead mb-0">pengalaman Anda dengan kami selalu optimal.</p>
    
</div>

<div class="container">
    <img src="../components/image/search_icon.png" width="50" height="50" alt="">
    <h2 style="display:inline-block" class="fw-bold">Cek Status Service Anda</h2>
    <p class="lead">Cek status service gadget anda dengan memasukkan track number di bawah ini</p>
    <div class="input-group status-input mb-3">
        <input type="text" class="form-control" style="border-top-left-radius: 30px; border-bottom-left-radius: 30px;" placeholder="Masukkan track number" aria-label="Masukkan track number" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="border-top-right-radius: 30px; border-bottom-right-radius: 30px; width: 150px;">Button</button>
    </div>
</div>
</div>

<div class="container my-5">
    <div style=" padding:40px; background-color: #EBEFF2; border-radius:10px; min-height:383px;">
        <h1>Informasi Status Servis</h1>
    </div>
</div>



<?php
include('../components/partials/footer.php');
include('../components/partials/script.php'); 
?>
</body>
</html>