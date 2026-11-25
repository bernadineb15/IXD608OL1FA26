<?php




function productListTemplate($r,$o) {
	return $r.<<<HTML


		<a href="product_item.php?id=$o->id">
			<div class="card soft">
				<figure class="figure product display-flex flex-column">
					<div class="flex-stretch">
						<img src="img/$o->thumbnail" alt="$o->name">
					</div>
				<figcaption class="flex-none">
					<div>$o->name</div>
					<div>&dollar;$o->price</div>
				</figcaption>
				</figure>
			</div>
		</a>
	HTML;
};



function selectAmount($amount=1,$total=10) {
	$output = "<select name=\"amount\">";
	for($i=1;$i<=$total;$i++) {
		$output .="<option value=\"$i\" ".($i==$amount?"selected":"") . ">$i</option>";
	}
	$output .= "</select>";
	return $output;
}

function cartListTemplate($r,$o){
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount($o->amount,10);
$eventName = htmlspecialchars($o->eventName ?? '', ENT_QUOTES, 'UTF-8');
$eventAddress = htmlspecialchars($o->eventAddress ?? '', ENT_QUOTES, 'UTF-8');
$eventDate = htmlspecialchars($o->eventDate ?? '', ENT_QUOTES, 'UTF-8');
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail" alt="$o->name">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>
		<div class="event-details">
    		<p><strong>Event Name:</strong> $eventName</p>
    		<p><strong>Event Address:</strong> $eventAddress</p>
   			<p><strong>Event Date:</strong> $eventDate</p>
		</div>
		<form action="cart_actions.php?action=delete-cart-item" method="post">
			<input type="hidden" name="id" value="$o->id">
			<input type="submit" class="form-button inline" value="Remove" style="font-size:0.8em">
		</form>
	</div>
	<div class="flex-none">
		<div>&dollar;$totalfixed</div>
		<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
    		<input type="hidden" name="id" value="$o->id">
    		<div class="form-select" style="font-size:0.8em">
        	$selectamount
   		 	</div>
		</form>
		
	</div>
</div>


HTML;
}




function cartTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.06,2,'.','');
	$taxedfixed = number_format($cartprice*1.06,2,'.','');



return <<<HTML
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Subtotal</strong></div>
	<div class="flex-none">&dollar;$pricefixed</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Taxes</strong></div>
	<div class="flex-none">&dollar;$taxfixed</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Total</strong></div>
	<div class="flex-none">&dollar;$taxedfixed</div>
</div>
HTML;
}