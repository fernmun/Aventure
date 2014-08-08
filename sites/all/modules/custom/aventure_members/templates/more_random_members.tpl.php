<div class="member">
	<?php if (!empty($user_image)): ?>
		<?php print $user_image; ?>
	<?php endif; ?>
	
	<div class="member-data">
		<?php if (!empty($user_name)): ?>
			<h3><?php print $user_name; ?></h3>
		<?php endif; ?>
		
		<?php if ($subtitle): ?>
			<span class="subtitle"><?php print $subtitle; ?></span>
		<?php endif; ?>

		<?php if ($highlighted_phrase): ?>
			<p><?php print $highlighted_phrase ?></p>
		<?php endif; ?>
	</div>
</div>