<?php

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$nom=isset($_POST['nom'])?$_POST['nom'] : "";
		$prenom=isset($_POST['prenom'])?$_POST['prenom'] : "";
		$mail=isset($_POST['mail'])?$_POST['mail'] : "";
		$password=isset($_POST['password'])?$_POST['password'] : "";

		$sql="INSERT INTO acheteur VALUES ('$mail', '$password', '$nom', '$prenom')";

		if(mysqli_query($db_handle, $sql))
		{
			echo "ok";
		}

		else
		{
			echo "pb";
		}
	}

	else
	{
		echo "base de donnee introuvable";
	}

?>