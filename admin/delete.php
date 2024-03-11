<?php
require_once "../includes/conn.php";

  $sql="DELETE FROM store WHERE Id='$_GET[remove]'";
  if(mysqli_query($conn,$sql))
  {
    header("location:index.php?Id=$_GET[remove]deleted_successfully!");
  }
  else
  {
    header("location:index.php?Id=$_GET[remove]delete_failed!");
  }


?>