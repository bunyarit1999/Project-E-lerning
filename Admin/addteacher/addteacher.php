<!-- ฟอร์มเพิ่ม USER Teacher -->
<?php
 require_once('../../server/connect.php');
 require_once('../../server/checkadmin.php');

 if(isset($_POST['submit'])){
     $username =$_POST['username'];
     $password = $_POST['password'];
     $passwordHashed = password_hash($password, PASSWORD_DEFAULT);       
    
      $sqlUser = "SELECT * FROM `teachers` WHERE `username` = '".$username."'";
        $checkUser = $conn->query($sqlUser);
        if( !$checkUser->rowCount() ) {
            $sql = "INSERT INTO `teachers` (`username`, `password`, `prefix`, `teacher_name`, `teacher_surname`, `license`) 
            VALUES ('".$username."', 
                    '".$passwordHashed."', 
                    '".$_POST['prefix']."', 
                    '".$_POST['teacher_name']."', 
                    '".$_POST['teacher_surname']."', 
                    '".$_POST['license']."')";
         $result = $conn->prepare($sql);
         $result->execute();
         if($result){
            header('location:loadingsucceed.php'); 
            //  echo '<script> alert("เพิ่มข้อมูลผู้ใช้สำเร็จ")</script>';
            //  header('Refresh:0; url=users.php');
         }else{
            header('location:loadingerror.php'); 
            //  echo '<script> alert("ระบบผิดพลาด โปรดติดต่อผู้ดูแลระบบ")</script>';
            //  header('Refresh:0; url=adduser.php');
         }
     } else {
         header('location:loadingerrorname.php'); 
        //  echo '<script> alert("ชื่อผู้ใช้นี้ ถูกใช้ไปเรียบร้อยแล้ว")</script>';
        //  header('Refresh:0; url=adduser.php');
     }
    
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลอาจารย์</title>
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
    <?php if(isset($_SESSION['admin_id'])): ?> 
    ชื่อ : <?php echo $_SESSION['admin_name'].' '.$_SESSION['admin_surname']; ?> <br>
    สถานะ : <?php echo $_SESSION['license'];?>
    <?php endif ?>
    </a>
    <hr class="text-light"> 

    <a href="../index.php"><i class="fas fa-home"></i>
    หน้าหลัก</a>

    <a class="dropdown-toggle" href="#" id="Menulogin" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-plus"></i>
    เพิ่มข้อมูลผู้ใช้งาน
    </a>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="Menulogin">
    <a class="dropdown-item" href="../addstudent/addstudent.php">เพิ่มข้อมูลผู้ใช้นักเรียน</a>
    <a class="dropdown-item" href="../addteacher/addteacher.php">เพิ่มข้อมูลผู้ใช้อาจารย์</a>
    <a class="dropdown-item" href="../addadmin/addadmin.php">เพิ่มข้อมูลผู้ใช้ผู้ดูแล</a>
    </ul>

    <a class="dropdown-toggle" href="#" id="Menulogin" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-table"></i>
    ข้อมูลผู้ใช้งาน
    </a>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="Menulogin">
    <a class="dropdown-item" href="../addstudent/student-username-table.php">ตารางข้อมูลผู้ใช้นักเรียน</a>
    <a class="dropdown-item" href="../addteacher/teacher-username-table.php">ตารางข้อมูลผู้ใช้อาจารย์</a>
    <a class="dropdown-item" href="../addadmin/admin-username-table.php">ตารางข้อมูลผู้ใช้ผู้ดูแล</a>
    </ul>

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
<h4><i class="fas fa-user-plus"></i> เพิ่มข้อมูลผู้ใช้อาจารย์</h4>
    <hr>
        <form action=" " method="post">
            <div class="form-group mb-3">
                <label for="license" class="form-label">สิทธิการใช้งาน</label>
                <select class="form-select" name="license" aria-label="Default select example">
                    <option value="Teacher">อาจารย์</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="username" class="form-label">ชื่อผู้ใช้</label>
                <input class="form-control" type="text"name="username" placeholder="ป้อนชื่อผู้ใช้" required>
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input class="form-control" type="password" name="password" placeholder="ป้อนรหัสผ่าน" required>
            </div>

            <div class="form-group mb-3">
                <label for="prefix" class="form-label">คำนำหน้าชื่อ</label>
                <select class="form-select" name="prefix" aria-label="Default select example">
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="teacher_name" class="form-label">ชื่อ</label>
                <input class="form-control" type="text"name="teacher_name" placeholder="ป้อนชื่อ" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="teacher_surname" class="form-label">นามสกุล</label>
                <input class="form-control" type="text"name="teacher_surname" placeholder="ป้อนนามสกุล" required>
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
                        ยืนยันการบันทึกข้อมูลหรือไม่
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