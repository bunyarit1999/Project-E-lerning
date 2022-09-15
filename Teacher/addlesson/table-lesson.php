<?php 
    require_once('../../server/connect.php');
    require_once('../../server/checkteacher.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="../../node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">

    <!-- นำเข้า  CSS จาก dataTables -->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <!-- นำเข้า  Javascript  จาก   dataTables -->
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
    
    <link rel="stylesheet" href="../../css/style.css">
    <title>ตารางข้อมูลบทเรียน</title>
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
<h4><i class="fas fa-table"></i> ตารางแสดงข้อมูลบทเรียนทั้งหมด <a class="btn btn-info" href="addlesson.php"> เพิ่มข้อมูลบทเรียน <a> </h4> 
    <hr>
    <table class="table table-striped table-hover" id="example">
        <thead>
            <tr>
            <th>บทที่</th>
            <th>ชื่อบทเรียน</th>
            <th>การจัดการเนื้อหา</th>
            <th>การจัดการข้อมูล</th>
            </tr>
        </thead>
        <tbody>
            <!-- Show data -->
            <?php
            /**Preparing SQL command */
            $lessons = "SELECT * FROM lessons";
            /**Execute command for select data and put in to $result */
            $result = $conn->prepare($lessons);
            $result->execute();
            /**Check number of record from executed command */
            if ($result->rowCount()) {
            /**Show all row of data */
            $rows = $result->fetchAll(PDO::FETCH_OBJ);
            foreach($rows as $row) {
        ?>
        <tr>
            <td><?=$row->lesson_id?></td>
            <td><?=$row->lesson_name?></td>
            <td><a class="btn btn-success" href="table-topic.php?id=<?=$row->lesson_id?>">จัดการเนื้อหา</a></td>
            <form action="">
            <td><a class="btn btn-warning" href="editlesson.php?id=<?=$row->lesson_id?>">แก้ไขข้อมูล</a>
            <button type='button' class="btn btn-danger" id='deleteItem' data-id="<?=$row->lesson_id?>">ลบข้อมูล</button> 
            </td> 
            </form>
        </tr>
        <?php
                }
            } else {
            echo '<tr><td colspan=3>ไม่พบข้อมูลบทเรียน</tr></td>';
            }
            $conn = null;
            ?>

            </tbody>
    </table>
        
</div>
 <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }

        $(document).on('click', '#deleteItem', function(){  
        Swal.fire({
            text: "คุณต้องการลบข้อมูลหรือไม่ ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
              if (result.isConfirmed) { 
                $.ajax({  
                    type: "GET",  
                    url: "deletelesson.php",  
                    data: { lesson_id : $(this).data('id') }
                   
                }) .done(function(response, textStatus, jqXHR){
                    Swal.fire({
                        text: 'ลบรายการเสร็จสิ้น',
                        icon: 'success',
                        confirmButtonText: 'ตกลง',
                    }).then((result) => {
                        location.reload()
                    })
                }) 
            } 
        })
    }) 
    $(function(){
                $('#example').dataTable();
            });    
    </script> 
</script> 

</body>
</html>
