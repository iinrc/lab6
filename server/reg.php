<?php 
	session_start();
	if(isset($_SESSION['user'])) {
		header ('Location: profile.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="/css/css.css">
	<link rel="stylesheet" href="/css/reg.css">
    <title>READ AND LISTEN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <style>form {height: 80vh;}</style>

  <body>
  
<div>
 <center><img src="photos/logoza.ru.png" class="img-fluid" alt="New York">
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.html"><h3>R & L</h3></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.html">Основная</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index1.html">Жанры</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index2.html">Карта</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="index3.php">Список желаемого</a>
    </li>
	<li class="nav-item">
      <a class="nav-link active" href="profile.php">Аккаунт</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#">Корзина</a>
    </li>
  </ul>
</nav>

	<center>
	<br>
	<h3>Регистрация</h3>
	<hr>
	<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
      <label> ФИО </label>
	  <input type="text" name = "full_name" placeholder = "Введите полное имя">
	  <label> Логин </label>
	  <input type="text" name = "login"  placeholder = "Введите логин">
	  <label> Почта </label>
	  <input type="email" name = "email" placeholder = "Введите адрес почты">
	  <label> Фото профиля </label>
	  <input type="file" name = "avatar" >
	  <label> Пароль </label>
	  <input type="password" name = "password" placeholder = "Введите пароль">
	  <label> Подтверждение пароля </label>
	  <input type="password" name = "password_confirm" placeholder = "Потвердите пароль">
	  <p>У вас уже есть аккаунт?<a href = "auth.php"> - Авторизуйтесь!</a></p>
	  <button type = "submit">Войти</button>
	  <?php 
		  if(isset($_SESSION['message'])){
			  echo '<p class="msg">' . $_SESSION['message'] . '</p>';
		  }
				unset($_SESSION['message']);
	  ?>
    </form>
	</center>
	
	
	
<div class="jumbotron text-center" style="margin-bottom:0">
  <h3> Наши контакты: </h3>
  <ul>
 <li>
Горячая линия: 
<a href="tel:123-456-7890">123-456-7890</a>
</li>
 <li>
 Наша почта: 
<a href="mailto:readlist@gmail.com" > readlist@gmail.com </a>
 </li>
  <li>
<a href="index0.html"> Подпишись на новости нашего сайта</a>
 </li>
</ul>
</div>
  </body>
</html>
