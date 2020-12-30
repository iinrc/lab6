<?php
  require_once 'connect.php';
  $book_id = $_GET['id'];
  $book = mysqli_query($connect, "SELECT * FROM `books` WHERE `BookID` = '$book_id'");
  $book = mysqli_fetch_assoc($book);
  
  $comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `book_id` = '$book_id'");
  $comments = mysqli_fetch_all($comments);
?>

<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Просмотр</title>
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
  <a class="navbar-brand" href="../account.php"><h3>R & L</h3></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../index.html">Основная</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../index1.html">Жанры</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../index2.html">Карта</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="../index3.php">Список желаемого</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="../profile.php">Аккаунт</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#">Корзина</a>
    </li>
  </ul>
   
</nav>
	<center style="margin:30px 0 30px 0"><h1><strong>Просмотр товара</strong></h1></center>
	<hr>
		<center><h6>Автор: <?= $book['Author'] ?></h6> 
		<h6>Название: <?= $book['Title'] ?></h6>
		<h6>Жанр: <?= $book['Genre'] ?></h6>
		<h6>Количество: <?= $book['Amount'] ?></h6>
		<h6>Дата: <?= $book['Date'] ?></h6></center>
		
	<hr>

    <center><h4>Добавить пожелания к будущей покупке:</h4><br></center>
   <center> <form action="create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $book['BookID'] ?>">
        <textarea rows="5" cols="100" name="body" placeholder = "Хочу, чтобы книги стоили не так дорого . . ."></textarea> <br><br>
        <button class="btn btn-success" type="submit">Добавить</button>
    </form> </center>

    <hr>

    <h4>Пожелания:</h4>
	<br>
	<form method = "get" class = "form-inline" action = "search_comment.php">
      <input class="form-control mr-sm-2" type = "search" name = "search" placeholder = "Поиск по списку...">
      <input class="btn btn-success" type = "submit" >
    </form>
	<br>
    <ul>
        <?php
            foreach ($comments as $comment) {
            ?>
                <li><?= $comment[2] ?></li>
            <?php
            }
        ?>
    </ul>
</body>
</html>