<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 27/06/2016
 * Time: 22:40
 */ ?>

<div class="container page--tpl__logo">
  <div class="row">
    <div class="col-md-2">
      <a href="<?php print $front_page; ?>">
        <img src="<?php print base_path() . path_to_theme(); ?>/images/logo_small.png" alt="'t Kalfshuys"/>
      </a>
    </div>
    <div class="col-md-10 sectionhomepage__title__cta">
      <div class="page--tpl__title"><?php print $site_slogan; ?></div>
    </div>
  </div>
</div>
