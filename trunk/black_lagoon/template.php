<?php

function black_lagoon_preprocess_page(&$vars) {
  if (variable_get('theme_black_lagoon_first_install', TRUE)) {
    include_once('theme-settings.php');
    _black_lagoon_install();
  }
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

function black_lagoon_preprocess_node(&$vars)
{
	$result = db_select('node', 'n')
    ->fields('n')
    ->condition('type', 'servicios' ,'=')
    ->execute()
    ->fetchAllAssoc('nid');
	if($result)
	{
		foreach ($result as $key => $value) {
			$vars['servicios'][$key] = node_load($key);
			//var_dump($vars['servicios'][$key]) ;
		}
		
	}
}
