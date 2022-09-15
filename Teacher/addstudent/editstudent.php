<!-- Button Edit Student -->
<?php
 require_once('../../server/connect.php');
 require_once('../../server/checkteacher.php');
    $stmt = $conn->prepare("SELECT * FROM students WHERE student_id = :student_id");
    $stmt->bindParam(':student_id', $student_id);

    $student_id = $_GET["id"];
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['submit'])){

        try { 
    
            $stmt = $conn->prepare("UPDATE students SET username = :username, prefix = :prefix, student_name = :student_name,
            student_surname = :student_surname WHERE student_id = :student_id");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':prefix', $prefix);
            $stmt->bindParam(':student_name', $student_name);
            $stmt->bindParam(':student_surname', $student_surname);
            $stmt->bindParam(':student_id', $student_id);
    
            $student_id = $_POST["id"];
            $username = $_POST["username"];
            $prefix = $_POST["prefix"];
            $student_name = $_POST["student_name"];
            $student_surname = $_POST["student_surname"];
    
            $stmt->execute();
    
            header('location:loadingsucceed.php'); 
    
        } catch (PDOException $e) {
            echo 'ไม่สามารถบันทึกข้อมูลได้ เกิดข้อผิดพลาด : ' . $e->getMessage();
            echo "<a href='student-username-table.php'>กลับหน้าตารางข้อมูลผู้ใช้นักเรียน</a>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลนักเรียน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
            แก้ไขข้อมูลผู้ใช้งานนักเรียน
        <hr>
        <form method="post">

        <input type="hidden" name="id" value="<?php echo $row['student_id']?>">  

            <div class="form-group mb-3">
                <label for="username" class="form-label">ชื่อผู้ใช้</label>
                <input class="form-control" type="text"name="username" value="<?php echo $row['username']?>" placeholder="ป้อนชื่อชื่อผู้ใช้" required>
            </div>

            <div class="form-group mb-3">
                <label for="prefix" class="form-label">คำนำหน้าชื่อ</label>
                <select class="form-select" name="prefix" aria-label="Default select example">
                    <option value="เด็กชาย">เด็กชาย</option>
                    <option value="เด็กหญิง">เด็กหญิง</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="student_name" class="form-label">ชื่อ</label>
                <input class="form-control" type="text"name="student_name" value="<?php echo $row['student_name']?>" placeholder="ป้อนชื่อ" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="student_surname" class="form-label">นามสกุล</label>
                <input class="form-control" type="text"name="student_surname" value="<?php echo $row['student_surname']?>" placeholder="ป้อนชื่อ" required>
            </div>
            
            <div class="d-grid gap-2 col-6 mx-auto">
                <!-- <button class="btn btn-success" type="submit" name="submit" >บันทึกข้อมูล</button> -->
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
                        ยืนยันการบันทึกการแก้ไขข้อมูลหรือไม่
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