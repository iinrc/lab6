<?php
	require_once 'connect.php';
	$BookID = filter_var(trim($_POST['BookID']), FILTER_SANITIZE_STRING);
	$Author = filter_var(trim($_POST['Author']), FILTER_SANITIZE_STRING);
	$Title = filter_var(trim($_POST['Title']), FILTER_SANITIZE_STRING);
	$Genre = filter_var(trim($_POST['Genre']), FILTER_SANITIZE_STRING);
	$Amount = filter_var(trim($_POST['Amount']), FILTER_SANITIZE_STRING);
	$Date = filter_var(trim($_POST['Date']), FILTER_SANITIZE_STRING);

	
	mysqli_query($connect, "UPDATE `books` SET `Author` = '$Author', `Title` = '$Title', `Genre` = '$Genre', `Amount` = '$Amount', `Date` = '$Date'  WHERE `books`.`BookID` = '$BookID'");
	
	header('Location: /index3.php');
?>
 