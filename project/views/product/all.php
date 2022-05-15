<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>price</th>
			<th>quantity</th>
		</tr>
		<?php foreach ($products as $product): ?>
		<tr>
			<td><?= $product['id']; ?></td>
			<td><?= $product['name']; ?></td>
			<td><?= $product['price'];?></td>
			<td><?= $product['quantity'];?></td>

		</tr>
		<?php endforeach; ?>
	</table>
</div>