
<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=l, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<body>
<div class="container">
    <h1><center>Webboard Jame</center></h1>
    <?php include "nav.php"; ?>
    <div class="row mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card text-dark bg-white border-primary">
                <div class="card-header bg-primary text-white">กรอกข้อมูล</div>
                <div class="card-body">
                    <form action="register_save.php" method="post">
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">ชื่อบัญชี:</label>
                            <div class="col-md-9">
                                <input type="text" name="login" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-md-3 col-form-label">รหัสผ่าน:</label>
                            <div class="col-md-9">
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">ชื่อ-นามสกุล:</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label pt-0">เพศ:</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <input type="radio" name="gender" value="m" class="form-check-input"required>
                                    <label class="form-check-label">ชาย</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="f" class="form-check-input"required>
                                    <label class="form-check-label">หญิง</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="o" class="form-check-input"required>
                                    <label class="form-check-label">อื่นๆ</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">อีเมล:</label>
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <button class="btn btn-primary btn-sm" type="submit">
                                 <i class="bi bi-same me-1"></i>สมัครสมาชิก
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    </div>     
</body>
</html>