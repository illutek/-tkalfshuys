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
function kalfshuys_preprocess_html(&$variables)
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
 * Implements hook_preprocess_node()
 */
function kalfshuys_preprocess_node(&$variables)
{

  $variables['pdfBereidingen'] = drupal_render($variables['content']['field_pdf_bereidingen']);
  $variables['pdfKalfsvlees'] = drupal_render($variables['content']['field_pdf_kalfsvlees']);
  $variables['pdfRundsvlees'] = drupal_render($variables['content']['field_pdf_rundsvlees']);

  if (module_exists('uc_product') && uc_product_is_product($variables)){
    $variables['uc_image_teaser'] = drupal_render($variables['content']['uc_product_image'][0]);
    $variables['uc_image'] = drupal_render($variables['content']['uc_product_image']);
    $variables['uc_pakketPrice'] = drupal_render($variables['content']['cost']);
    $variables['uc_sellPrice'] = drupal_render($variables['content']['sell_price']);
    $variables['uc_body'] = drupal_render($variables['content']['body']);
    $variables['uc_addCart'] = drupal_render($variables['content']['add_to_cart']);
  }

}
/**
 * @param $variables
 */
function kalfshuys_preprocess_page(&$variables)
{

  drupal_add_js(drupal_get_path('theme', 'kalfshuys') . '/js/jquery.min.js', array('weight' => 1));

  /**
   * parallax.js only on the front page
   */
  if (drupal_is_front_page()) {
    drupal_add_js(drupal_get_path('theme', 'kalfshuys') . '/js/parallax.js', array('weight' => 5));
    drupal_add_js(drupal_get_path('theme', 'kalfshuys') . '/js/actions.js', array('weight' => 6));
  }

  // Add a copyright message to the footer_small.inc.php
  $variables['copyright'] = t('\'t Kalfshuys') . ' © ' . date("Y");

  /**
   * Het afhankelijk van ja of geen content in de sidebars de main content breedte aanpassen
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
  if (stristr($variables['element']['#value'], '_Toevoegen aan bestelling') !== FALSE) {
    $variables['element']['#attributes']['class'][] = 'btn-default btnbestellen__btn';
  }
}
