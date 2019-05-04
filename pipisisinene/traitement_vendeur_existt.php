<?php

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$mail = isset($_POST['mail'])?$_POST['mail'] : "";
		$password = isset($_POST['password'])?$_POST['password'] : "";
		
		$sql = "SELECT password FROM vendeur WHERE mail = '$mail'";
		$result = mysqli_query($db_handle, $sql);
		$data = mysqli_fetch_assoc($result);

			if($data['password'] == $password)
			{
				$sql = "SELECT nom FROM vendeur WHERE mail = '$mail'";
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				session_start();
				$_SESSION['nom']=$data['nom'];
				header("Location: index.php");
			}

			else
			{
				session_start();
				$_SESSION['co']=false;
				header("Location: form_vendeur_existt.php");
			}
	}

	else
	{
		echo "base de donnee introuvable";
	}

?>