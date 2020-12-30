<?php 
	session_start();
	require_once 'connect_reg.php';
	
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	$error_fields = [];
	
	if($login === ''){
		$error_fields[] = '$login';
	}
	
	if($password === ''){
		$error_fields[] = '$password';
	}
	
	if(!empty($error_fields)){
		$_SESSION['message'] = 'Проверьте правильность введенных данных! Возможно, какие-то поля остались незаполненными!';
		header ('Location: ../auth.php');
		die();
	}
	
	$password = md5($_POST['password']);
	
	
	$check = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' " );
	if (mysqli_num_rows($check)>0){
		
		$user = mysqli_fetch_assoc($check);
		$_SESSION['user'] = [
			"id" => $user ['id'],
			"full_name" => $user['full_name'],
			"avatar" => $user['avatar'],
			"email" => $user['email']
		];
		header ('Location: ../profile.php');
	}
	else {
		$_SESSION['message'] = 'Неверный логин или пароль!';
		header ('Location: ../auth.php');
	}
?>