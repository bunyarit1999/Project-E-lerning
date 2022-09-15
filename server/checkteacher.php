<?php 
     if(isset($_SESSION['teacher_id'])) {
     } else {
        header('Refresh:0; url=../Login/teacherlogin.php');
     }
?>