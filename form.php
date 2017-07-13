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
					<?php
						require_once 'connection.php';
					
						$result_set = $mysqli->query("SELECT * FROM task");
						printResult ($result_set);
						echo "Количество записей равно = ". $result_set->num_rows . "<br />";

						function printResult($result_set)
						{
							while( ($row=$result_set->fetch_assoc() ) )
							{
								echo "<tr><td>". $row["ID"]."</td>". 
								 "<td>".$row["Title"]."</td>". 
								 "<td>".$row["Priority"]."</td>". 
								 "<td>".$row["State"]."</td>".
								 "<td>".$row["Deadline"]."</td></tr>";

							}
    					}	
						$mysqli->close();
					?>	
					</tr>
			</table>
		</div>
		<div id="wrapper">
			<div class="form-add">
				<form action="add.php" method="post" accept-charset="UTF-8" autocomplete="off">
					<br><p class="pitted">Добавление</p><hr>
					<div class="pitted">
						<div class="number">
							<br>Название<br>
							<input align="center" type="text" name="title" title="Введите название задачи" maxlength="50" 
							pattern="^[\sa-zA-Zа-яА-Я]+$" required placeholder="Введите строку">
						</div><br>
						<div class="number"><br>Приоритет<br> 
							<select size="2" name="priority" title="Выберите приоритет из списка" multiple>
								<option value="Высокий">Высокий</option>
								<option value="Средний">Средний</option>
								<option value="Низкий">Низкий</option>
							</select>
						</div>
						<div class="number">Состояние<br>
							<select size="2"  name="state" title="Выберите состояние из списка" multiple> 
								<option value="Новое" > Новое </option>
								<option disabled value="Актив" >Актив</option>
								<option disabled value="Разрешено">Разрешено</option>
								<option disabled value="Закрыто">Закрыто</option>
							</select>
						</div>
					</div>
					<br><p class="pitted">Крайний срок<br>
					<input type="date" id="data" name="deadline" title="Укажите дату" required></p>
					<br><p class="pitted"><input type="submit" value="Добавить">
					<input type="reset" value="Очистить"></p>
				</form>
			</div>
			<div class="form-edit">
				<form action="edit.php" method="post" accept-charset="UTF-8" autocomplete="off">
					<br><p class="pitted">Редактирование</p><hr>
					<div class="pitted">
						<div class="number"><br>
							Номер задачи<br>
							<input type="text" name="id" title="Введите числовой номер" 
							required placeholder="Введите число" 
							pattern="^[ 0-9]+$">
						</div>
						<div class="number">
							Название<br>
							<input type="text" name="title" title="Введите название задачи"
							maxlength="50" required 
							placeholder="Введите строку" 
							pattern="^[\sa-zA-Zа-яА-Я]+$">
						</div>
						&nbsp;&nbsp;<div class="number">
							<br>Приоритет<br> 
							<select size="2" title="Выберите приоритет из списка" name="priority" multiple>
								<option value="Высокий">Высокий</option>
								<option value="Средний">Средний</option>
								<option value="Низкий">Низкий</option>
							</select>
						</div>
						<div class="number">
							<br>Состояние<br> 
							<select size="2"  title="Выберите состояние из списка" name="state" multiple> 
								<option value="Новое" >Новое</option>
								<option value="Актив" >Актив</option>
								<option value="Разрешено">Разрешено</option>
								<option value="Закрыто">Закрыто</option>
							</select>
						</div>
					</div>
						<br><p align="center" class="pitted"> Крайний срок <br>
						<input type="date" name="deadline" title="Укажите дату"  required></p>
					<br><p align="center" class="pitted"><input type="submit" value="Изменить">
					<input type="reset" value="Очистить"></p>
				</form>
			</div>
			<div class="form-delete">
				<form action="delete.php" method="post" accept-charset="UTF-8"  autocomplete="off">
					<br><p class="pitted">Удаление</p><hr>
					<br><p class="pitted"> Номер задачи<br>
					<input type="text" name="id" required placeholder="Введите число"
					 title="Введите числовой номер" pattern="^[ 0-9]+$"></p>
					<br><p  class="pitted"><input type="submit"  value="Удалить"  name="delete">
					<input type="reset" value="Очистить"></p>
				</form>
			</div>
		</div>
		<footer><p class="pitted">Task Manager &copy;2017 </p></footer>
	</body>
</html>
