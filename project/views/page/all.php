<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>price</th>
			<th>quantity</th>
		</tr>
		<?php foreach ($pages as $page): ?>
		<tr>
			<td><?= $page['id']; ?></td>
			<td><?= $page['name']; ?></td>
			<td><?= $page['price'];?></td>
			<td><?= $page['price'];?></td>

		</tr>
		<?php endforeach; ?>
	</table>
</div>