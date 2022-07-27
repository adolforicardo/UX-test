<?php 
//Sessao
session_start();

//Conexao
require_once 'db_connect.php';

if(isset($_POST['btn-delete'])){

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql="DELETE FROM mails WHERE id = '$id'";

	if (mysqli_query($connect, $sql)) {
		$_SESSION['message']="Successfully Deleted!";
		header('Location: ../index.php');
	}else{
		$_SESSION['message']="Error when deleting";
		header('Location: ../index.php');
	}

} 
?>