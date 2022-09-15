<?php 
require_once('server/connect.php');
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
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- sidebar -->
    <div id="mySidenav" class="sidenav"> 
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 

      
    <li class="nav-item dropdown">
    <a class="dropdown-toggle" href="#" id="Menulogin" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-sign-in-alt"></i>
    เข้าสู่ระบบ
    </a>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="Menulogin">
    <a class="dropdown-item" href="Login/studentlogin.php">เข้าสู่ระบบนักเรียน</a>
    <a class="dropdown-item" href="Login/teacherlogin.php">เข้าสู่ระบบอาจารย์</a>
    <a class="dropdown-item" href="Login/adminlogin.php">เข้าสู่ระบบผู้ดูแลระบบ</a>
    </ul>
    </li>

    <a href="contact/"><i class="fas fa-id-card-alt"></i>
    ติดต่อผู้ดูแล</a>

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

    
    <!-- carousel สไลด์ภาพ -->
    <br> <br> 
    <section id="carouselExampleIndicators" class="container carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/Photo01.jpg" alt="Image">
                <div class="carousel-caption d-block">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/Photo02.jpg" alt="Image">
                <div class="carousel-caption d-block">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/Photo03.jpg" alt="Image">
                <div class="carousel-caption d-block">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/Photo04.jpg" alt="Image">
                <div class="carousel-caption d-block">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/Photo05.jpg" alt="Image">
                <div class="carousel-caption d-block">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/Photo06.jpg" alt="Image">
                <div class="carousel-caption d-block">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/Photo07.jpg" alt="Image">
                <div class="carousel-caption d-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>

    <!-- Section Header -->
    <section class="py-5 bg-white text-center">
        <div class="container">
            <h2>เว็บไซต์บทเรียนออนไลน์วิชาคณิตศาสตร์ | ระดับชั้นประถมศึกษาปีที่ 3</h2>
            <h3>โรงเรียนอนุบาลบางใหญ่ จ.นนทบุรี</h3>
         
            <p class="lead text-muted">
                ในการจัดทำเว็บไซต์บทเรียนออนไลน์วิชาคณิตศาสตร์ ระดับชั้นประถมศึกษาปีที่ 3 ได้รับความร่วมมือที่ดีเป็นอย่างยิ่ง<br>
                จากอาจารย์ที่ปรึกษาโครงการ คณะกรรมการ และ อาจารย์ผู้สอนวิชาคณิตศาสตร์ ระดับชั้นประถมศึกษาปีที่ 3 ขอขอบพระคุณเป็นอย่างยิ่ง
            </p>
        </div>
    </section>
       
    <section class="py-5 bg-white text-center">
        <div class="container">
            <h2>นักคณิตศาสตร์ในอดีต</h2>
            </div>
      </section>
    <!-- Content เนื้อหา -->
    <section class="container mb-5">
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <img src="img/index/01.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-tex"> <h5>  The Great Mathematicians : <br> Pythagoras of Samos </h5>
                    </div>
                    <div class="card-footer bg-white border-0 d-grid">
                        <a href="https://www.youtube.com/watch?v=S5wAtiFOwrE" target="_blank" class="btn btn-danger">ดูคลิปวิดิโอ ...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow border-0 h-100">
                    <img src="img/index/02.jpg" class="card-img-top" alt="...">
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
                    <img src="img/index/03.jpg" class="card-img-top" alt="...">
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