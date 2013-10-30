<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * uiowa_standard theme.
 */

function uiowa_standard_breadcrumb($vars) {

  $breadcrumb = $vars['breadcrumb'];

  if (!empty($breadcrumb)) {

    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $crumbs = '<ul class="breadcrumbs clearfix">';

    $array_size = count($breadcrumb);
    $i = 0;
    while ( $i < $array_size) {
      $crumbs .= '<li class="breadcrumb-' . $i;
      if ($i == 0) {
        $crumbs .= ' first';
      }
      if ($i+1 == $array_size) {
        $crumbs .= ' last';
      }
      $crumbs .=  '">' . $breadcrumb[$i] . '</li>';
      $i++;
    }
    $crumbs .= '</ul>';
    return $crumbs;
  }
}
