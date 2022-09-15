<?php
 
 require_once('../../server/connect.php');
 require_once('../../server/checkteacher.php');
 /**
  * ตรวจสอบเงื่อนไขที่ว่า ตัวแปร $_POST['submit'] ได้ถูกกำหนดขึ้นมาหรือไม่
  */
$stmt = $conn->prepare("SELECT * FROM topic WHERE topic_id = :topic_id");
$stmt->bindParam(':topic_id', $topic_id);

$topic_id = $_GET["id"];

$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['submit'])){

    try { 
             // ---------------- Upload image ...
    $image_file = $_FILES['txt_file']['name'];
    $type = $_FILES['txt_file']['type'];
    $size = $_FILES['txt_file']['size'];
    $temp = $_FILES['txt_file']['tmp_name'];

    $path = "upload/" . $image_file;
    $directory = "upload/";

    if (empty($image_file)) {
        echo '<script> alert("เกิดข้อผิดพลาด โปรดอัพโหลดไฟล์รูปภาพ") </script>';
        header("Refresh:0; url=edittopic.php?id=$topic_id"); 
        $errorMsg = " ";
    } elseif ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
        if (!file_exists($path)) {
            if ($size < 5000000) {
                move_uploaded_file($temp, 'upload/'.$image_file);
            } else {
                echo '<script> alert("ขนาดไฟล์รูปภาพต้องไม่เกิน 5 MB") </script>';
                header("Refresh:0; url=edittopic.php?id=$topic_id"); 
                $errorMsg = " ";
            }
        } else {
            // echo '<script> alert("เกิดข้อผิดพลาด โปรดเปลี่ยนชื่อรูปภาพใหม่") </script>';
            // header("Refresh:0; url=edittopic.php?id=$topic_id"); 
            // $errorMsg = " ";
        }
    } else {
            echo '<script> alert("ไฟล์ที่รองรับคือ .JPG .JPEG .PNG & .GIF เท่านั้น") </script>';
            header("Refresh:0; url=edittopic.php?id=$topic_id"); 
            $errorMsg = " ";
    }
        // ---------------- 

            if (!isset($errorMsg)) {

            $stmt = $conn->prepare("UPDATE topic SET topic_name = :topic_name , content = :content , image = :image , lesson_id = :lesson_id WHERE topic_id = :topic_id");
            
            $stmt->bindParam(':topic_name', $topic_name);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':image', $image_file);
            $stmt->bindParam(':lesson_id', $lesson_id); 
            $stmt->bindParam(':topic_id', $topic_id);
            
            $topic_id = $_POST["id"];
            $topic_name = $_POST["topic_name"];
            $content = $_POST["content"];   
            $lesson_id= $_POST["lesson_id"];

            if ($stmt->execute()) {
                $insertMsg = " ";
                header("refresh: 1; url=loadingsucceedtopic.php?id=$lesson_id");  
            }
        }       
    } catch(PDOException $e) {
        $e->getMessage();
    }
    /**สิ้นสุดการเชื่อมต่อ Database */
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลหัวข้อ</title>
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
<h4><i class="fas fa-user-plus"></i> แก้ไขข้อมูลบทเรียน</h4>
    <hr>

    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?php echo $row['topic_id']?>">  

            <div class="form-group mb-3">
                <label for="lesson_id" class="form-label">บทที่</label>
                <input class="form-control" type="number" name="lesson_id" value="<?php echo $row['lesson_id']?>"required> 
            </div>

            <div class="form-group mb-3">
                <label for="topic_name" class="form-label">ชื่อหัวข้อ</label>
                <input class="form-control" type="text" name="topic_name" value="<?php echo $row['topic_name']?>" required>
            </div>

            <div class="form-group mb-3">
                <label for="content" class="form-label">เนื้อหา</label>
                <textarea class="form-control" type="text" name="content" rows="10" value="<?php echo $row['content']?>" required></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="name" class="col-sm-9 control-label">อัพโหลดรูปภาพ</label>
                <div class="col-sm-6">
                    <input type="file" name="txt_file" class="form-control">
                </div>
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