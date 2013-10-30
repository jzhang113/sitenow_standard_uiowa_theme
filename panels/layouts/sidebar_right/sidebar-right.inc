<?php

/**
 * @file
 * Defines an asymetric, golden ratio based panels layout.
 */

// Plugin definition.
$plugin = array(
  'title' => t('Sidebar Right'),
  'icon' => 'preview.png',
  'category' => t('Omega content layouts'),
  'theme' => 'sidebar_right',
  'css' => '../../../css/layouts/sidebar-right/sidebar-right.layout.css',
  'regions' => array(
    'first' => t('First'),
    'second' => t('Second'),
  ),
);

/**
 * Implements hook_preprocess_golden().
 */
function template_preprocess_sidebar_right(&$variables) {
  $variables['attributes_array']['class'][] = 'panel-sidebar-right';
  $variables['attributes_array']['class'][] = 'panel-display--sidebar-right';

  foreach($variables['content'] as $name => $item) {
    $variables['region_attributes_array'][$name]['class'][] = 'sidebar-right-region';
    $variables['region_attributes_array'][$name]['class'][] = 'sidebar-right-region--' . drupal_clean_css_identifier($name);
  }
}
