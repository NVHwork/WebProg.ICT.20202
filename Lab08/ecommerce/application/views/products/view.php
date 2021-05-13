<?php foreach ($products as $product): ?>
<div>
	<h2>
		<strong><?php echo $product['Product']['name']?></strong>
	</h2>
</div>

<div>
	<h2>Price: $<?php echo $product['Product']['price']?></h2>

	<?php if (!empty($product['Tag'])):?>
	<h2>Tags:</h2>

	<?php foreach ($product['Tag'] as $tags):?>
	<div class="tag">
		<?php echo $tags['Tag']['name']?>
	</div>
	<?php endforeach?>
	<?php endif?>
</div>
<?php endforeach ?>

<?php for ($i = 1; $i < $totalPages; $i++): ?>
<div>
	<?php if ($i == $currentPageNumber): ?>
	<?php echo $currentPageNumber ?>
	<?php else: ?>
	<?php echo $html->link($i, 'products/page/'.$i) ?>
	<?php endif ?>
</div>
<?php endfor ?>