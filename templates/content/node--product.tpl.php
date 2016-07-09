<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 1/07/2016
 * Time: 12:44
 */

if ($teaser): ?>
  <div class="body_teaser">
    <div class="teaser_prod_img">
      <a href="<?php print $node_url; ?>">
        <?php print (isset($uc_image_teaser) ? $uc_image_teaser : ''); ?>
      </a>
    </div>
    <?php print $title; ?>
    <?php print $uc_addCart; ?>
  </div>
  <?php
  /**
   * variables van template.php
   */
  print $details;

  ?>

<?php else: ?>
  <div class="product_list">
    <?php print render($title_prefix);
    if (!$page): ?>
      <h2 class="title" <?php print $title_attributes; ?>>
        <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
      </h2>
    <?php endif;
    print render($title_suffix); ?>
    <div class="row">
      <div class="col-md-4 product_img">
        <?php
        print (isset($uc_image_teaser) ? $uc_image_teaser : '');
        print '<div class="img_teaser_wrap">' . (isset($uc_image) ? $uc_image : '') . '</div>';
        ?>
      </div>
      <div class="col-md-8 product_info">
        <div class="product_info__body">
          <?php print (isset($uc_body) ? $uc_body : ''); ?>
        </div>
        <div class="sell-price">
          <?php
          $fieldPakketPrice = field_get_items('node', $node, 'cost');
          if ($fieldPakketPrice) {
            print $uc_pakketPrice;
          } else {
            print $uc_sellPrice;
          }
          ?>
        </div>
        <?php print $uc_addCart; ?>
      </div>
    </div>
  </div>
<?php endif; ?>