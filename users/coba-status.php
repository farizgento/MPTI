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
        <input type="text" name="track_number" class="form-control" style="border-top-left-radius: 30px; border-bottom-left-radius: 30px;" placeholder="Masukkan track number" aria-label="Masukkan track number" aria-describedby="button-addon2" name="track_number" id="track_number">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="border-top-right-radius: 30px; border-bottom-right-radius: 30px; width: 150px;" onclick="cekStatus()">Kirim</button>
    </div>
    <div id="status_result">
        
    </div>
</div>

</div>

<?php
include('../components/partials/footer.php');
include('../components/partials/script.php'); 
?>

<script>
function cekStatus() {
  var trackNumber = document.getElementById("track_number").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("status_result").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "status_service.php?track_number=" + trackNumber, true);
  xhttp.send();
}
</script>

</body>
</html>
