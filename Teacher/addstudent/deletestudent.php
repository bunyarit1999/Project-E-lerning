<!-- Button Delete ADMIN -->
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
<?php
if($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    /**Connect to MySQL database */
    require_once('../../server/connect.php');
    
    try {
        /**Preparing SQL command for Insert data vaccine table */
        $stmt = $conn->prepare("DELETE FROM students WHERE student_id = :student_id");
        
        /**Binding parameter to command */
        $stmt->bindParam(':student_id', $student_id );
 
        /**Execute command */
        $student_id  = $_GET["student_id"];
       
        $stmt->execute();
    
        echo "";
        /**Go back to index page */
        header('refresh: 1; url=../addstudent/student-username-table.php');        
      } catch(PDOException $e) {
          echo $students . "<br>" . $e->getMessage();
          echo "<a href='../addstudent/student-username-table.php'>Back</a>";
      }
      /**สิ้นสุดการเชื่อมต่อ Database */
      $conn = null;
}
?>


</body>
</html>



        

