<!-- หน้า Login Teacher -->
<?php
      require_once('../server/connect.php');
      if (isset($_POST['submit'])) {  
       
          $username = $_POST['username'];
          $password = $_POST['password'];
       
       $sql = "SELECT * FROM `teachers` WHERE `username` = '".$username."'";
       $result = $conn->prepare($sql);
       $result->execute();
       $rows = $result->fetchALL(PDO::FETCH_ASSOC);
       $row = $rows[0];
    
       if(!empty($row)){
           if(password_verify($password, $row['password'])){
             
               $_SESSION['teacher_id'] = $row['teacher_id'];
               $_SESSION['prefix'] = $row['prefix'];
               $_SESSION['license'] = $row['license'];
               $_SESSION['teacher_name'] = $row['teacher_name'];
               $_SESSION['teacher_surname'] = $row['teacher_surname'];

               if($row["license"] === 'Teacher') {
                 header('location:../Teacher/'); 
            } 
        } else {
            echo '<script> alert("รหัสผ่านไม่ถูกต้อง") </script>';
            header('Refresh:0; url=teacherlogin.php');
        }
    }else{
        // echo '<script> alert("โปรดตรวจสอบข้อมูลใหม่อีกครั้ง")</script>';
        header('location:teacherloadingerror.php');
    } 
} 
   
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>เข้าสู่ระบบ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="Background-Student-Login">
    <img src="../img/Teacher/Photo02.jpg" width="1920" height="937">
</div>

<div class="laout-login">
<div class="border border-success Regular shadow row g-0 bg-white">
  <form action="" method="POST">
           <h4 class="card-header text-center">เข้าสู่ระบบ</h4>
            <div class="card-body px-4">
                <div class="row g-2">
                    <div class="col-12">
                        <label for="username" class="col-form-label">ผู้ใช้งาน</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="กรุณาใส่ผู้ใช้งาน ... " required>
                    </div>
                    <div class="col-12">
                        <label for="password" class="col-form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="กรุณาใส่รหัสผ่าน ... " required>
                    </div>
                    <div class="col-12 text-center py-3">
                        <input type="submit" name="submit" class="btn btn-success d-grid mx-auto w-75" value="เข้าสู่ระบบ">
                        <a href="../index.php" class="text-success">กลับหน้าหลัก</a>
                    </div>
                </div>
            </div>
        </form>
</div>
</div>     

</body>
</html>