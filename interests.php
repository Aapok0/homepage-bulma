<?php
$pageTitle = 'Interests';
$pageDescription = 'Personal interests in fitness, music, hiking, cooking, and outdoor activities.';
$heroBackground = 'img/background-5.jpg';
$interests = include __DIR__ . '/php/interests-data.php';
$pageHeadingTitle = 'Interests';
$pageHeadingClass = 'title is-size-3 is-size-4-mobile is-family-code has-text-centered';
include __DIR__ . '/components/layout-start.php';
?>

      <?php include __DIR__ . '/components/page-heading.php'; ?>

      <?php foreach ($interests as $interestIndex => $interest): ?>
      <?php include __DIR__ . '/components/interest-section.php'; ?>
      <?php endforeach; ?>

<?php include __DIR__ . '/components/layout-end.php'; ?>
