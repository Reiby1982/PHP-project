<?php include "header.php";?>

				<br>
				<br>
				<h2>Регистрация</h2>
				
				<form action="#" method="post" id="reg_form">
					<table class="contacts_2">
						<tr>
							<th>
								<label for="text_field">Имя</label>
							</th>
							<th colspan="2" >
								<input id="name" type="text" placeholder="name" required>
							</th>
						</tr>
						<tr>
							<th>
								<label for="text_field">Имя</label>
							</th>
							<th colspan="2" >
								<input id="login" type="text" placeholder="login" required>
							</th>
						</tr>
						<tr>
							<th>
								<label for="text_field">Имя</label>
							</th>
							<th colspan="2" >
								<input id="email" type="text" placeholder="email" required>
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
<?php include "footer.php";?>