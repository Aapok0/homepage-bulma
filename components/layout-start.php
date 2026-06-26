<?php
include_once __DIR__ . '/header.php';
include_once __DIR__ . '/navbar.php';

$heroBackground = $heroBackground ?? 'img/background-1.jpg';
$heroAlt = $heroAlt ?? 'Background image of Pältsan';
$heroBoxClasses = $heroBoxClasses ?? 'has-text-centered background-1 is-transparent';
?>
<section class='hero is-fullheight has-background'>
  <img class='hero-background' src='<?= htmlspecialchars($heroBackground, ENT_QUOTES, 'UTF-8') ?>' alt='<?= htmlspecialchars($heroAlt, ENT_QUOTES, 'UTF-8') ?>'>

  <div class='hero-body'>
    <div class='container hero-text box <?= htmlspecialchars($heroBoxClasses, ENT_QUOTES, 'UTF-8') ?>'>
