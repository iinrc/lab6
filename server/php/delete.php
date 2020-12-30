<?php 
 require_once 'connect.php';
 
 $BookID = $_GET['id'];
 
 mysqli_query($connect, "DELETE FROM `books` WHERE `books`.`BookID` =  '$BookID'" );
 header('Location: /index3.php');
 ?>