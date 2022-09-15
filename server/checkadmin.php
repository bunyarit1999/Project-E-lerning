<?php 
     if(isset($_SESSION['admin_id'])) {
     } else {
        header('Refresh:0; url=../Login/adminlogin.php');
     }
?>