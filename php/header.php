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
    <a href="<?php echo Theme::siteUrl() ?>">ホーム</a>
    <a href="<?php echo Theme::siteUrl() ?>about/">About</a>
    <a href="<?php echo Theme::siteUrl() ?>chara-indices">キャラ別インデックス</a>
    <a href="<?php echo Theme::siteUrl() ?>keyword-index">キーワード索引</a>
    <a href="<?php echo Theme::siteUrl() ?>chara-data">キャラ基本データ</a>
    <a href="<?php echo Theme::siteUrl() ?>arekore">あれこれ</a>
    <a href="<?php echo Theme::siteUrl() ?>updates">更新履歴</a>
    <a href="https://wavebox.me/wave/7namvh7yg7t9sg8l/">Wavebox</a>
  </nav>
</header>
