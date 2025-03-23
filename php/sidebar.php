<div class="sidebar">
  <figure class="title-logo">
    <?php if ($site->logo()): ?>
    <img src="<?php echo ($site->logo()); ?>" alt="<?php echo $site->title(); ?>">
    <?php endif ?>
  </figure>

  <nav class="sidebar-menu">
  <?php include(THEME_DIR_PHP.'menu.php'); ?>
  </nav>
  <p class="copyright"><span>since 2024-12-02</span></p>
  <!--<p class="copyright">Powered by <a href="https://bludit.com/" target="blank">Bludit</a></p>-->

  <!-- Load Bludit Plugins: Page End -->
  <?php Theme::plugins('siteSidebar'); ?>
  <!--<div class="banners">
    <a href="" target="blank"><img src="<?php echo DOMAIN_THEME . 'img/sample_banner1.png' ?>"></a>
  </div>-->
</div>
