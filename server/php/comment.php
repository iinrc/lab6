<?php
	$mysqli = new mysqli('localhost', 'root', '', 'whitelist');
	$row_id = $_GET['id'];
	$result = $mysqli->query("SELECT * FROM `comments` WHERE `book_id` = '$row_id' ", );
	$row = $result->fetch_all()
?>