<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @ingroup themeable
 */
?>

  <div id="page-wrapper" class="wrapper">

    <header id="header" class="medium">
      <?php if ($site_name): ?>
      <h1 class="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <?php print $site_name; ?>
        </a>
      </h1>
      <?php endif; ?>
      <div class="menu-wrapper">
        <?php if ($site_slogan): ?>
        <h2 class="tagline"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
        <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('main-menu', 'links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
        <?php endif; ?>
      </div>
      <div class="newsletter">
        <h3>The Daily GOOP</h3>
        <p>Sign up to receive the best of GOOP delivered to your each and every weekday.</p>
        <form id="newsletter">
          <input type="email" class="email" placeholder="Email address" required>
          <button type="submit" class="button">Sign Up</button> 
        </form>
      </div>
      <div class="tweets">
        <i class="fa fa-twitter"></i>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <input type="text" id="search" placeholder="Search..."/>

      <?php print render($page['header']); ?>

    </header> <!-- /#header -->

    <?php print $messages; ?>

    <div id="main-wrapper"><div id="main" class="clearfix">

      <div id="content" class="column"><div class="section">
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div></div> <!-- /.section, /#content -->

    </div></div> <!-- /#main, /#main-wrapper -->

    <div id="footer"><div class="section">
      <?php print render($page['footer']); ?>
    </div></div> <!-- /.section, /#footer -->

  </div> <!-- /#page-wrapper -->
