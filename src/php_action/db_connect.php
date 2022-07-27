<?php 
	//Conexao com base de dados

	$servername = "mysql";
	$username = "homestead";
	$password = "secret";
	$db_name = "homestead";

	$connect = mysqli_connect($servername, $username, $password, $db_name);
	mysqli_set_charset($connect, "utf8");
	if (mysqli_connect_error()) {
		echo "Connection Error: ".mysqli_connect_error();
	}
 ?>