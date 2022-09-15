<?php 
 require_once('../server/connect.php');
 require_once('../server/checkadmin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- sidebar -->
<div id="mySidenav" class="sidenav"> 
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 

    <a href="#"><i class="far fa-id-card"></i> ข้อมูลส่วนตัว <br> 
    <?php if(isset($_SESSION['admin_id'])): ?> 
    ชื่อ : <?php echo $_SESSION['admin_name'].' '.$_SESSION['admin_surname']; ?> <br>
    สถานะ : <?php echo $_SESSION['license'];?>
    <?php endif ?>
    </a>
    <hr class="text-light"> 

    <a class="dropdown-toggle" href="#" id="Menulogin" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-plus"></i>
    เพิ่มข้อมูลผู้ใช้งาน
    </a>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="Menulogin">
    <a class="dropdown-item" href="addstudent/addstudent.php">เพิ่มข้อมูลผู้ใช้นักเรียน</a>
    <a class="dropdown-item" href="addteacher/addteacher.php">เพิ่มข้อมูลผู้ใช้อาจารย์</a>
    <a class="dropdown-item" href="addadmin/addadmin.php">เพิ่มข้อมูลผู้ใช้ผู้ดูแล</a>
    </ul>

    <a class="dropdown-toggle" href="#" id="Menulogin" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-table"></i>
    ข้อมูลผู้ใช้งาน
    </a>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="Menulogin">
    <a class="dropdown-item" href="addstudent/student-username-table.php">ตารางข้อมูลผู้ใช้นักเรียน</a>
    <a class="dropdown-item" href="addteacher/teacher-username-table.php">ตารางข้อมูลผู้ใช้อาจารย์</a>
    <a class="dropdown-item" href="addadmin/admin-username-table.php">ตารางข้อมูลผู้ใช้ผู้ดูแล</a>
    </ul>

    <a href="../server/logout.php"><i class="fas fa-door-open"></i>
    ออกจากระบบ</a>

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
    </div>
    <div class="Menu">
    <span onclick="openNav()">&#9776; เปิดเมนูรายการ</span> 
   </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">เว็บไซต์บทเรียนออนไลน์วิชาคณิตศาสตร์ | ระดับชั้นประถมศึกษาปีที่ 3</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        </div>
    </nav>
    
<br> <br> 
    <section id="carouselExampleIndicators" class="container carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../img/Admin/Photo01.jpg" alt="Image">
                <div class="carousel-caption d-block">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Header -->
    <section class="py-5 bg-white text-center">
        <div class="container">
            <h3>เพิ่ม/ลบ/แก้ไข/ตรวจสอบ ข้อมูลผู้ใช้งาน นักเรียน , อาจารย์ , ผู้ดูแลระบบ</h3>
        </div>
    </section>

    <!-- Content เนื้อหา -->
    <section class="container mb-5">
        <div class="row g-3">
            <?php if(isset($_SESSION['admin_id'])): ?>
            <div class="col-12 text-center py-3">
                <h3>ชื่อ : <?php echo $_SESSION['prefix'].' '.$_SESSION['admin_name'].' '.$_SESSION['admin_surname']; ?></h3>
                <h3>สิทธิการใช้งาน : <?php echo $_SESSION['license']; ?></h3>
            </div>
            <?php endif ?>

            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <img src="../img/index/01.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-tex"> <h5>  The Great Mathematicians : <br> Pythagoras of Samos </h5>
                    </div>
                    <div class="card-footer bg-white border-0 d-grid">
                        <a href="https://www.youtube.com/watch?v=S5wAtiFOwrE" target="_blank" class="btn btn-btn btn-danger">ดูคลิปวิดิโอ ...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <img src="../img/index/02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-tex"> <h5> The Great Mathematicians : Plato </h5> 
                    </div>
                    <div class="card-footer bg-white border-0 d-grid">
                        <a href="https://www.youtube.com/watch?v=QV4j-L65LIo" target="_blank" class="btn btn-danger">ดูคลิปวิดิโอ ...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <img src="../img/index/03.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-tex"> <h5> The Great Mathematicians : Euclid </h5> 
                    </div>
                    <div class="card-footer bg-white border-0 d-grid">
                        <a href="https://www.youtube.com/watch?v=kdc1KhonB0o" target="_blank" class="btn btn-danger">ดูคลิปวิดิโอ ...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 

    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>

<footer class="card bg-dark text-white text-center p-3">
<span> COPYRIGHT © 2022</span>
    <a class="text-white" >Dev : Bunyarit Singto</a> 
    ALL Right Reserved
</footer>

</body>
</html>