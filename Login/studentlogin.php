<!-- หน้า Login Student -->
<?php
      require_once('../server/connect.php');
      if (isset($_POST['submit'])) {  
        
          $username = $_POST['username'];
          $password = $_POST['password'];
         
       $sql = "SELECT * FROM `students` WHERE `username` = '".$username."'";
       $result = $conn->prepare($sql);
       $result->execute();
       $rows = $result->fetchALL(PDO::FETCH_ASSOC);
       $row = $rows[0];
    
       if(!empty($row)){
           if(password_verify($password, $row['password'])){

               $_SESSION['student_id'] = $row['student_id'];
               $_SESSION['prefix'] = $row['prefix'];
               $_SESSION['license'] = $row['license'];
               $_SESSION['student_name'] = $row['student_name'];
               $_SESSION['student_surname'] = $row['student_surname'];

               if($row["license"] === 'Student') {
                 header('location:../Student/'); 
            } 
        } else {
            echo '<script> alert("รหัสผ่านไม่ถูกต้อง") </script>';
            header('Refresh:0; url=studentlogin.php');
        }
    }else{
 
        // echo '<script> alert("โปรดตรวจสอบข้อมูลใหม่อีกครั้ง")</script>';
        header('location:studentloadingerror.php');
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
    <title>เข้าสู่ระบบนักเรียน</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="Background-Student-Login">
    <img src="../img/Student/Photo02.jpg" width="1920" height="937">
</div>

<div class="laout-login">
<div class="border border-info Regular shadow row g-0">
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
                        <input type="submit" name="submit" class="btn btn-info d-grid mx-auto w-75" value="เข้าสู่ระบบ">
                        <a href="../index.php" class="text-info" >กลับหน้าหลัก</a>
                    </div>
                </div>
            </div>
        </form>
</div>
</div>     

</body>
</html>