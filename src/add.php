<?php
	//Header
 	 include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">New Mail</h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="name" id="name">
				<label for="name">Name</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
				<textarea name="message" id="sobrenome" class="materialize-textarea"></textarea>
				<label for="message">Message</label>
			</div>

			<button type="submit" name="btn-send" class="btn">Send</button>
			<a href="index.php" class="btn green">Mailing list</a>
		</form>
		

	</div>

<?php
	//Footer
 	include_once 'includes/footer.php';
?>