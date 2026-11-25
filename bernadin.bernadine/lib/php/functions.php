<?php

session_start();

function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}


function file_get_json($filename) {
	$file = file_get_contents($filename);
	return json_decode($file);
}



include_once "auth.php";
function makeConn() {
	$conn = new mysqli(...MYSQLIAuth());
	if($conn->connect_errno) 
	die($conn->connect_errno);
	$conn->set_charset('utf8');
	return $conn;
}



function makeQuery($conn,$qry) {

	$result = $conn->query($qry);
	if($conn->errno) die($conn->error);
	$a = [];
	while($row = $result->fetch_object()) {
		$a[] = $row;
	}
	return $a;
}




/*Cart functions*/

function array_find($array,$fn) {
	foreach($array as $o) if($fn($o)) return $o;
	return false;
}

function getCart() {
	return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}


function addToCart($id, $amount, $eventName, $eventAddress, $eventDate) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $cart = getCart();

    $p = array_find($cart, function($o) use ($id) {
        return $o->id == $id;
    });

    if ($p) {
        $p->amount += $amount;
        $p->eventName = $eventName;
        $p->eventAddress = $eventAddress;
        $p->eventDate = $eventDate;
    } else {
        $_SESSION['cart'][] = (object)[
            "id" => $id,
            "amount" => $amount,
            "eventName" => $eventName,
            "eventAddress" => $eventAddress,
            "eventDate" => $eventDate
        ];
    }
}

function resetCart() {$_SESSION['cart'] = [];}

function cartItemById($id) {
	return array_find(getCart(),function($o)use($id){return $o->id==$id;});
}


function makeCartBadge() {
	$cart = getCart();
	if(count($cart)==0) {
		return"";
	} else {
		return"(".array_reduce($cart,function($r,$o){return $r+$o->amount;},0).")";
	}
}


function getCartItems() {
	$cart = getCart();

	if(empty($cart)) {
		return [];
	}

	$ids = implode(",",array_map(function($o){return $o->id;},$cart));
	$data = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN ($ids)");

	return array_map(function($o) use ($cart) {
		$p = cartItemById($o->id);
		$o->amount = $p->amount;
		$o->eventName = $p->eventName ?? '';
		$o->eventAddress = $p->eventAddress ?? '';
		$o->eventDate = $p->eventDate ?? '';
		$o->total = $p->amount * $o->price;
		return $o;
	},$data);

}























