<?php
include 'www/functions.php';
$data = grindXML('www/data.xml', true);
$site = $settings->site;
$is_responsive = (bool) (string) $site->isResponsive;
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
<body class="page-home">
  <!-- Header -->
  <?php include 'www/templates/_header.php'; ?>
  <!-- Main -->
  <div class="home-wrap">
    <section class="first-bloc">
      <div class="container">
        <div class="flex-wrap">
          <div class="heading">
            <figure>
              <picture>
                 <source
                    media="(min-width: 1024px)"
                    srcset="/dist/img/image-web-3-desktop.jpg">
                 <img src="/dist/img/image-web-3-mobile.jpg"
                 alt="a cute kitten">
              </picture>
            </figure>
            <div class="infos">
              <h1>The Bright Future of Web 3.0?</h1>
              <div class="text">
                <p>We dive into the next evolutiion of the web that claims to put the power of the platforms back into the hands of the people. But is it really fulfilling its promise?</p>
                <a class="btn btn-secondary" href="#">Read more</a>
              </div>
            </div>
          </div>

          <div class="news-bloc">
            <h2>New</h2>
            <ul>
              <li>
                <a href="#" title="Hydrogen VS Electric Cars"></a>
                <h3>Hydrogen VS Electric Cars</h3>
                <p>Will hydrogen-fueled xars ever catch up to EVs?</p>
              </li>
              <li>
                <a href="#" title="The Downsides of AI Artistry"></a>
                <h3>The Downsides of AI Artistry</h3>
                <p>What are the possible adverse effects of on-demand AI image generation?</p>
              </li>
              <li>
                <a href="#" title="Is VC Funding Drying Up?"></a>
                <h3>Is VC Funding Drying Up?</h3>
                <p>Private funding by VC firms is down 50% YOY. We take a look at what that means.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="second-news-bloc">
      <div class="container">
        <ul>
          <li class="card-news">
            <figure>
              <img src="/dist/img/image-retro-pcs.jpg" alt="" />
            </figure>
            <a href="#" title="Revivinng Retro PCs"></a>
            <div class="card-title">Reviving Retro PCs</div>
            <p>What happens when old PCs are given modern upgrades?</p>
          </li>
          <li class="card-news">
            <figure>
              <img src="/dist/img/image-top-laptops.jpg" alt="" />
            </figure>
            <a href="#" title="Top 10 Laptops of 2022"></a>
            <div class="card-title">Top 10 Laptops of 2022</div>
            <p>Our best picks for various needs and budgets</p>
          </li>
          <li class="card-news">
            <figure>
              <img src="/dist/img/image-gaming-growth.jpg" alt="" />
            </figure>
            <a href="#" title="The Growth of Gaming"></a>
            <div class="card-title">The Growth of Gaming</div>
            <p>How the pandemix has sparked fresh opportunities</p>
          </li>
        </ul>
      </div>
    </section>
  </div>

  <!-- Scripts -->
  <script src="dist/js/main.min.js"></script>
</body>
</html>
