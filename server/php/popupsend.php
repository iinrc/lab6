<?php
	require_once 'connect.php';
	$Author = filter_var(trim($_POST['Author']), FILTER_SANITIZE_STRING);
	$Title = filter_var(trim($_POST['Title']), FILTER_SANITIZE_STRING);
	$Genre = filter_var(trim($_POST['Genre']), FILTER_SANITIZE_STRING);
	$Amount = filter_var(trim($_POST['Amount']), FILTER_SANITIZE_STRING);
	$Date = filter_var(trim($_POST['Date']), FILTER_SANITIZE_STRING);

	if(mb_strlen($Author) < 1 || mb_strlen($Author) > 100) 
		{
			echo "Недопустимая длина строки: автор";
			exit();
		} 
	else if(mb_strlen($Title) < 1 || mb_strlen($Title) > 50) 
		{
			echo "Недопустимая длина строки: название";
			exit();
		} 
	else if(mb_strlen($Genre) < 1 || mb_strlen($Genre) > 50) 
		{
			echo "Недопустимая длина строки: жанр";
			exit();
		} 
	else if(mb_strlen($Amount) < 1 || mb_strlen($Amount) > 10) 
		{
			echo "Недопустимая длина строки: количество";
			exit();
		}

	mysqli_query($connect, "INSERT INTO `books` ( `Author`, `Title`, `Genre`, `Amount`, `Date`) VALUES( '$Author', '$Title', '$Genre', '$Amount', '$Date')");
	
	header('Location: /index3.php');
?>
