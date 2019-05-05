<?php

session_start();

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$id=$_SESSION['idproduit'];
		$loc=$_SESSION['location'];

		$sql="DELETE FROM produit WHERE ID_Produit = $id";

		if(mysqli_query($db_handle, $sql))
		{
			header("Location: $loc");
		}
	}

	else
	{
		echo "base de donnee introuvable";
	}

?>