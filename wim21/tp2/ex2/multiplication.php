<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body container>
		<?php
	 extract($_GET);
		echo "<h1>Table de $table</h1>";
			for($i=0;$i<=10;$i++){
				echo "$i x $table = " .($table*$i);
				echo"<br>";
			}
		
		?>
		<!-- À compléter -->

		<form  method="GET">
			<input type=text name="table" placeholder="table">
			<button  class="btn" type="submit">ENVOYER</button>
		</form>
	</body>
</html>
