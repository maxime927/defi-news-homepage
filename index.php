<?php
include 'www/functions.php';
$data = grindXML('www/data.xml', true);
$site = $settings->site;
$is_responsive = (bool) (string) $site->isResponsive;
if (isset($_GET['page']) && file_exists('www/templates/pages/'.$_GET['page'].'.php')) {
    $page = $_GET['page'];
}
$include = isset($page) ? 'www/templates/pages/'.$page.'.php' : 'www/templates/__index.php';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?=$site->title?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="description" content="<?=$site->desc?>">
  <!-- Styles -->
  <link rel="stylesheet" href="dist/css/main.min.css">
  <!-- Favicon -->
  <meta name="apple-mobile-web-app-title" content="Kernix">
  <meta name="application-name" content="Kernix">
<link rel="apple-touch-icon" sizes="x" href="dist/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="dist/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicons/favicon-16x16.png">
<link rel="manifest" href="dist/img/favicons/site.webmanifest">
<link rel="mask-icon" href="dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="dist/img/favicons/favicon.ico">
<meta name="apple-mobile-web-app-title" content="News-homepage">
<meta name="application-name" content="News-homepage">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-config" content="dist/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff"></head>
<body class="page-<?=isset($page) ? ($page == 'home' ? 'home' : $page.' not-home') : 'template'?>">
  <!-- Header -->
  <?php include 'www/templates/_header.php'; ?>
  <!-- Main -->
  <?php include $include; ?>
  <!-- Footer -->
  <?php include 'www/templates/_footer.php'; ?>
  <!-- Scripts -->
  <script src="dist/js/main.min.js"></script>
</body>
</html>
