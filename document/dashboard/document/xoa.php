<?php 
error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$datbase = "document";
$links = mysqli_connect($host,$user,$password);
mysqli_select_db($links, $datbase);
mysqli_set_charset($links,"utf8");
     if(isset($_GET['delete_id']))
     {
         $sql_query="DELETE FROM document WHERE idd=".$_GET['delete_id'];
         mysqli_query($links, $sql_query);
         header("Location: $_SERVER[PHP_SELF]");
     }
    ?>