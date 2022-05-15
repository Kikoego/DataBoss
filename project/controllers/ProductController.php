<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\product; // подключаем нашу модель
	
	class ProductController extends Controller
	{
		public function ShowOne($params)
		{

			$product = (new Product) -> getById($params['id']);
			$this->title = 'продукт' . $product['id'];
			$this->name = $product['name'];
			return $this->render('product/one', [
				'price' => $product['price'],
				'quantity' => $product['quantity'],
				'description' =>$product['description'],
				'h1' => $this->name
			]);
		}

		public function ShowAll()
		{
			$this->name = 'Список всех страниц';
			
			$products = (new Product) -> getAll();
			return $this->render('product/all', [
				'products' => $products,
				'price' => $product['price'],
				'h1' => $this->title
			]);
		}		
	}
?>
