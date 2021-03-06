<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 20/06/2016
 * Time: 14:41
 */
?>
<div id="fb-root"></div>

<?php
/**
 * include van navigatie
 * ../includes/nav.inc.php gaat niet lukken
 * oplossing
 * include dirname(__FILE__) . '/../includes/nav.inc.php'
 * vanaf PHP 5.3 you can use __DIR__ in place of dirname(__FILE__)
 */

include __DIR__ . '/../includes/nav.inc.php';


/**
 * <!-- section homepage -->
 * op section.scss onder class sectionhomepage__bcg kan de opactity van de background image aangepast om een donkere
 * background image te verkrijgen doordat de background van de container section--homepage een zwarte achtergrond heeft
 */
?>
<div id="parallax-anchor"></div>

<section class="section--homepage">
  <?php
  /**
   * Actie enkel 1, en zichtbaar tot ingestelde datum
   */
  include __DIR__ . '/../includes/actions.inc.php';
  ?>

  <div class="sectionhomepage__bcg"></div>
  <div class="container homepage--container">
    <div class="homepage__logo--slogan">
      <div class="row">
        <div class="col-md-3">
          <div class="homepage__logo--large">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
          </div>
          <div class="homepage__logo--small">
            <a href="<?php print $front_page; ?>">
              <img src="<?php print base_path() . path_to_theme(); ?>/images/logo_small.png" alt="tKalfshuys-logo"/>
            </a>
          </div>
        </div>
        <div class="col-md-9 sectionhomepage__title__cta">
          <div class="col-md-12">
            <h1><?php print $site_slogan; ?></h1>
          </div>
          <div class="col-md-12 btn--cta">
            <?php
            /**
             * de link naar bestel form zou gemakkelijk aanpasbaar moeten
             * zijn voor de editors 2 forms via een checkbox bv
             * Is ondertussen 2016-07-01 uitgevoerd via tussen pagina 'Bestellen'
             * (inhoudstype 'Werkwijze')
             */
            include __DIR__ . '/../includes/button-cta.inc.php'; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- end homepage__logo--slogan -->

  </div>
</section>

<section class="section--quality section--50">
  <div class="container container--quality">
    <div class="row">
      <?php
      /**
       * de layout van deze region in node--quality.tpl.php
       */
      print render($page['quality']); ?>
    </div>
  </div>

</section>
<section class="section--aboutus section--50">
  <div class="container container--aboutus">
    <div class="row">
      <?php
      /**
       * de layout van deze region in node--aboutus.tpl.php
       */
      print render($page['aboutus']);
      ?>
    </div>
  </div>
</section>

<!-- section--corebusiness -->
<section class="section--corebusiness">
  <div class="container container--corebusiness">
    <div class="row">
      <?php
      /**
       * corebusiness__region 1
       */
      print render($page['corebusiness1']);
      ?>

      <?php
      /**
       * corebusiness__region 2
       */
      print render($page['corebusiness2']);
      ?>

      <?php
      /**
       * corebusiness__region 3
       */
      print render($page['corebusiness3']);
      ?>
    </div>
    <!-- end row -->
  </div>
  <!-- end container--corebusiness -->
</section> <!-- end section--corebusiness -->

<footer class="footer">
  <div class="container footer--main">
    <!-- vanaf hier tot einde row enkel voor de homepage -->
    <div class="row">
      <div class="col-md-4">
        <!-- contact gegevens -->
        <div class="footermain__item call-us--region">
          <div class="mobile--phone">
            <div class="footermain-item__icon">
              <i class="fa fa-phone fa-5x" aria-hidden="true"></i>
            </div>
            <header>
              <h5>BEL ONS</h5>

              <p>Vragen over een bestelling of andere info, aarzel niet en contacteer ons via onderstaande
                telefoon nummers.</p>
            </header>

            <?php
            /**
             * insluiten van de mobile telefoon nummers
             */
            include __DIR__ . '/../includes/phone.inc.php';
            ?>

          </div>
          <!-- end mobile--phone -->

        </div>
        <!-- end footermain__item call-us--region -->

      </div>
      <!-- end contact--region -->
      <div class="col-md-4">
        <!--  -->
        <div class="footermain__item contact--region">
          <div class="footermain-item__icon">
            <i class="fa fa-paper-plane fa-5x" aria-hidden="true"></i>
          </div>
          <header>
            <h5>Contacteer ons</h5>

            <p>Mailen kan uiteraard ook, via e-mail of met ons contact formulier.</p>
          </header>
          <div class="email">
            <a href="mailto:steven.van.nijlen@telenet.be">
              <script>
                document.write("<a href=\"mail" + "to:" + new Array("steven.van.nijlen", "telenet.be").join("@") + "\">"
                + "<i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>" + " Dit kan via e-mail" + "</" + "a>");
              </script>
            </a>
          </div>
          <div>
            <?php print '<a href=' . base_path() . 'tKalfshuys-contacteren>' .
              '<button class="btncontact__btn">' . 'Contactformulier' . '</button>' . '</a>';
            ?>
          </div>
        </div>

      </div>
      <!-- -->
      <div class="col-md-4">
        <!-- social -->
        <div class="footermain__item social--region">
          <div class="footermain-item__icon">
            <i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i>
          </div>
          <div class="fb-page" data-href="https://www.facebook.com/tKalfshuys/" data-small-header="false"
               data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/tKalfshuys/" class="fb-xfbml-parse-ignore">
              <a href="https://www.facebook.com/tKalfshuys/">T Kalfshuys</a>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <!-- einde row -->

  </div>
</footer>

<footer class="footer__small">
  <?php
  /**
   * footer enkel met copyright vermelding
   */
  include __DIR__ . '/../includes/footer_small.inc.php';
  ?>
</footer>
