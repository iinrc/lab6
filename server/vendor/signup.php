<?php 
	session_start();
	require_once 'connect_reg.php';
	$full_name = $_POST['full_name'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];
	


    $error_fields = [];
	
	if($full_name === ''){
		$error_fields[] = '$full_name';
	}
	
	if($login === ''){
		$error_fields[] = 'login';
	}
	
	if($email === ''){
		$error_fields[] = '$email';
	}
	
	if($password === ''){
		$error_fields[] = '$password';
	}
	
	if($password_confirm === ''){
		$error_fields[] = '$password_confirm';
	}
	
	if(!empty($error_fields)){
		$_SESSION['message'] = 'Проверьте правильность введенных данных! Возможно, какие-то поля остались незаполненными.';
		header ('Location: ../reg.php');
		die();
	}

	
	if ($password === $password_confirm){
		
		$query = 'SELECT*FROM users WHERE login = "'.$login.'"';
			$isLoginFree = mysqli_fetch_assoc(mysqli_query($connect, $query));
			if (empty($isLoginFree)) 
			{
				if(preg_match("/([0-9]+)/", $password))
				{
				}
				else{
					$_SESSION['message'] = 'Нет цифр в пароле!';
					header ('Location: ../reg.php');}
				if(preg_match("/([a-z]+)/", $password))
				{
				}
				else{
					$_SESSION['message'] = 'Нет прописных букв в пароле!';
					header ('Location: ../reg.php');}
				if(preg_match("/([A-Z]+)/", $password))
				{
				}
				else{
					$_SESSION['message'] = 'Нет заглавных букв в пароле';
					header ('Location: ../reg.php');}
				$salt = '#$%^%%121938jbfbd$#$'; 
				$saltedPassword = md5($password.$salt); 
				$query = 'INSERT INTO users SET login="'.$login.'", password="'.$saltedPassword.'", salt="'.$salt.'"';
				mysqli_query($connect, $query); 
				$path = 'uploads/'.time().$_FILES['avatar']['name'];
				if (!move_uploaded_file($_FILES['avatar']['tmp_name'],'../' . $path))
				{
				$_SESSION['message'] = 'Ошибка при загрузке!';
				header ('Location: ../reg.php');
				}
				$password = md5($password);
				mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
				$_SESSION['message'] = 'Регистрация завершена!';
				header ('Location: ../auth.php');
			}	
			else {
				$_SESSION['message'] = 'Такой логин уже занят!';
				header ('Location: ../reg.php');
			}
		
	}
	else{
		$_SESSION['message'] = 'Пароли не совпадают!';
		header ('Location: ../reg.php');
	}
	
	
?>