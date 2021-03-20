<?php  
 //fetch.php  
 include "config_s.php";


 if(isset($_POST["emp_id"]))  
 {  
      $query = "SELECT * FROM author WHERE id = '".$_POST["emp_id"]."'";  
      $result = mysqli_query($con, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>