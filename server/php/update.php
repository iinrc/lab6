<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Редактирование списка желаний</title>
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
  
<center style="margin:30px 0 30px 0"><h1><strong>Редактирование параметров товара</strong></h1></center>
<div class="container">
  <div class="row">
    <div class="col-sm-12">

      <table class="favtable" width="100%">
        <tr>
		  
<?php
  require_once 'connect.php';
  $book_id = $_GET['id'];
  $book = mysqli_query($connect, "SELECT * FROM `books` WHERE `BookID` = '$book_id'");
  $book = mysqli_fetch_assoc($book);
   
?>
		  
        </tr>
      </table> 
    
      <form action="/php/popup_update.php" method="post" class="form-container">
		
		<input type = "hidden" name = 'BookID' value = "<?= $book['BookID'] ?>">

           <label for="Author"><b>Автор</b></label>
           <input type="text" pattern="[а-яА-ЯёЁ]{2,64} [а-яА-ЯёЁ]{2,64}" placeholder="Введите имя и фамилию автора" value = "<?= $book['Author'] ?>" id="Author" name="Author" required>

           <label for="Title"><b>Название</b></label>
           <input type="text" pattern="^[А-Яа-яЁё\s]+$" placeholder="Введите название произведения" value = "<?= $book['Title'] ?>" name="Title" required>

           <label for="Genre"><b>Жанр</b></label>
           <input type="text" pattern="^[А-Яа-яЁё\s]+$" placeholder="Введите жанр произведения" value = "<?= $book['Genre'] ?>" name="Genre"  required>
 
           <label for="Amount"><b>Количество</b></label>
           <input type="number" min="1" max="10" placeholder="Введите количество книг" value = "<?= $book['Amount'] ?>" name="Amount" required>

           <label for="Date"><b>Дата</b></label>
           <input type="text" placeholder="Введите дату" id="Date"  value = "<?= $book['Date'] ?>" name="Date" required>
        
        <button type="submit" class="btn">Отправить</button>
        <button type="reset" class="btn cancel" onclick="closeForm()">Закрыть</button>
    </div>
    </div>
  </div>
</div>
  
  </body>
