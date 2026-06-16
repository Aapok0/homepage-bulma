<?php
  $hosts = include __DIR__ . '/../config/hosts.php';
  $canonical_host = $hosts['canonical'];
  $current = basename($_SERVER['SCRIPT_NAME'], '.php');

  $pages = [
    ['file' => 'index', 'href' => './', 'label' => 'Home', 'icon' => 'home'],
    ['file' => 'about', 'href' => 'about', 'label' => 'About', 'icon' => 'about'],
    ['file' => 'resume', 'href' => 'resume', 'label' => 'Resume', 'icon' => 'resume'],
    ['file' => 'skills', 'href' => 'skills', 'label' => 'Skills', 'icon' => 'skills'],
    ['file' => 'interests', 'href' => 'interests', 'label' => 'Interests', 'icon' => 'interests'],
  ];

  foreach ($pages as $page) {
    $active = ($current === $page['file']);
    $icon = $active ? $page['icon'] . '-dark' : $page['icon'];
    $classes = 'navbar-item is-flex-direction-column is-justify-content-space-around';

    if ($active) {
      $classes .= ' is-open has-text-weight-bold';
    }

    echo '<a class="' . $classes . '" href="' . $page['href'] . '">';
    echo '<img class="mb-1" src="img/' . $icon . '.png" alt="' . $page['label'] . '">';
    echo $page['label'];
    echo '</a>';
  }

  echo '<a class="navbar-item is-flex-direction-column is-justify-content-space-around" href="https://' . $canonical_host . '/v1/">';
  echo '<img class="mb-1" src="img/home.png" alt="Home-Version 1">Home v1';
  echo '</a>';
?>
