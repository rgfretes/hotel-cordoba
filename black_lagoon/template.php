<?php

  /**
	* @file
	* Black Lagoon Theme
	* Created by Zyxware Technologies
	*/



function black_lagoon_preprocess_page(&$vars) {
	
  // Useful for devel default banners, remove before commit
  //   variable_del('theme_marinelli_first_install');
  // Chcek if is first setup of marinelli and install banners.
  if (variable_get('theme_black_lagoon_first_install', TRUE)) {
    include_once('theme-settings.php');
    _black_lagoon_install();
  }
  //to print the banners
  /*$banners = black_lagoon_show_banners();
  $vars['banner'] = $banners;
  if(drupal_is_front_page()){
    drupal_add_js(path_to_theme() .'/js/slide.js', 'file');
    
  }*/
  //$vars['main_links_tree'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
  //print render ( $vars['main_links_tree']);
	$result = db_select('node', 'n')
    ->fields('n')
    ->condition('type', 'imagen_para_slider' ,'=')
    ->execute()
    ->fetchAllAssoc('nid');
	if($result)
	{
		foreach ($result as $key => $value) {
			$vars['slides'][$key] = node_load($key);
		}
	}
}

/**
 *
 * @return <array>
 *    html markup to show banners
 */
function black_lagoon_show_banners() {
  $banners = black_lagoon_get_banners(FALSE);
  //print_r($banners);
 // print_r($banners);
  $output = ' <div id="orbitDemo">';
  
  for($i=0;$i<count($banners);$i++){
  /*  $output .= '<a href="' . $banners[$i]['image_url'] . '" >';
    $output .= '<img src="' . file_create_url($banners[$i]['image_path']) . '" >';
    $output .= '</a>'; */ 
    $output .= l('<img class="img-sl" src="' . file_create_url($banners[$i]['image_path']) . '" alt="slider image' . $i . '" />', $banners[$i]['image_url'],array('html' => TRUE));
  }  
  $output .= '</div>';
  //print l('sdfsd','dfsdf');
  return $output;
}


/**
 * Get banner settings.
 *
 * @param <bool> $all
 *    Return all banners or only active.
 *
 * @return <array>
 *    Settings information
 */
function black_lagoon_get_banners($all = TRUE) {
  // Get all banners
  $banners = variable_get('theme_black_lagoon_banner_settings', array());

  // Create list of banner to return
  $banners_value = array();
  foreach ($banners as $banner) {     
      $banners_value[] = $banner;   
  }

  // Sort image by weight
  //usort($banners_value, 'drupal_sort_weight');

  return $banners_value;
}

/**
 * Set banner settings.
 *
 * @param <array> $value
 *    Settings to save
 */
function black_lagoon_set_banners($value) {
  variable_set('theme_black_lagoon_banner_settings', $value);
}

function black_lagoon_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
  		
  		/*$form['search_block_form']['#value'] = 'Search';  // define size of the textfield */
  		$form['search_block_form']['#attributes']['placeholder'] = t('Search');
  		$form['actions']['submit']['#value'] = ''; // Change the text on the submit button
  		$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search_icon.png');
  		
  		/*$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
  		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";*/
  }
}
/*function black_lagoon_preprocess_page(&$vars) {
  $vars['main_links_tree'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
}*/
