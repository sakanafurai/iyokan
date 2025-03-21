<header>
  <figure class="title-logo">
    <?php if ($site->logo()): ?>
    <img src="<?php echo ($site->logo()); ?>" alt="<?php echo $site->title(); ?>">
    <?php endif ?>
  </figure>
  <div class="hamburger-menu">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>
  <nav class="nav-menu">
  <?php include(THEME_DIR_PHP.'menu.php'); ?>
  </nav>
</header>
