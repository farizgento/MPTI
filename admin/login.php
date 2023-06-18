<!DOCTYPE html>
<html lang="en">
<?php 
include('../components/partials/head.php')
?>
<body>
<?php 
include('../components/partials/header.php')
?>
<div class="py-5" style="min-height:60vh">
 <div class="container"> 
    <div class="mx-auto my-5 card box">
        <div class="row box mx-auto">
            <div class="col-lg-6 position-relative box-form">
                <div class="position-absolute top-50 start-50 translate-middle">
                <img src="../components/image/JayaDigital.png" class="py-2 logo" alt="Jaya Digital" width="427" height="195">
                </div>
            </div>
            <div class="col-lg-6 position-relative box-form-bottom">
                <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="text-center">Login</h1>
                <br>
                <br>
                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                    
                </form>
                </div>
            </div>
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