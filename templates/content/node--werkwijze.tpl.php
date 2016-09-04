<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26/06/2016
 * Time: 22:49
 */ ?>
<?php
/**
 * Hier de teaser met linken naar de verschillende beste formulieren
 * Kalfs of runds link naar forms is afhankelijk van keuze kalfs of runds
 */
if ($teaser): ?>


  <div class="werkwijze--teaser__wrap">
    <?php print '<h3>' . render($content['field_titel_pdf_blok']) . '</h3>' . render($content['field_info_pdf']); ?>

    <?php // print_r($field_wat_verkocht) ?>
    <div class="werkwijze--teaser__btn">
      <?php
      /**
       * De variabele $pdfBereidingen, $pdfKalfsvlees en $pdfRundsvlees van template.php
       */
      print '<a href="' . $pdfBereidingen . '"' . 'target="_blank">' . '<button class="btncontact__btn">' .
        t('Bestelformulier Huisbereidingen') . '</button></a>';


      if ($field_wat_verkocht["und"][0]["value"] === "kalfs"):
        print '<a href="' . $pdfKalfsvlees . '"' . 'target="_blank">' . '<button class="btncontact__btn">' .
          t('Bestelformulier Kalfs') . '</button></a>';
      else:
        print '<a href="' . $pdfRundsvlees . '"' . 'target="_blank">' . '<button class="btncontact__btn">' .
          t('Bestelformulier Runds') . '</button></a>';
      endif;
      ?>
    </div>
  </div>
<?php
/**
 * hier de volledige node
 */
else:
  /**
   * $huisBereidingUrl, $kalfsProductsUrl en $rundsProductsUrl naar template.php
   * $selectKalfs = ($field_wat_verkocht["und"][0]["value"] === "kalfs");
   * $selectRunds = ($field_wat_verkocht["und"][0]["value"] === "runds");
   */

  $values = [];

  /**
   * array vullen
   */
  foreach ($field_wat_verkocht["und"] as $key => $value) {
    $values[] = $value["value"];
  }

  ?>
  <div class="werkwijze--node__wrap">
    <h3><?php print render($content['field_titel_bestellen']); ?></h3>

    <?php print render($content['field_info_bestellen']);
    /**
     * Huisbereidingen zijn er altijd daarom geen controle
     */
    print $huisBereidingUrl;

    /**
     * printen van de array met waarden select Kalfs en Runds
     */
    print(join("", array_map(function ($v) use (&$kalfsProductsUrl, &$rundsProductsUrl) {
      $url = ${$v . "ProductsUrl"};
      return $url;
    }, $values)));
    ?>
  </div>
<?php endif; ?>
