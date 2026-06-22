<?php
$textClass = $textClass ?? 'is-size-5-widescreen is-size-6-desktop is-size-7-mobile';
?>
<article class='resume-entry resume-entry-organization'>
  <h3 class='subtitle is-size-5 is-size-6-mobile is-family-code resume-subtitle'><?= htmlspecialchars($entry['org'], ENT_QUOTES, 'UTF-8') ?></h3>
  <?php foreach ($entry['roles'] as $role): ?>
  <div class='resume-role'>
    <?php if (!empty($role['href'])): ?>
    <p class='resume-meta is-family-code <?= $textClass ?>'><a href='<?= htmlspecialchars($role['href'], ENT_QUOTES, 'UTF-8') ?>'><?= htmlspecialchars($role['heading'], ENT_QUOTES, 'UTF-8') ?></a></p>
    <?php else: ?>
    <h4 class='subtitle is-size-6 is-family-code mt-4 mb-1'><?= htmlspecialchars($role['heading'], ENT_QUOTES, 'UTF-8') ?></h4>
    <?php endif; ?>
    <?php if (!empty($role['dates'])): ?>
    <p class='resume-meta is-family-code <?= $textClass ?>'><?= htmlspecialchars($role['dates'], ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>
    <?php foreach ($role['details'] ?? [] as $detail): ?>
    <p class='resume-detail <?= $textClass ?>'><?= htmlspecialchars($detail, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endforeach; ?>
  </div>
  <?php endforeach; ?>
</article>
