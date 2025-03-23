<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Bludit">
  <?php echo Theme::metaTags('title'); ?>
  <?php echo Theme::metaTags('description'); ?>
  <?php echo Theme::favicon('img/favicon.png'); ?>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=lato:400,700" rel="stylesheet" />
  <?php echo Theme::css('css/style.css'); ?>
  <!-- Load Bludit Plugins: Site head -->
  <?php Theme::plugins('siteHead'); ?>
</head>
<body>

  <!-- Load Bludit Plugins: Site Body Begin -->
  <?php Theme::plugins('siteBodyBegin'); ?>

  <!-- Header -->
  <?php include(THEME_DIR_PHP.'header.php'); ?>

  <!-- Blog Posts -->
  <main>
    <?php include(THEME_DIR_PHP.'sidebar.php'); ?>
    <?php
    if ($WHERE_AM_I == 'page') {
        include(THEME_DIR_PHP.'page.php');
    } else {
        include(THEME_DIR_PHP.'home.php');
    } ?>
  </main>

  <!-- Footer -->
  <?php include(THEME_DIR_PHP.'footer.php'); ?>

  <!-- Script -->
  <script>
  <?php include(THEME_DIR_JS.'script.js'); ?>
  <?php include(THEME_DIR_JS.'smoothscroll.js'); ?>
  <?php include(THEME_DIR_JS.'page-top-button.js'); ?>
  <?php include(THEME_DIR_JS.'toc.js'); ?>
  </script>

  <!-- Load Bludit Plugins: Site Body End -->
  <?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>
