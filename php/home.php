<article>
<?php if (empty($content)) : ?>
  <?php $language->p('No pages found') ?>
<?php endif ?>

<!-- Title -->
<?php if ( $WHERE_AM_I == 'home' ): ?>
  <h1 class="welcome">Welcome</h1>
<?php elseif ( $WHERE_AM_I == 'category' ): ?>
  <h1 class="category"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg><?php echo $page->category(); ?></h1>
<?php endif ?>

  <!-- Post -->
  <ul class="posts-list">
    <?php foreach ($content as $page): ?>
    <li><a href="<?php echo $page->permalink(); ?>"><span class="page-title"><?php echo $page->title(); ?></span></a></li>
    <?php endforeach ?>
  </ul>

<?php if (Paginator::numberOfPages() > 1) : ?>
<!-- Pagination -->
  <nav class="paginator">
    <ul class="pagination">

  <!-- Previous button -->
    <?php if (Paginator::showPrev()) : ?>
      <li>
        <a href="<?php echo Paginator::previousPageUrl() ?>">&#9664; 前へ</a>
      </li>
    <?php endif; ?>

  <!-- Page number -->
      <li>
        <?php echo Paginator::currentPage() ?> / <?php echo Paginator::numberOfPages() ?>
      </li>

  <!-- Next button -->
    <?php if (Paginator::showNext()) : ?>
      <li>
        <a href="<?php echo Paginator::nextPageUrl() ?>">次へ &#9654;</a>
      </li>
    <?php endif; ?>

    </ul>
  </nav>
<?php endif ?>
</article>
