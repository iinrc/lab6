<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>READ AND LISTEN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="/js/popup.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/css.css">
  <link rel="stylesheet" type="text/css" href="/css/popup.css">
  <script src="/js/jquery.maskedinput.min.js"></script>
  <script src="/js/jquery.js"></script>
  <script src="/js/datemask.js"></script>
</head>

<body>
<div>
 <center><img src="photos/logoza.ru.png" class="img-fluid" alt="New York"></center>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="account.php"><h3>R & L</h3></a>

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
      <a class="nav-link active" href="index3.php">Список желаемого</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="profile.php">Аккаунт</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#">Корзина</a>
    </li>
	
    <form method = "get" class = "form-inline" action = "php/search.php">
      <input class="form-control mr-sm-2" type = "search" name = "search" placeholder = "Поиск...">
      <input class="btn btn-success" type = "submit" > Search </input>
    </form>
  </ul>
   
</nav>
<center style="margin:30px 0 30px 0"><h1><strong>СПИСОК ЖЕЛАЕМОГО</strong></h1></center>
<div class="container">
  <div class="row">
    <div class="col-sm-12">


      <table class="favtable" width="107%">
        <tr>
		  <th width = "3%">ID</th>
          <th width = "20%">Автор</th>
          <th width = "20%">Название</th>
          <th width = "15%">Жанр</th>
          <th width = "8%">Кол-во</th>
          <th width = "6%">Дата</th>
        <?php
            include_once ('php/bdbook.php');
          ?>
		  </tr>
      </table> 

    <div class="form-popup" id="myForm">
      <form action="/php/popupsend.php" method="post" class="form-container">
        <center><h1>Добавить книгу</h1></center>
		   
           <label for="Author"><b>Автор</b></label>
           <input type="text" pattern="[а-яА-ЯёЁ]{2,64} [а-яА-ЯёЁ]{2,64}" placeholder="Введите имя и фамилию автора" name="Author" required>

           <label for="Title"><b>Название</b></label>
           <input type="text" pattern="^[А-Яа-яЁё\s]+$" placeholder="Введите название произведения" name="Title" required>

           <label for="Genre"><b>Жанр</b></label>
           <input type="text" pattern="^[А-Яа-яЁё\s]+$" placeholder="Введите жанр произведения" name="Genre" required>

           <label for="Amount"><b>Количество</b></label>
           <input type="number" min="1" max="10" placeholder="Введите количество книг" name="Amount" required>

           <label for="Date"><b>Дата</b></label>
           <input type="text" placeholder="Введите дату" id="date" name="Date" required>
        
        <button type="submit" class="btn">Отправить</button>
        <button type="reset" class="btn cancel" onclick="closeForm()">Закрыть</button>
    </form>
    </div>

      <button class="open-button" onclick="openForm()">Добавить книгу</button>
    </div>
  </div>
</div>

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