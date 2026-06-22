<?php
$pageTitle = 'Skills';
$pageDescription = 'DevOps, infrastructure, monitoring and development skills grouped by experience level.';
$skillColumns = include __DIR__ . '/php/skills-data.php';
$skillTiers = include __DIR__ . '/php/skills-tiers.php';
$heroBackground = 'img/background-4.jpg';
$heroBoxClasses = 'has-text-centered background-2 is-transparent';
$pageHeadingTitle = 'Skills';
$pageCta = ['href' => 'interests', 'label' => 'Read about my interests'];
include __DIR__ . '/components/layout-start.php';
?>

      <?php include __DIR__ . '/components/page-heading.php'; ?>

      <div class='box background-1 skill-legend content-section mb-5'>
        <p class='is-size-6 is-size-7-mobile mb-3'>Experience levels reflect how I've used each tool in practice.</p>
        <div class='tags are-medium is-justify-content-center'>
          <?php foreach ($skillTiers as $tier): ?>
          <span class='tag <?= htmlspecialchars($tier['class'], ENT_QUOTES, 'UTF-8') ?>'><?= htmlspecialchars($tier['label'], ENT_QUOTES, 'UTF-8') ?></span>
          <?php endforeach; ?>
        </div>
      </div>

      <div class='columns box background-2'>
        <?php foreach ($skillColumns as $column): ?>
        <div class='column m-1'>
          <h2 class='title is-size-3 is-size-4-mobile is-family-code'><?= htmlspecialchars($column['column_title'], ENT_QUOTES, 'UTF-8') ?></h2>
          <div class='is-flex-direction-column background-1'>
            <?php foreach ($column['categories'] as $category): ?>
            <div class='box background-1 content-section skill-category'>
              <h3 class='subtitle is-size-4 is-size-5-mobile is-family-code mb-3'><?= htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8') ?></h3>
              <div class='tags'>
                <?php foreach ($category['items'] as $item): ?>
                <?php $tier = $skillTiers[$item['tier']] ?? $skillTiers['working']; ?>
                <span class='tag is-medium <?= htmlspecialchars($tier['class'], ENT_QUOTES, 'UTF-8') ?>' title='<?= htmlspecialchars($tier['label'], ENT_QUOTES, 'UTF-8') ?>'><?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') ?></span>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <?php include __DIR__ . '/components/page-cta.php'; ?>

<?php include __DIR__ . '/components/layout-end.php'; ?>
