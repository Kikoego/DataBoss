<?php
	namespace Project\Controllers;
	use \Core\Controller;

	class NumController extends Controller{
		
		public function sum($params){
			$sum = 0;
			foreach ($params as $n) {
				$sum += $n;
			}
			echo $sum;
		}
 	}

	
?>