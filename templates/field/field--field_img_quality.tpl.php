<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 21/06/2016
 * Time: 11:00
 */

$total = count($items);
for ($i = 0; $i < $total; ++$i): ?>
  <img class="img-circle" <?php print render($items[$i]); ?>
<?php endfor; ?>
