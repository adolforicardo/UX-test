<?php 
	if (isset($_SESSION['message'])) {
?>

	
	<script type="text/javascript">
		window.onload = function(){
			M.toast({html: '<?php	echo $_SESSION['message']; ?>'})
		};
	</script>
<?php
	}
?>