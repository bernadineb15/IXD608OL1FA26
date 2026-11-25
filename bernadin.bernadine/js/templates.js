

const listItemTemplate = templater(o=>`
<a href="product_item.php?id=${o.id}">
			<div class="card soft">
				<figure class="figure product display-flex flex-column">
					<div class="flex-stretch">
						<img src="img/${o.thumbnail}" alt="${o.name}">
					</div>
				<figcaption class="flex-none">
					<div>${o.name}</div>
					<div>&dollar;${o.price.toFixed(2)}</div>
				</figcaption>
				</figure>
			</div>
		</a>
`);