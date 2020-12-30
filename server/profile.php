<?php 
	session_start();
	if(!isset($_SESSION['user'])) {
		header ('Location: auth.php');
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
    <title>READ AND LISTEN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style> 

.logout {
	color: #c24848; 
}

form {
	height: 50vh;
	padding: 10px;
	display: flex;
	flex-direction: column;
	width: 400px;
	justify-content: center;
}
input {
	margin: 10px 0;
	padding: 10px;
	border: unset;
	border-bottom: 2px solid #e3e3e3;
	outline: none;
}
button {
	padding: 10px;
	backgroung: #e3e3e3;
	border: unset;
	cursor: pointer;
}
a {
	color: #7c9ab7;
	text-decoration: none;
}

.msg {
	border: 2px solid #ffa908;
	border-radius: 3px;
	padding: 10px;
	text-area: center;
}
</style>
  </head>

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
	<h3>Профиль</h3>
	<hr>
	<form>
      <center><img src = "<?= $_SESSION['user']['avatar']?>" width = "300" alt = ""></center>
	  <h2><?= $_SESSION['user']['full_name']?></h2>
	  <a href = "#"><?= $_SESSION['user']['email']?></a>
	  <a href = "vendor/logout.php" class = "logout">Выход</a><br>
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
