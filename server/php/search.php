<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Поисковый запрос: <?php echo $_GET['search'];?></title>
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
      <a class="nav-link active" href="../index3.php">Список желаемого</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="account.php">Аккаунт</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#">Корзина</a>
    </li>
  </ul>
   
</nav>
<center style="margin:50px 0 50px 0"><h2><strong>Поисковой запрос: <?php echo $_GET['search'];?></strong></h2></center>
<div class="container">
  
  <?php
  require_once 'connect.php';
  
  $search_get = $_GET['search'];
  
  $sql = "SELECT * FROM `books` WHERE `Title` LIKE '%$search_get%' or `Author` LIKE '%$search_get%' or `Genre` LIKE '%$search_get%' or `Amount` LIKE '%$search_get%'";
  
  $select = mysqli_query($connect, $sql);
  
  while ($select_while = mysqli_fetch_assoc($select)){
	  ?>
	  <br>
	  <h4><li><a style = "color: grey" href ="/php/book.php?id=<?= $select_while['BookID'] ?>"> <?php echo $select_while['Author']; ?> - <?php echo $select_while['Title']; ?> ( <?php echo $select_while['Genre']; ?> ) В количестве:  <?php echo $select_while['Amount']; ?> шт. </a></li></h4>
	  
	  <?php
  }
  
  ?>
  
  
  
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