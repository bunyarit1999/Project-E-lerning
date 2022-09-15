<!-- Button Delete Teacher -->
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
<?php
if($_SERVER['REQUEST_METHOD'] === 'GET') {

    require_once('../../server/connect.php');
    
    try {
        $stmt = $conn->prepare("DELETE FROM teachers WHERE teacher_id = :teacher_id");
        
        $stmt->bindParam(':teacher_id', $teacher_id  );
 
        $teacher_id = $_GET["teacher_id"];
       
        $stmt->execute();
    
        echo "";
        header('refresh: 1; url=../addteacher/teacher-username-table.php');        
      } catch(PDOException $e) {
          echo $teachers . "<br>" . $e->getMessage();
          echo "<a href='../addteacher/teacher-username-table.php'>Back</a>";
      }
      $conn = null;
}
?>

</body>
</html>



        

