<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 10/07/2016
 * Time: 19:40
 */?>

<div class="actions--wrap__title">
  <h4><?php print $title; ?> <i class="fa fa-caret-down" aria-hidden="true"></i></h4>
</div>
<div class="actions--wrap__body col-md-6">
  <?php print render($content['body']); ?>
</div>
