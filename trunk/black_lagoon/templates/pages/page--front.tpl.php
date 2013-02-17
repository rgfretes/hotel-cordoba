<?php

	/**
	* @file
	* Black Lagoon Theme
	* Created by Zyxware Technologies
	*/
?>

<div id="wrapper">
	<div id="header">
		<div class="logo">
			<?php if ($logo): ?>
			
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				
			</a>
			<?php endif; ?>
		</div>
		<!--<div id="hotel">
			Hotel Córdoba
		</div>
		<div>
			<img id="hotel" src="<?php echo $base_path . '/' . $directory;?>/images/hotel.png"/>
		</div>-->
		<?php if($page['mainmenu']) { ?>
				<div id="main-menu">
						<img id="picuro_izquierdo" src="<?php echo $base_path . '/' . $directory;?>/images/picuro.png"/>
						<img id="picuro_derecho" src="<?php echo $base_path . '/' . $directory;?>/images/picuro-derecha.png"/>
					<?php print render($page['mainmenu']); ?>
				</div>
		<?php }	?>
	</div>
	<?php if ($messages): ?>
    <div id="messages">
      <?php print $messages; ?>
    </div>
  <?php endif; ?>
	
		<div id="content">
		  <?php if ($banner): ?>
		    <div class="slider">
		    	<?php print $banner;?>
		    </div>
			 <?php endif;?>
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
