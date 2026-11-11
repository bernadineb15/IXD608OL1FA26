<?php




function productListTemplate($r,$o) {
	return $r.<<<HTML


		<a class="col-8" href="product_item.php?id=$o->id">
			<div class="card soft">
			<figure class="figure product display-flex flex-column">
					<div class="flex-stretch">
						<img src="img/$o->thumbnail" alt= "$o->name">
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



function cartListTemplate($r,$o){
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thunbs">
		<img src="img/$o->thumbnail" alt= "$o->name">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>
		<div>Delete</div>
	</div>
	<div class="flex-none">
		&dollar;$o->price
	</div>
</div>


HTML;
}