<?php
require_once 'connect.php';
$book_id = $_POST['id'];
$body = $_POST['body'];

$create = mysqli_query($connect, "INSERT INTO `comments` (`id`, `book_id`, `body`) VALUES (NULL, '$book_id', '$body')");
header('Location: /php/book.php?id='.urlencode($book_id));
?>