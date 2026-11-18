<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "lib/php/functions.php";
resetCart();


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation</title>

	<?php include "parts/meta.php"; ?>

	<style>
@import url('https://fonts.googleapis.com/css2?family=Antic+Didone&family=Luckiest+Guy&family=Satisfy&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Antic+Didone&family=Luckiest+Guy&family=Satisfy&family=Tangerine:wght@400;700&display=swap');
</style>
	
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	<main>
	<div class="container">
		<div class="card soft">
			<h1>Thank You for Your Order!</h1>

            <p>Your order has been received.</p>

            <p>Thank you for choosing Dearly Designed
            for your special occasion.</p>

            <h2>Order Confirmation</h2>

            <p><a href="product_list.php">Continue Shopping</a></p>

		</div>
	</div>
	
</body>
</html>