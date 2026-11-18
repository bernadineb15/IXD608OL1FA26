<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN(4,7,10)");

//$cart_product = cartItemById($_GET['id']);

$cart_items = getCartItems();

//print_p($product);


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>

	<style>
@import url('https://fonts.googleapis.com/css2?family=Antic+Didone&family=Luckiest+Guy&family=Satisfy&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Antic+Didone&family=Luckiest+Guy&family=Satisfy&family=Tangerine:wght@400;700&display=swap');
</style>
	
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h1>Your Shopping Cart</h1>

			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<div class="card soft">
						<?= array_reduce($cart_items,'cartListTemplate') ?>
					</div>
				</div>

				<div class="col-xs-12 col-md-6">
					<div class="card soft flat">
						<?= cartTotals() ?>
					</div>
				</div>
				</div>
            		<a href="product_list.php">Continue Shopping</a>

            		<a href="checkout.php">Proceed to Checkout</a>
           		 </div>

			</div>
		</div>
	
</body>
</html>