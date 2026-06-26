<?php
$pageTitle = 'Resume';
$pageDescription = 'Education, work experience, certifications, and references for Aapo Kokko.';
$heroBackground = 'img/background-3.jpg';
$heroBoxClasses = 'background-2 is-transparent';
$resumeData = include __DIR__ . '/php/resume-data.php';
$pageHeadingTitle = 'Resume';
include __DIR__ . '/components/layout-start.php';
require_once __DIR__ . '/components/resume-section.php';

$textClass = 'is-size-5-widescreen is-size-6-desktop is-size-7-mobile';
?>

      <?php include __DIR__ . '/components/page-heading.php'; ?>

      <div class='columns'>
        <?php foreach ($resumeData['columns'] as $column): ?>
        <div class='column background-2'>
          <?php foreach ($column as $sectionIndex => $section): ?>
          <?php
            $section['last'] = $sectionIndex === array_key_last($column);
            render_resume_section($section, $textClass);
          ?>
          <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
      </div>

      <?php
      $pageCta = $resumeData['cta'];
      include __DIR__ . '/components/page-cta.php';
      ?>

<?php include __DIR__ . '/components/layout-end.php'; ?>
