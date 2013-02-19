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
  	
  	
	<div id="content">
		<?php 
			if($page['sidebar_first'] && $page['sidebar_second']) {
			  $maincontent="maincontentmiddle";
			}
			elseif($page['sidebar_first'] || $page['sidebar_second']){
			  $maincontent="maincontentside";
			}
			else{
			  $maincontent="maincontentfull";
			}		
		?>
		<?php 
			if($page['sidebar_first']){
		?>
		<div class="sidebar-first">
				<?php print render($page['sidebar_first']); ?>
		</div>
		<?php 
			}
		?>
		<div class="<?php echo $maincontent; ?>">
				<?php if ($title): ?>
					<h1><?php print $title; ?></h1>
				<?php endif; ?>
				<?php if ($tabs): ?>
					<div class="tabs">
						<?php print render($tabs); ?>
					</div>
				<?php endif; ?>
				<?php print render($page['content']); ?>
		</div>
		<?php
			if($page['sidebar_second']) {
		?>
		<div class="sidebar-second">
				<?php print render($page['sidebar_second']); ?>
		</div>
		<?php 
			}
		?>
	</div>
	<div id="contenedor-sombra-arriba">
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
