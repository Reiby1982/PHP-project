<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Contacts</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="wraper">
			<div class="content">
				<!-- Шапка -->
		        <div class="bar">
		        	<p>Once surf always a Surfer</p>
		        </div>
		        <div class="logo">
		        	<img src="pictures/logo.png" alt="logo">
		        </div>
				<!-- Меню -->
				<div class="menu">
					<ul>
						<li><a href="index.php">MAIN</a></li>
						<li><a href="news.php">NEWS</a></li>
						<li><a href="photos.php">PHOTOS</a></li>
						<li><a href="contacts.php">CONTACTS</a></li>		
						<li><a class="active" href="avtoriz.php">AUTORIZATION</a></li>

					</ul>
				</div>
				<br>
				<br>
				<h2>Авторизация</h2>
				
				<form action="#" method="post">
					<table class="contacts_2">
						<tr>
							<th>
								<label for="text_field">Имя</label>
							</th>
							<th colspan="2" >
								<input id="text_field" type="text" placeholder="Name" required>
							</th>
						</tr>
						<tr>
							<th>
								<label for="password">Пароль</label>
							</th>
							<th colspan="2">
								<input id="password" type="password" placeholder="password" required>
							</th>
						
						<tr>
							<th colspan="2">
								<input type="submit" value="Отправить">
							</th>
							<th>
								<input type="reset" value="Сбросить">
							</th>
						</tr>
					</table>
				</form>
				<br>
		</div>
		<div  class="footer">
		<p>Don't waste your time!</p>
		</div>
		</div>
	</body>
</html>