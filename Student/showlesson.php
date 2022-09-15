<?php
 require_once('../server/connect.php');
 require_once('../server/checkstudent.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ดูบทเรียน</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">

    <style>
      pre {font-family: 'Prompt', sans-serif;}
   
    </style>
</head>
<body>
    <!-- sidebar -->
<div id="mySidenav" class="sidenav"> 
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 

    <a href="#"><i class="far fa-id-card"></i> ข้อมูลส่วนตัว <br> 
    <?php if(isset($_SESSION['student_id'])): ?> 
    ชื่อ : <?php echo $_SESSION['student_name'].' '.$_SESSION['student_surname']; ?> <br>
    สถานะ : <?php echo $_SESSION['license'];?>
    <?php endif ?>
    </a>

    <hr class="text-light"> 

    <a href="index.php"><i class="fas fa-home"></i> หน้าหลัก</a>

    <hr class="text-light"> 

    <a href="../../server/logout.php"><i class="fas fa-door-open"></i> ออกจากระบบ</a>
        
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

<?php
    $lessons = "SELECT * FROM lessons";
  
    $result = $conn->prepare($lessons);
    $result->execute();

?>

<?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
<div class="container">
    <div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            บทที่ <?php echo $row['lesson_id']; ?> เรื่อง <?php echo $row['lesson_name']; ?>
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <a class="btn btn-success" href="lesson.php?id=<?=$row['lesson_id'];?>">เข้าสู่เนื้อหาบทเรียน</a> <br>
        </div>
        </div>
    </div>
    </div>
</div>
ิ<br>
ิ<br>
ิ<br>

<?php } ?>


<footer class="card bg-dark text-white text-center p-3">
        <span> COPYRIGHT © 2022</span>
            <a class="text-white" >Dev : Bunyarit Singto</a> 
            ALL Right Reserved
    </footer>


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