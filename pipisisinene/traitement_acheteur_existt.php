<?php

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
		{
			$mail = isset($_POST['mail'])?$_POST['mail'] : "";
			$password = isset($_POST['password'])?$_POST['password'] : "";

			$connexion = false;
		
			$sql = "SELECT password FROM acheteur WHERE mail = '$mail'";
			$result = mysqli_query($db_handle, $sql);

			if($result == $password)
			{
				echo "ok";
			}

			else
			{
				echo "non";
			}
		}

	else
	{
		echo "base de donnee introuvable";
	}

?>