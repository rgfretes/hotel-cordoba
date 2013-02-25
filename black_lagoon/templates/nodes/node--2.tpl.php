<?php

	/**
	* @file
	* Black Lagoon Theme
	* Created by Zyxware Technologies
	*/

?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="content clearfix"<?php print $content_attributes; ?>>
  	<table id="todos-los-servicios">
  		<?php
  			$cont = 0;
			foreach($servicios as $s)
			{
				if($cont == 0)
				{
					print("<tr>");
					/*$s["left"] = true;
					$s["right"] = false;*/
					print('<td class="left">'.drupal_render(node_view($s))."</td>");
					$cont = 1;
				}
				elseif($cont == 1)
				{
					/*$s["left"] = false;
					$s["right"] = true;*/
					print('<td class="middle"></td>');
					print('<td class="right">'.drupal_render(node_view($s))."</td>");
					print("</tr>");
					$cont = 0;
				}
			}
		?>
  	</table>
  </div>
  
</div>
