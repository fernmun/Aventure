<div class="testimony">
	<?php if (!empty($user_image)): ?>
		<?php print $user_image; ?>
	<?php endif; ?>

	<?php if (!empty($user_image_country)): ?>
		<?php print $user_image_country; ?>
	<?php endif; ?>

	<?php if (!empty($user_name)): ?>
		<h3><?php print $user_name; ?></h3>
	<?php endif; ?>
	
	<?php if ($subtitle): ?>
		<span class="subtitle"><?php print $subtitle; ?></span>
	<?php endif; ?>

	<?php if ($highlighted_phrase): ?>
		<p><?php print $highlighted_phrase ?></p>
	<?php endif; ?>

	<?php if ($rating): ?>
		<p><?php print $rating ?></p>
	<?php endif; ?>
</div>