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

		$sql="INSERT INTO acheteur (mail, password, nom, prenom) VALUES ('$mail', '$password', '$nom', '$prenom')";

		if(mysqli_query($db_handle, $sql))
		{
			session_start();
			$_SESSION['nom']=$nom;
			$_SESSION['type']="acheteur";
			header("Location: index.php");
		}
	}

	else
	{
		echo "base de donnee introuvable";
	}

?>