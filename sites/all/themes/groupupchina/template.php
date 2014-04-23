<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * GroupUpChina theme.
 */

/**
 * Implement theme_preprocess_html()
 * 
 * @param type $variables
 */
function groupupchina_preprocess_html(&$variables) {
  drupal_add_css('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(
      'type' => 'external',
      'group' => CSS_THEME
  ));
}