<?php
$pageTitle = 'Skills';
$pageDescription = 'Technical skills in DevOps, cloud, development, and tooling.';
$skillColumns = include __DIR__ . '/php/skills-data.php';
include(dirname(__FILE__).'/components/header.php')
?>

<?php
include(dirname(__FILE__).'/components/navbar.php')
?>

<!-- Hero banner and skills in two columns -->
<section class='hero is-fullheight has-background'>
  <img class='hero-background' src='img/background-4.jpg' alt='Background image of Pältsan'>

  <!-- Hero box start -->
  <div class='hero-body'>
    <div class='container hero-text box has-text-centered background-2 is-transparent'>
      <h1 class='title is-size-2 is-size-3-mobile is-family-code'>Skills</h1>

      <!-- Columns start -->
      <div class='columns box background-2'>
        <?php foreach ($skillColumns as $column): ?>
        <div class='column m-1'>
          <h2 class='title is-size-3 is-size-4-mobile is-family-code'><?= htmlspecialchars($column['column_title'], ENT_QUOTES, 'UTF-8') ?></h2>
          <div class='is-flex-direction-column background-1'>

            <?php foreach ($column['categories'] as $category): ?>
            <h3 class='subtitle is-size-3-widescreen is-size-4-desktop is-size-4-mobile'><?= htmlspecialchars($category['title'], ENT_QUOTES, 'UTF-8') ?></h3>
            <svg class='skillbar bar_<?= htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8') ?>' viewBox='0 0 100 100' data-percent='<?= (int) $category['percent'] ?>'>
              <circle cx='50' cy='50' r='40' />
              <text id='nm_<?= htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8') ?>' class='skilltext' x='50' y='-50' alignment-baseline='middle' stroke-width='1px' stroke='#F7F8F7' text-anchor='middle'><?= (int) $category['percent'] ?></text>
            </svg>

            <div class='box background-1'>
              <?php foreach ($category['items'] as $item): ?>
              <h3 class='is-size-5 is-size-6-mobile'><?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') ?></h3>
              <progress class='progress is-warning' value='<?= (int) $item['percent'] ?>' max='100'><?= (int) $item['percent'] ?>%</progress>
              <?php endforeach; ?>
            </div>
            <?php endforeach; ?>

          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- Columns end -->

      <div class='block has-text-centered'>
        <a href='interests.php' class='button is-link is-size-6 is-size-7-mobile has-text-weight-semibold'>Read about my interests</a>
      </div>

    </div>
  </div>
  <!-- Hero box end -->
</section>

<script src='js/progressCircle.js'></script>
<script src='js/progressNumber.js'></script>

<?php
include(dirname(__FILE__).'/components/footer.php')
?>
