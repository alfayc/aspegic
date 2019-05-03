<?php

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	$mail=isset($_POST['mail'])?$_POST['mail'] : "";
	$password=isset($_POST['password'])?$_POST['password'] : "";

//	$id = $sql="SELECT mail FROM vendeur WHERE mail = $mail";



$id = $database->query('SELECT mail FROM vendeur WHERE mail = $mail');


	if (empty($id)) {
		echo "id vide";
	}
	else
	{
		echo "id pas vide";
		echo $id; 
	}
	

?>