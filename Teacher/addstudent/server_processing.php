<?php
require_once('../../server/connect.php');
 
if(isset($_POST['start'])){
    
        $start = $_POST['start'];//รับข้อมูล เลขหน้าที่จะแสดง 
        
        $length = $_POST['length']; //รับข้อมูล จำนวนที่แสดงต่อหน้า ค่าเริ่มต้นคือ 10
        
        $searchData = $_POST['search']['value'];//รับข้อมูล ช่อง Search
        
 
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
 
        $searchValueResult = "";
        
        $searchValueData = mysqli_real_escape_string($conn,$searchData); // Search value
        
        //Query กรณีมีการค้นหาข้อมูล
        if($searchValueData != ''){
           $searchValueResult = " WHERE first_name LIKE '%".$searchValueData."%'  OR last_name LIKE '%".$searchValueData."%' OR email LIKE '%".$searchValueData."%' ";
        }
        
        //Query นับจำนวนข้อมูลทั้งหมด
        $t = mysqli_query($conn,"SELECT COUNT(*) as total FROM datatable");
        $records = mysqli_fetch_assoc($t);
        $totalRecords = $records['total'];
 
        //Query ข้อมูลที่จะแสดงใน DataTable
        $sql = "SELECT * FROM students $searchValueResult LIMIT $start , $length";
        $result = mysqli_query($conn, $sql);
        
        $data = array();
 
        if (mysqli_num_rows($result) > 0) {
 
          while($row = mysqli_fetch_assoc($result)) {
 
                $data[] = array(
                    'student_id'=> $row['student_id'],
                    'username'=> $row['username'],
                    'prefix'=> $row['prefix'],
                    'prefix'=> $row['prefix'],
                    'student_name'=> $row['student_name'],
                    'student_surname'=> $row['student_surname'],

                );
          }
        }
 
        mysqli_close($conn);
 
        $json_data = array(
            "draw"            => intval( $_REQUEST['draw'] ),   
            "recordsTotal"    => intval($totalRecords ),  
            "recordsFiltered" => intval($totalRecords),
            "data"            => $data   // total data array
        );
 
        echo json_encode($json_data);
    
}
 
 
?>