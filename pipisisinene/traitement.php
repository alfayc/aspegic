<?php

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$mail=isset($_POST['mail'])?$_POST['mail'] : "";
		$password=isset($_POST['password'])?$_POST['password'] : "";
		$nom=isset($_POST['nom'])?$_POST['nom'] : "";
		$prenom=isset($_POST['prenom'])?$_POST['prenom'] : "";
		$photo=isset($_POST['photo'])?$_POST['photo'] : "";
		$wallpaper=isset($_POST['wallpaper'])?$_POST['wallpaper'] : "";

		$sql="INSERT INTO vendeur VALUES ('$mail', '$password', '$nom', '$prenom', '$photo', '$wallpaper')";

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