<?php
 require_once('../../server/connect.php');
 require_once('../../server/checkteacher.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
    try {
        
        $stmt = $conn->prepare("INSERT INTO lessons(lesson_name) 
        VALUES(:lesson_name)");
        
        $stmt->bindParam(':lesson_name', $lesson_name);

        $lesson_name = $_POST["lesson_name"];
        $stmt->execute();
    
        echo " ";
        header("refresh: 1; url=loadingsucceedlesson.php");        
    } catch(PDOException $e) {
        echo $lessons . "<br>" . $e->getMessage();
        echo "<a href='.'>Goto Home page</a>";
    }
    $conn = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลบทเรียน</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<!-- sidebar -->
<div id="mySidenav" class="sidenav"> 
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 

    <a href="#"><i class="far fa-id-card"></i> ข้อมูลส่วนตัว <br> 
    <?php if(isset($_SESSION['teacher_id'])): ?> 
    ชื่อ : <?php echo $_SESSION['teacher_name'].' '.$_SESSION['teacher_surname']; ?> <br>
    สถานะ : <?php echo $_SESSION['license'];?>
    <?php endif ?>
    </a>
    <hr class="text-light"> 

    <a href="../index.php"><i class="fas fa-home"></i>
    หน้าหลัก</a>

    <hr class="text-light"> 

    <a href="../../server/logout.php"><i class="fas fa-door-open"></i>
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
    
<br> <br> <br>
<div class="container my-3 p-3 bg-light rounded-3">
<h4><i class="fas fa-book"></i> เพิ่มข้อมูลบทเรียน</h4>
    <hr>

        <form action=" " method="post">

            <div class="form-group mb-3">
                <label for="lesson_name" class="form-label">ชื่อบทเรียน</label>
                <input class="form-control" type="text"name="lesson_name" placeholder="กรุณาใส่ชื่อบทเรียน ..." required>
            </div>
    
            <div class="d-grid gap-2 col-6 mx-auto">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                บันทึกข้อมูล
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> 🔴การแจ้งเตือน</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ยืนยันการเพิ่มข้อมูลบทเรียนหรือไม่
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit" name="submit">ยืนยัน</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                    </div>
                </div>
                </div>
                <button class="btn btn-danger" type="reset">ล้างข้อมูล</button>
            </div>
        </form>
    </div>
    
    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
</html>