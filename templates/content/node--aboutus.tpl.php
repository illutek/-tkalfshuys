<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 20/06/2016
 * Time: 16:46
 */?>

<div class="col-md-12">
  <header>
    <h2><?php print $title; ?></h2>

    <h3><?php print render($content['field_sub_titel']); ?></h3>
  </header>
  <div class="paragraph">
    <?php print render($content['body']); ?>
  </div>
</div>
