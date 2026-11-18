<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "lib/php/functions.php";
include_once "parts/templates.php";




?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop Invitations</title>

	<?php include "parts/meta.php"; ?>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Antic+Didone&family=Luckiest+Guy&family=Satisfy&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Antic+Didone&family=Luckiest+Guy&family=Satisfy&family=Tangerine:wght@400;700&display=swap');
</style>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
			<h2>Shop Invitations</h2>


			<?php

			$result = makeQuery(
				makeConn(), 
				"
				SELECT *
				FROM `products`
				ORDER BY `category`
				LIMIT 12
				"
			);


			echo "<div class='productlist grid gap'>",array_reduce($result, 'productListTemplate', ""), "</div>";




			?>




	</div>
	
</body>
</html>