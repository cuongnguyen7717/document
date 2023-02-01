<?php 
session_start();

if (isset($_SESSION['iduser']) && isset($_SESSION['user'])) {
 ?>
 

<?php include_once('header.php');?>
<?php include_once('sidebar.php');?>
<?php include_once('top-header.php');?>		   
<?php include_once('main-content.php');?>		   
<?php include_once('footer.php');?>		   



			 
<?php 
}else{
     header("Location: login.php");
     exit();
}
