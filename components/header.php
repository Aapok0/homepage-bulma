<?php
include_once(dirname(__FILE__).'/../config/chttps.php');

$pageTitle = $pageTitle ?? 'Curriculum Vitae';
$pageDescription = $pageDescription ?? 'Curriculum vitae and homepage for Aapo Kokko';
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <!-- META INFROMATION -->
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> - Aapo Kokko</title>
    <meta charset='UTF-8'>
    <meta name='description' content='<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>'>
    <meta name='author' content='Aapo Kokko'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- CSS AND FAVICON -->
    <link rel='stylesheet' type='text/css' href='css/main.css'>
    <link rel='icon' type='image/x-icon' href='./favicon.ico'>

    <!-- SCRIPTS -->
    <script src='js/navToggle.js'></script>
  </head>
  <body>
