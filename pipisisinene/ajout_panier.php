<?php

session_start();

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{

		$sql="INSERT INTO panier VALUES ";

		if(mysqli_query($db_handle, $sql))
		{
			header("Location: $_SESSION['location']");
		}
	}

	else
	{
		echo "base de donnee introuvable";
	}

?>