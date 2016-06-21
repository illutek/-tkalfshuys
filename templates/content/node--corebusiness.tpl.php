<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 20/06/2016
 * Time: 16:51
 */?>

<div class="col-md-4">
  <div class="corebusiness__region">
    <div class="corebusiness__img">
      <?php print render ($content['field_img_corebusiness']); ?>
    </div>
    <div class="corebusiness__item">
      <p><?php print render($content['body']); ?></p>
      <header>
        <h4 class="corebusiness__title"><?php print $title; ?></h4>
      </header>
    </div>
  </div>
</div>
