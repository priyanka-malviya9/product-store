<?php
//require_once "conn.php";
require_once "../includes/conn.php";
// **********************   UPLOAD FILE   ****************************

$file_name = $_FILES['image']['name'];
$file_tmp = $_FILES['image']['tmp_name'];

if(move_uploaded_file($file_tmp,"../uploads/".$file_name))
{
  header("location:index.php?alert=img_uploaded");
}
else
{
  header("location:index.php?alert=img_upload_failed");

}



// *******************  INSERT DATA IN DATABASE  *********************

if(isset($_POST['AddProduct']))
{
   $sql = "INSERT INTO `store`(`Name`, `Price`, `Description`, `Image`) 
     VALUES ('$_POST[name]','$_POST[price]','$_POST[desc]','$file_name')";
   
       if(mysqli_query($conn,$sql))
       {
         header("location:index.php?success=added");
        }
        else
   
       {
         header("location:index.php?alert=add_failed");
   
       }
      }


// ****************************       UPDATE          *****************************

if(isset($_POST['EditProduct']))
{
  $file_name = $_FILES['image']['name'];
$file_tmp = $_FILES['image']['tmp_name'];
  
  $sql="UPDATE store SET `Name`='$_POST[name]' , `Price`='$_POST[price]' , `Description`='$_POST[desc]' , `Image`='$file_name' WHERE `Id`='$_POST[productid]'";
  if(mysqli_query($conn,$sql))
  {
    header("location:index.php?updated-successfully");
  }
  else
  {
    header("location:index.php?updated-failed");
  }
}

  ?>