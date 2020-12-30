<?php
 require_once 'connect.php';
 $books = mysqli_query($connect,'SELECT * FROM `books`');
 $books = mysqli_fetch_all($books);

  foreach($books as $book)// получаем все строки в цикле по одной
									{  ?>
										<tr><td><?= $book[0] ?></td>
									 	<td><?= $book[1] ?></td>
										<td><?= $book[2] ?></td>
										<td><?= $book[3] ?></td>
									 	<td><?= $book[4] ?></td>
									 	<td><?= $book[5] ?></td>
										<td width = "10%"><a href="/php/book.php?id=<?= $book[0] ?>">Просмотр</a></td>
										<td width = "13%"><a style = "color: grey" href="/php/update.php?id=<?= $book[0] ?>">Редактировать</a></td>
										<td><a style = "color: red" href="/php/delete.php?id=<?= $book[0] ?>">Удалить</a></td></tr>
									<?php
									}
									

?>