<?php

$conn=mysqli_connect('localhost','root','','product');
if(mysqli_connect_errno())
{
    die("Cannot connect to database." .mysqli_connect_error());
}

// define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/PRODUCT_STORE/uploads/");
// define("FETCH_SRC","http://127.0.0.1/product/uploads/");
?>