<?php if (!empty($pageCta)): ?>
<div class='block has-text-centered'>
  <a href='<?= htmlspecialchars($pageCta['href'], ENT_QUOTES, 'UTF-8') ?>' class='button is-link is-size-6 is-size-7-mobile has-text-weight-semibold'><?= htmlspecialchars($pageCta['label'], ENT_QUOTES, 'UTF-8') ?></a>
</div>
<?php endif; ?>
