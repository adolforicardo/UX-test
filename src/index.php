<?php
	//Conection
	include_once 'php_action/db_connect.php';
	//Header
    include_once 'includes/header.php';
    //Message
 	include_once 'includes/message.php';
?>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Mails</h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Name:</th>
					<th>Email:</th>
					<th>Message:</th>

				</tr>
			</thead>

			<tbody>
				<?php 
					$sql = "SELECT * FROM mails";
					$resultado = mysqli_query($connect, $sql);

					if(mysqli_num_rows($resultado) > 0){

					while($data = mysqli_fetch_array($resultado)){

				 ?>
					<tr>
						<td><?php echo $data['name_user']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td><?php echo $data['message_content']; ?></td>

						<td><a href="#modal<?php echo $data['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

						<div id="modal<?php echo $data['id']; ?>" class="modal">
							<div class="modal-content">
								<h4>Ups!</h4>
								<p>Are you sure you want to delete this email?</p>
							</div>
							<div class="modal-footer">
								
								<form action="php_action/delete.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
									<button type="submit" name="btn-delete" class="btn red">Yes, I want to delete</button>
									<a href="" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
								</form>
							</div>
						</div>

					</tr>
				<?php } 
				}else{?>
					<tr>
						<td>-<td>
						<td>-<td>
						<td>-<td>
						<td>-<td>
					</tr>
				<?php
				}

				?>

			</tbody>
		</table>
		<br>
		<a href="add.php" class="btn">Send new Mail</a>

	</div>

<?php
	//Footer
 	include_once 'includes/footer.php';
?>