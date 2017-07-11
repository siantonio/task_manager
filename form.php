<!DOCTYPE html> 
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Task Manager</title>
		<link rel="stylesheet" href="main.css">
		<script type="text/javascript" src="main.js"></script>
		<script type="text/javascript" src=""></script>
		<noscript><p>Ваш браузер не поддерживает скрипты!</p></noscript>
	</head>
	<body>
		<div class="form-output">
			<table >
					<tr>
						<td>Номер</td>
						<td>Название</td>
						<td>Приоритет</td>
						<td>Состояние</td>
						<td>Крайний срок</td>		
					</tr>
			</table><hr>
				<?php
					require_once 'connection.php';
					function printResult($result_set)
					{
						while( ($row=$result_set->fetch_assoc() ) )
					{
					echo "<tr><td>" .$row["ID"]. " "."</td></tr>".
							"<td>" .$row["Title"]. " ". "</td>".
							"<td>" .$row["Priority"]. " ". "</td>".
							"<td>" .$row["State"]. " " ."</td>".
							"<td>" .$row["Deadline"]. " "."</td></tr><br><br>";

					}
						echo "<hr>";
						echo "Количество записей равно = ". $result_set->num_rows . "<br />";
    				}	
    				$result_set = $mysqli->query("SELECT * FROM task");
					printResult ($result_set);
					$mysqli->close();
					?>
		</div>
		<div class="form-add">
				<form action="add.php" method="post" accept-charset="UTF-8" autocomplete="on">
					<br><p align="center"  class="pitted">Добавление</p><hr>
					<br><p align="center" class="pitted">Название<br>
					<input type="text" name="title" maxlength="50" 
					pattern="^[\sa-zA-Zа-яА-Я]+$" required placeholder="Введите строку"></p>
					<br><p align="center" class="pitted" > Приоритет <br> 
					<select size="1" name="priority" >
						<option value="Высокий">Высокий</option>
						<option value="Средний">Средний</option>
						<option value="Низкий">Низкий</option>
					</select></p>
					<br><p align="center" class="pitted"> Состояние <br> 
					<select size="1"  name="state"> 
						<option value="Новое" > Новое </option>
						<option disabled value="Актив" >Актив</option>
						<option disabled value="Разрешено">Разрешено</option>
						<option disabled value="Закрыто">Закрыто</option>
					</select></p>
					<br><p align="center" class="pitted">Крайний срок<br>
					<input type="date" id="data" name="deadline" required></p>
					<br><p align="center" class="pitted"><input type="submit" value="Добавить">
					<input type="reset" value="Очистить"></p>
				</form>
		</div>
		<div class="form-edit">
			<form action="edit.php" method="post" accept-charset="UTF-8" autocomplete="on">
				<br><p align="center" class="pitted">Редактирование</p><hr>
				<br><p align="center" class="pitted">Номер<br>
				<input type="text" name="id" required placeholder="Введите число" pattern="^[ 0-9]+$"></p>
				<br><p align="center" class="pitted">Название<br>
				<input type="text" name="title" maxlength="50" required placeholder="Введите строку" 
				pattern="^[\sa-zA-Zа-яА-Я]+$"></p>
				<br><p align="center" class="pitted">Приоритет<br> 
				<select size="1" name="priority">
					<option value="Высокий">Высокий</option>
					<option value="Средний">Средний</option>
					<option value="Низкий">Низкий</option>
				</select></p>
				</select></p>
				<br><p align="center" class="pitted">Состояние<br> 
				<select size="1"  name="state"> 
					<option value="Новое" >Новое</option>
					<option value="Актив" >Актив</option>
					<option value="Разрешено">Разрешено</option>
					<option value="Закрыто">Закрыто</option>
				</select>
					<br><br><p align="center" class="pitted"> Крайний срок <br>
					<input type="date" name="deadline" required></p>
				<br><p align="center" class="pitted"><input type="submit" value="Изменить">
				<input type="reset" value="Очистить"></p>
			</form>
		</div>
		<div class="form-delete">
			<form action="delete.php" method="post" accept-charset="UTF-8" autocomplete="on">
					<br><p align="center" class="pitted">Удаление</p><hr>
					<br><p align="center" class="pitted"> Номер задачи  <br>
					<input type="text" name="id" required placeholder="Введите число" pattern="^[ 0-9]+$"></p>
					<br><p align="center" class="pitted"><input type="submit"  value="Удалить"  name="delete">
					<input type="reset" value="Очистить"></p>
				</form>
		</div>
		<footer>
		</footer>
	</body>
</html>