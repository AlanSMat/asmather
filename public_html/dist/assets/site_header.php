<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?php echo CSS_URL ?>/main.css" />
  <title>Portfolio - <?php echo $current_page ?></title>
</head>

<body id="bg-img">
  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>
    <nav class="menu">
      <div class="menu-branding">
        <div class="portrait"></div>
      </div>
      <ul class="menu-nav">
        <?php 
          $json_file_string = file_get_contents(NAV_JSON);
          $json_array = json_decode($json_file_string, true);
          
          foreach ($json_array as $nav_item) {
            ?>
        <li class="nav-item <?php if($nav_item[0]["page_title"] == trim($current_page)) { echo "current"; } ?>">
          <a class="nav-link"
            href="<?php echo SITE_URL ?>/<?php echo $nav_item[0]["dir"] ?>"><?php echo $nav_item[0]["page_title"] ?>
            <span class="sr-only"></span></a>
        </li>
        <?php 
          }
          ?>
      </ul>
    </nav>
  </header>