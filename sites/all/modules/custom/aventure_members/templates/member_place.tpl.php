<?php foreach($places as $place): ?>

	<div class="block-image">
		<div class="image">
			<?php print $place['image'] ?>	
		</div>
		<div class="title">
			<?php print $place['title'] ?>
		</div>
	</div>

<?php endforeach; ?>
