<?php include "header.php";?>

				<br>
				<br>
				<h2>Авторизация</h2>
				
				<form id="auth_form">
					<table class="contacts_2">
						<tr>
							<th>
								<label for="auth_login">Имя</label>
							</th>
							<th colspan="2" >
								<input id="auth_login" type="text" placeholder="Введите логин" required>
							</th>
						</tr>
						<tr>
							<th>
								<label for="auth_password">Пароль</label>
							</th>
							<th colspan="2">
								<input id="auth_password" type="password" placeholder="Введите пароль" required>
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