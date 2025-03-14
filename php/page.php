<article>
<!-- Title -->
  <h1 class="page-title"><?php echo $page->title(); ?></h1>

<?php if (!$page->isStatic() && !$url->notFound()): ?>
<!-- Page data -->
  <p class="page-data"><?php echo $page->date(); ?></p>
<?php endif ?>

<!-- Table of contents -->
<?php if ($page->custom('enableToc') === true): ?>
  <div id="toc"></div>
<?php endif ?>

<!-- Content -->
  <div class="content">
    <?php echo $page->content(); ?>
  </div>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>

</article>
