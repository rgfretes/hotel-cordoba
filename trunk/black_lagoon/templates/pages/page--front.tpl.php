<?php

	/**
	* @file
	* Black Lagoon Theme
	* Created by Zyxware Technologies
	*/
?>
<div id="big-wrapper">
</div>
<div id="wrapper">
	<div class="twelve-point-star">
	</div>
	<div id="ubicacion-centrica">
		Ubicacion<br/>centrica!
	</div>
	<div id="header">
		<div class="logo">
			<?php if ($logo): ?>
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				<div id="hotel">
					<img src="<?php echo $base_path . '/' . $directory;?>/images/hotel.png"/>
				</div>
			</a>
			<?php endif; ?>
		</div>
		
		<?php if($page['mainmenu']) { ?>
				<div id="main-menu">
					<img id="picuro_izquierdo" src="<?php echo $base_path . '/' . $directory;?>/images/picuro.png"/>
					<img id="picuro_derecho" src="<?php echo $base_path . '/' . $directory;?>/images/picuro-derecha.png"/>
					<?php print render($page['mainmenu']); ?>
				</div>
				<img id="sombra-menu" src="<?php echo $base_path . '/' . $directory;?>/images/sombra-menu.png"/>
		<?php }	?>
	</div>
	
	
	<?php if ($messages): ?>
    <div id="messages">
      <?php print $messages; ?>
    </div>
  <?php endif; ?>
  
  
	<script type="text/javascript">
		$(document).ready(function($){
			$('.pix_diapo').diapo({commands: 'false', time: '6500', hover: 'false'});
		})(jQuery);
	</script>
	
	
	<div id="content">
		<div class="pix_diapo">
            <?php foreach($slides as $s) print(drupal_render(node_view($s))); ?>
		</div>
	</div>
	<div id="contenedor-sombra-arriba">
		<img class="sombra" src="<?php echo $base_path . '/' . $directory;?>/images/sombra.png"/>
	</div>
	<div id="hoja-bienvenida">
		<b>BIENVENIDOS A LA WEB DEL HOTEL CORDOBA</b><br/><br/>
		<span class="estilo-texto">Nuestro hotel, ubicado en el corazón de Villa Carlos Paz,
		lo espera para disfrutar de la belleza y tranquilidad
		de las Sierras de Córdoba.<br/><br/>
		Aquí encontrará todo lo necesario para sus vacaciones.<br/><br/>
		Hoy lo invitamos a visitar la comodidades, ubicación y
		fotos del Hotel Córdoba, ojalá muy pronto lo podamos
		atender en nuestra casa.<br/></span>		
	</div>
	<div id="contenedor-sombra">
		<img class="sombra" src="<?php echo $base_path . '/' . $directory;?>/images/sombra.png"/>
	</div>

</div> <!-- /#wrapper -->

<?php if ($page['footer']) { ?>
<div id="footer">
	<?php print render($page['footer']); ?>
</div>
<?php } ?>
<div id="disenio-web">
	NetInside - Diseño web	<!--falta poner el link-->		
</div>