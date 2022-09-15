<?php 
     if(isset($_SESSION['student_id'])) {
     } else {
      header('Refresh:0; url=../Login/studentlogin.php');
     }
?>