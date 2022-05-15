<?php
	use \Core\Route;
	
	return [
		new Route('/page/:id/', 'page', 'one'),
		new Route('/pages/',   'page', 'all'),
		new Route('/product/:id/',  'product', 'ShowOne'),
		new Route('/all-products/', 'product', 'ShowAll')
	];
?>
