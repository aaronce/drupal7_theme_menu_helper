<?php

function THEME_preprocess_page(&$vars, $hook) {
  
  /*
   * Custom menu
   *  any menu item with "nc" ccs class will remove children items from output
   */
  $themenu = menu_tree_all_data('main-menu');

  foreach ($themenu as $value) {
    if(!empty($value['link']['options']['attributes']['class'])) {
      foreach ($value['link']['options']['attributes']['class'] as $ch_val) {
        if($ch_val == 'nc') {
          $value['link']['has_children'] = 0;
          
          foreach ($value['below'] as $ch_link) {
            $ch_link['link']['hidden'] = 1;
          }
        }
      }
    }
    //dpm($value);
  }

  //dpm($themenu);

  // make THEME-main-menu available to tpl files below.
  $vars['THEME-main-menu'] = drupal_render(menu_tree_output($themenu));
  /*
   * custom menu end
   */
 
}