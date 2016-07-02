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
      <ul class="nav navbar-nav">
        <!-- de inlog button en user print -->
        <li><?php global $user;
          if ($user->uid != 0) {
            /**
             * Ingelogde user
             */
            print '<li class="first dropdown">' . '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'
              . ' My account' . '<span class="caret"></span></a>' .
              '<ul class="dropdown-menu">' .
              '<li><a href="' . url('user/' . $user->uid) . '">' . '<i class="fa fa-user fa-fw"></i>' . t(' Mijn account') . '</a></li>' .
              '<li><a href="' . url('user/' . $user->uid . '/edit') . '">' . '<i class="fa fa-pencil fa-fw"></i>' . t(' Bewerken') . '</a></li>' .
              '<li><a href="' . url('user/' . $user->uid . '/orders') . '">' . '<i class="fa fa-book fa-fw"></i>' . t(' Mijn orders') . '</a></li>' .
              '<li><a href="' . url('user/logout') . '">' . '<i class="fa fa-sign-out fa-fw"></i>' . t(' Uitloggen') . '</a></li>' .
              '</ul>' .
              '</li>';
            /**
             * TODO Dashboard link
             */
            // include 'dashboard.inc.php';
            
            print '<li>' . '<a href="' . url('user/logout') . '">' . t('Uitloggen') . '</a>' . '</li>';

          } else {
            /**
             * Niet ingelogd 'Login en registeer link worden getoond
             */
            print '<li class="first">
                        <a href="' . url('user') . '">' . t(' Inloggen') . '</a>
                        </li>';
            print '<li>
                        <a href="' . url('user/register') . '">' . t(' Registeer') . '</a>
                        </li>';
          } ?>
          <!-- link naar alle producten -->
          <?php print '<li><a href=' . base_path() . '#>' . t(' Producten') . '</a></li>'; ?>

      </ul>
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
