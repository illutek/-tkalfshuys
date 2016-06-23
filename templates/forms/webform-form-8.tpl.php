<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form-8.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 *
 * If a preview is enabled, these keys will be available on the preview page:
 * - $form['preview_message']: The preview message renderable.
 * - $form['preview']: A renderable representing the entire submission preview.
 */
?>
<?php
  // Print out the progress bar at the top of the page
  print drupal_render($form['progressbar']);

  // Print out the preview message if on the preview page.
  if (isset($form['preview_message'])) {
    print '<div class="messages warning">';
    print drupal_render($form['preview_message']);
    print '</div>';
  }

  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
  print drupal_render($form['submitted']);


  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above (buttons, hidden elements, etc).
  print drupal_render_children($form);

?>
<div class="contactregion--form">
  <div class="contactregionform__info">
    <?php
    /**
     * TODO verdere opmaak, is me nu toch nog te simpel
     */
    print t('Of toch liever langs de telefoon:') . '</br>';

    ?>
  </div>
  <div class="contactregionform__phone">
    <span class="form__phone"><i class="fa fa-mobile" aria-hidden="true"></i> +32479792529</span>

    <span class="form__phone"><i class="fa fa-mobile" aria-hidden="true"></i> +32489805656</span>
  </div>
</div>
