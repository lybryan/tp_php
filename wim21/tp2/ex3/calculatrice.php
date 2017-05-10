<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title></title>
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body container>
		<h3 class="_bb1">Calculatrice</h3>
		<form  class="_text-center" method="POST">
			<!-- opérande 1 -->

			<input placeholder="un nombre" type="text" name="op1" />

			<!-- opération -->

			<select name="operation">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="x">x</option>
				<option value="/">/</option>
			</select>

			<!-- opérande 2 -->

			<input placeholder="un nombre" type="text" name="op2" />

			<!-- bouton -->

			<button type="submit" name="soumis"> Calculer</button>

		</div>
		<?php
		extract($_POST);
		if($operation == "+")
			echo ($op1 +  $op2);
		if($operation == "-")
			echo ($op1 - $op2);
		if($operation == "x")
			echo ($op1 * $op2);
		if($operation == "/")
			if($op2 == "0")
				echo "Erreur. Division par 0.";
		else
			echo ($op1 / $op2);
		?>
	</body>
</html>
