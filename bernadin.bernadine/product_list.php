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


	<script src="js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>


	<style>
@import url('https://fonts.googleapis.com/css2?family=Antic+Didone&family=Luckiest+Guy&family=Satisfy&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Antic+Didone&family=Luckiest+Guy&family=Satisfy&family=Tangerine:wght@400;700&display=swap');
</style>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
			<h2>Shop Invitations</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Invitations">
				</form>
			</div>
			<div class="form-control">
				<div class="card dark">
				<div class="display-flex">
				<div class="flex-stretch display-flex">
					<div class="flex-none">
						<button data-filter="category" data-value="" type="button" class="form-button">All</button>
					</div>
					<div class="flex-none">
						<button data-filter="category" data-value="birthday" type="button" class="form-button">Birthday</button>
					</div>
					<div class="flex-none">
						<button data-filter="category" data-value="baby shower" type="button" class="form-button">Baby Shower</button>
					</div>
					<div class="flex-none">
						<button data-filter="category" data-value="wedding" type="button" class="form-button">Wedding</button>
					</div>
				</div>

			<div class="flex-none">
				<div class="form-select">
					<select class="js-sort">
                     <option value="1">Newest</option>
                     <option value="2">Oldest</option>
                    </select>
                </div>
                </div>
              </div>
          </div>
		</div>



			<div class='productlist gap'></div>




	</div>
	
</body>
</html>