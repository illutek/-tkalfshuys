<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 20/06/2016
 * Time: 16:04
 */

/**
 * verschilt enkel van de page.tpl.php om de main content een witte background te kunnen geven
 *
 * include van navigatie
 * ../includes/nav.inc.php gaat niet lukken
 * oplossing
 * include dirname(__FILE__) . '/../includes/nav.inc.php'
 * vanaf PHP 5.3 you can use __DIR__ in place of dirname(__FILE__)
 */

include __DIR__ . '/../includes/nav.inc.php';
?>
<div id="fb-root"></div>
<section class="section--page">

  <?php
  /**
   *
   */

  include __DIR__ . '/../includes/page--header.inc.php';
  ?>
  <div class="sectionpage__container__wrap">
    <div class="container sectionpage__container">
      <div class="row">
        <div class="layout--content <?php print $contentlayout; ?>">
          <div class="layoutcontent__bestellen">
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php print render($page['content']); ?>
          </div>

        </div>

        <?php if ($page['sidebar_first']): ?>
          <aside class="layout--sidebar--first <?php print $sidebarfirst; ?>">
            <?php print render($page['sidebar_first']); ?>
          </aside>
        <?php endif; ?>

        <?php if ($page['sidebar_second']): ?>
          <aside class="layout--sidebar--second <?php print $sidebarsecond; ?>">
            <?php print render($page['sidebar_second']); ?>
          </aside>
        <?php endif; ?>
      </div>
    </div>
</section>

<footer class="navbar-fixed-bottom footer__small">
  <?php
  /**
   * footer enkel met copyright vermelding
   */
  include __DIR__ . '/../includes/footer_small.inc.php';
  ?>
</footer>
