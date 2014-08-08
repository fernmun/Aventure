<div class="photo-share-block large-9 columns">
	<h3><?php print t('You can use this photo in your website... Free!'); ?></h3>
	<p><?php print t('You can use the photo about @place in your website, under license
										 Creative Commons, Atributte 3.0. You just have to copy and paste the next code!', array('@place' => $title)); ?>
	</p>
	<form action="#">
		<label><span>1</span><?php print t('Select size') ?></label>
		<select id="image-styles">
			<?php var_dump($image_size) ?>
			<?php foreach($image_styles as $key => $style): ?>
				<option value="<?php print $style; ?>"><?php print $image_size[$key] . ' ' . $key; ?></option>			
			<?php endforeach; ?>
		</select>
		
		<label><span>2</span><?php print t('Copy the next code') ?></label>		
		<textarea rows="4" cols="20" id="embed-code" readonly>

		</textarea>

		<label><span>3</span><?php print t('Paste it in your website!') ?></label>
	</form>
</div>