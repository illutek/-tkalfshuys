<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 20/06/2016
 * Time: 14:44
 */?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <!-- vendor/hamburger.scss -->
        <div class="hamburger hamburger--spin">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </button>
      <!-- link aanpassen naar home page -->
      <div class="navbar--brand">
        <a class="navbar-brand" href="<?php print $front_page; ?>"><h4>'T KALFSHUYS</h4></a>
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">HOME</a>
        <?php print '<li>' . '<a href=' . base_path() . 'bestellen>' . t('BESTELLEN') . '</a></li>'; ?>
        <?php print '<li>' . '<a href=' . base_path() . 'tKalfshuys-contacteren>' .  t('CONTACT') . '</a></li>'; ?>

      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
