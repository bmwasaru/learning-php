<?php
	
	class Cart
	{

		var $items;

		function add_items($artnr, $num)
		{
			$this->items[$artnr] += $num;
		}

		function remove_item($artnr, $num)
		{
			if ($this->items[$artnr] > $num) {
				$this->items[$artnr] -= $num;
				return true;
			} else {
				return false;
			}
		}
	}

	$cart = new Cart;
	$cart->add_items("20", 2); // add 2 items of article number 20 to the cart

	class Stars_Cart extends Cart {
		var $owner;

		function set_owner($name) {
			$this->owner = $name;
		}
	}

	$s_cart = new Stars_Cart; // create Start cart
	$s_cart->set_owner("Jane Doe"); // name cart owner
	echo $s_cart->owner;
	$s_cart->add_items("20", 2); // inherited from cart

?>