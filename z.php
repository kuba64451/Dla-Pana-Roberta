<?php
	session start();
	if($_POST['t']!="")
	{
		echo $_POST['t'];
	}
	else
	{
		$_SESSION['break']='<p>Brak danych<p>';
		header('Location:index.php');
		exit();
	}