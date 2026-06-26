<?php
$pageHeadingTitle = $pageHeadingTitle ?? '';
$pageHeadingClass = $pageHeadingClass ?? 'title is-size-2 is-size-3-mobile is-family-code has-text-centered';
?>
<h1 class='<?= htmlspecialchars($pageHeadingClass, ENT_QUOTES, 'UTF-8') ?>'><?= htmlspecialchars($pageHeadingTitle, ENT_QUOTES, 'UTF-8') ?></h1>
