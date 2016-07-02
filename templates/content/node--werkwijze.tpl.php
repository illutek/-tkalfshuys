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
else: ?>
  <div class="werkwijze--node__wrap">
    <h3><?php print render($content['field_titel_bestellen']); ?></h3>
    <?php print render($content['field_info_bestellen']); ?>

    <?php print '<p>' . t('Hier de link naar de producten of iets dergelijks') . '</p>'; ?>
    <br>
    <?php
    print '<a href="producten-huisbereidingen">' . '<button class="btn-default btnbestellen__btn">' . t('Huisbereidingen') . '</button></a>';
    if ($field_wat_verkocht["und"][0]["value"] === "kalfs"):
      print '<a href="producten-kalfsvlees">' . '<button class="btn-default btnbestellen__btn">' . t('Kalfsvlees') . '</button></a>';
    else:
      print '<a href="producten-rundsvlees">' . '<button class="btn-default btnbestellen__btn">' . t('Rundsvlees') . '</button></a>';
    endif;
    ?>
    <br>

  </div>
<?php endif; ?>
