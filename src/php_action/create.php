<?php 
//Sessao
session_start();

//Conexao
require_once 'db_connect.php';
//Clear
function clear($input){
	global $connect;
	//sql
	$var = mysqli_escape_string($connect,$input);
	//xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-send'])){
	$name = clear($_POST['name']);
	$email = clear($_POST['email']);
	$message = clear($_POST['message']);

	$sql="INSERT INTO mails (name_user, email, message_content)
	VALUES ('$name', '$email','$message');";

	if (mysqli_query($connect, $sql)) {
		$_SESSION['message']="Sent with success!";
		header('Location: ../index.php');
	}else{
		var_dump($name, $email, $message);
		$_SESSION['message']="Error when sending";
		header('Location: ./add.php');
	}

} 

?>

