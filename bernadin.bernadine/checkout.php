<?php


include_once "lib/php/functions.php"



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>

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
			<h2>Checkout</h2>

			<p>Please enter your information to complete your order.</p>
			<form class="form">
			<h3>Address</h3>
			<div class="form-control">
				<label for="address-street" class = "form-label">Street</label>
				<input id="address-street" type="text" placeholder="Street"class="form-input">
			</div>
			<div class="form-control">
				<div class="grid gap">
					<div class="col-6">
				<label for= "address-city" class = "form-label">City</label>
				<input type="address-city" type="text" placeholder="City"class="form-input">
			</div>
			<div class="col-6">
				<label for="address-state" class= "form-label">State</label>
				<input type="address-state" type="text" placeholder="State"class="form-input">
			</div>
		</div>
	</div>
			<div class="form-control">
				<div class="grid gap">
					<div class="col-6">
				<label for="address-zip"class= "form-label">Zip Code</label>
				<input type="address-zip" type="text" placeholder="Zipcode"class="form-input">
			</div>
			<div class="col-6">
				<label for="address-country" class= "form-label">Country</label>
				<input type="address-country" type="text"placeholder="Country"class="form-input">
			</div>
		</div>
	</div>

				<h3>Payment</h3>
			<form>
			<div class="form-control">
				<label for="payment-name" class = "form-label">Full Name</label>
				<input id="payment-name" type="text" placeholder="Name"class="form-input">
			</div>
			<div class="form-control">
				<label for= "payment-number" class = "form-label">Card Number</label>
				<input type="payment-numbe" type="text" placeholder="####-####-####-####"class="form-input">
			</div>
			<div class="form-control">
				<div class="grid gap">	
					<div class="col-6">
				<label for="payment-exp" class= "form-label">Expiration</label>
				<input type="payment-exp" type="text" placeholder="MM/YYYY"class="form-input">
			</div>
				<div class="col-6">
				<label for="payment-cvv"class= "form-label">CVV</label>
				<input type="payment-cvv" type="text" placeholder="CVV"class="form-input">
			</div>
		</div>
	</div>
			<div class="form-control">
				<label for="payment-zip" class= "form-label">Zip Code</label>
				<input type="payment-zip" type="text"placeholder="Zip Code"class="form-input">
			</div>
		</div>
	</div>
</form>

		
			<div class="col-7">
            <a href="confirmation.php" class="form-button">Place Order</a>
        	</div>

             <a href="cart.php">Return to Cart</a>


			
		</div>
	</div>
	
</body>
</html>