<?php
session_start();
if(isset($_SESSION['id'])){
        header("location:index.php");
        die();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container-lg">

    <h1 style="text-align: center;" "class="mt-3">Webboard sinxia</h1>
    <?php include "nav.php" ?>
    
    <div class="row mt-4">
        <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-10">
            <div class="card bg-light text-dark">
                <div class="card-header">เข้าสู่ระบบ</div>
                <div class="card-body">
                <form action="Verify.php" method="post">
                    <div class="form-group mt-2" >
                        <label for="login" class="form-label">Login:</label>
                        <input type="text" name="login" id="login" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="Password" name="pwd" id="pwd" class="form-control">
                    </div>
                    <div class="form-group mt-2"align="center" >
                        <input type="submit" value="Login" class="btn btn-secondary">
                        <input type="Reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
    </div>
    
   
    <br>
        <div style="text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.html">กรุณาสมัครสมาชิก</a></div>
    </div>
</body>
</html>