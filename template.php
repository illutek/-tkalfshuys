<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 19/06/2016
 * Time: 18:09
 */

/**
 * Implements hook_preprocess_html()
 */
function kalfshuys_preprocess_html(&$vars)
{
  // Viewport!
  $viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1.0',
    ),
  );
  drupal_add_html_head($viewport, 'viewport');
}

/**
 * @param $variables
 */
function kalfshuys_preprocess_page(&$variables)
{
  $variables['images_path'] = $variables['base_path'] . $variables['directory'] . '/images/';


  /**
   * als er in beide sidebars content is
   */
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['contentlayout'] = 'col-md-5 col-md-push-4';
    $variables['sidebarfirst'] = 'col-md-4 col-md-pull-5';
    $variables['sidebarsecond'] = 'col-md-3';
  }
  /**
   * als er enkel in de sidebar first content is
   */
  elseif (!empty($variables['page']['sidebar_first'])) {
    $variables['contentlayout'] = 'col-md-8 col-md-push-4';
    $variables['sidebarfirst'] = 'col-md-4 col-md-pull-8';
  }
  /**
   * als er enkel content is in de rechter sidebar
   */
  elseif (!empty($variables['page']['sidebar_second'])) {
    $variables['contentlayout'] = 'col-md-9';
    $variables['sidebarsecond'] = 'col-md-3';
  } // geen enkel content in beide zijbalken
  else {
    $variables['contentlayout'] = 'col-md-12';
  }
}

/**
 * @param $variables
 */
function kalfshuys_preprocess_button(&$variables)
{
  $variables['element']['#attributes']['class'] = array();
  $variables['element']['#attributes']['class'][] = 'btn';
  if (stristr($variables['element']['#value'], 'Verzenden') !== FALSE) {
    $variables['element']['#attributes']['class'][] = 'btncontact__btn';
  }
}
