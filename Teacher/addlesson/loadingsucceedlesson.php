<!-- Loading บทเรียน -->
<?php
     require_once('../../server/connect.php');
     header("refresh: 3; url=../addlesson/table-lesson.php");    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <title>กำลังบันทึกข้อมูล</title>
    <style>
    body {font-family: 'Kanit', sans-serif;}
    .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            }
    </style>

</head>
<body>


<div class="container">
  <div class="center">
  <button class="btn btn-success" type="button" >
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  <span class="visually-hidden">Loading...</span>
</button>
<button class="btn btn-success" type="button" >
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  ระบบกำลังดำเนินการ กรุณารอซักครู่...
</button>
    </div>
</div>

    
</body>
</html>



