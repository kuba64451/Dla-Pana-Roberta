<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<html>
	<head>
		<meta charset="utf-8">
		<title>Formularz nr 01</title>
	<head>
	<style>
		label
		{
			display:block;
			margin:20px;
		}
		span
		{
			color:red;
		}
	</style>
	<body>
		<form action="z.php" method="post"
			<label>
				<input type="text" name="t">
			</label>
			<label><input type="submit" value="Wyślij" name="send"></label>
		</form>
		<?php
			if(isset($_SESSION['brak']))
				echo $_SESSION['brak'];
		?>
	</body>
	</html>