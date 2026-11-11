
<?php

include_once "lib/php/functions.php";

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    die("Invalid product ID.");
}

$conn = makeConn();

$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$product = $result->fetch_object();

$stmt->close();
$conn->close();

if (!$product) {
    die("Product not found.");
}

$images = explode(",", $product->images);

$image_elements = array_reduce($images, function($r, $o) {
    $image = htmlspecialchars(trim($o));

    return $r . "<img src='img/$image' alt='Product image'>";
}, "");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($product->name) ?> | Dearly Designed</title>

    <?php include "parts/meta.php"; ?>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Antic+Didone&family=Luckiest+Guy&family=Satisfy&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Antic+Didone&family=Luckiest+Guy&family=Satisfy&family=Tangerine:wght@400;700&display=swap');
</style>

    <script src="js/product_thumbs.js"></script>

</head>

<body>

    <?php include "parts/navbar.php"; ?>

    <div class="container">

        <div class="grid gap">

            <div class="col-xs-12 col-md-7">

                <div class="images-main">

                    <div>
                        <img
                            src="img/<?= htmlspecialchars($product->thumbnail) ?>"
                            alt="<?= htmlspecialchars($product->name) ?>"
                        >
                    </div>

                </div>

                <div class="images-thumbs">
                    <?= $image_elements ?>
                </div>

            </div>

            <div class="col-7">

                <div class="card soft flat">

                    <div class="card-section">

                        <h2 class="product_title">
                            <?= htmlspecialchars($product->name) ?>
                        </h2>

                        <div class="product-price">
                            &dollar;<?= number_format($product->price, 2) ?>
                        </div>

                        <p>
                            <?= htmlspecialchars($product->description) ?>
                        </p>

                    </div>
                    <div class="card-section">

                        <form action="cart.php" method="GET">

                            <input
                                type="hidden"
                                name="id"
                                value="<?= $product->id ?>"
                            >

                            <label for="product-amount" class="form-label">
                                Quantity
                            </label>

                            <select
                                name="quantity"
                                id="product-amount"
                                class="form-select"
                            >
                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                    <option value="<?= $i ?>">
                                        <?= $i ?>
                                    </option>
                                <?php endfor; ?>
                            </select>

                            <button type="submit" class="form-button">
                                Add to Cart
                            </button>

                        </form>

                    </div>

                </div>

                <a href="product_list.php">
                    Back to Product List
                </a>

            </div>

        </div>

    </div>

</body>
</html>
