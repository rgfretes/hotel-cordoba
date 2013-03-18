<?php

	/**
	* @file
	* Black Lagoon Theme
	* Created by Zyxware Technologies
	*/

?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<div class="content clearfix"<?php print $content_attributes; ?>>
		<div id="galleria">
		</div>
		<script>
			data = [
			<?php foreach($galeria as $g) : ?>
				<?php
					$imagen_f = field_view_field('node',$g,'field_imagen_galeria');
					$image_uri = $imagen_f['#items'][0]['uri'];
					
					$thumb_f = field_view_field('node',$g,'field_thumb_galeria');
					$thumb_uri = $thumb_f['#items'][0]['uri'];
					
					$name_f = field_view_field('node',$g,'field_nombre');
					$name = $name_f['#items'][0]['value'];
					
					$desc_f = field_view_field('node',$g,'field_descripcion_galeria');
					$desc = $desc_f['#items'][0]['value'];
				?>
				    {
				        image: '<?php print image_style_url("imagen_galeria", $image_uri); ?>',
				        thumb: '<?php print image_style_url("thumb_galeria", $thumb_uri); ?>',
				        title: '<?php echo $name; ?>',
				        description: '<?php echo $desc; ?>'
					 },
			<?php endforeach ?>
					];
            Galleria.loadTheme('<?php echo base_path() . '/' . drupal_get_path('theme', 'black_lagoon');?>/js/galleria/themes/azur/galleria.azur.min.js');
			Galleria.configure({
				transition: 'fadeslide'
			});
            Galleria.run('#galleria', {dataSource: data});
        </script>
	</div>
  
</div>
