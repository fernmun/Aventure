<div id="logos-prensa">

	<h2><?php print t('Media communication who traveled with us') ?></h2>

	<?php foreach ($terms as $term): ?>

		<?php if(!empty($term['uri'])): ?>

			<figure class="logo">
				<?php print l(theme('image_style', array(
		          'style_name' => 'logo_prensa',
		          'path' => $term['uri'],
		          'attributes' => array('class' => 'thumb', 'alt' => $term['name'], 'title' => $term['name'])
		        )), $term['url'], array('attributes' => array('target' => '_blank'), 'html' => TRUE)); ?>
		   </figure>

    <?php endif; ?>

	<?php endforeach;?>
</div>