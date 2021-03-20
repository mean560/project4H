<?php

include "config_s.php";

if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($con, $_POST["value"]);
 $query = "UPDATE author SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 mysqli_query($con, $query);
 
}
?>