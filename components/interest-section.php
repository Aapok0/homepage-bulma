<?php
$textClass = 'is-size-5-widescreen is-size-6-desktop is-size-7-mobile has-text-left';
$reverseOnWide = ($interestIndex ?? 0) % 2 === 1;
?>
<section class='content-section box background-1 interest-section-wrap mb-5<?= $reverseOnWide ? ' is-reversed' : '' ?>'>
  <div class='interest-section-media'>
    <img src='<?= htmlspecialchars($interest['image']['src'], ENT_QUOTES, 'UTF-8') ?>' alt='<?= htmlspecialchars($interest['image']['alt'], ENT_QUOTES, 'UTF-8') ?>' loading='lazy'>
  </div>
  <div class='interest-section-content'>
    <h2 class='subtitle is-size-5 is-size-6-mobile is-family-code'><?= htmlspecialchars($interest['title'], ENT_QUOTES, 'UTF-8') ?></h2>
    <ul class='interest-list <?= $textClass ?>'>
      <?php foreach ($interest['blocks'] as $block): ?>
      <li>
        <?= htmlspecialchars($block['text'], ENT_QUOTES, 'UTF-8') ?>
        <?php if (!empty($block['items'])): ?>
        <ul class='interest-sublist'>
          <?php foreach ($block['items'] as $item): ?>
          <li><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
