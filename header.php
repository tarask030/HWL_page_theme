<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" />
    <title>Human Work Logistic</title>
    <link rel="stylesheet" href= "/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
    <div id= "header">
      <div class="logo_header">
        <a href="#">
          <img src="<?php echo get_stylesheet_directory_uri();?>/logo/logo_header.svg" alt="">
        </a>
      </div>


      <div class="hamburger">
        <ul class="main-menu">
          <li><a href="index.php">START</a></li>
          <li class="menu-children">
              <a href="services.php">USŁUGI</a>
              <ul>
                  <li><a href="services.php">OUTSOURCING LOGISTYCZNY</a></li>
                  <li><a href="services.php">OUTSOURCING PRODUKCYJNY</a></li>         
              </ul>
          </li>
          <li><a href="client_zone.php">STREFA KLIENTA</a></li>
          <li><a href="aboutus.php">O NAS</a></li>
          <li class="active"><a href="#">BLOG</a></li>       
        </ul>
      </div>


      <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span>
          </span>
        </label>

          <ul class="menu__box">
            <div class="logo_header">
              <img src="<?php echo get_stylesheet_directory_uri();?>/logo/logo_header.svg" alt="">
            </div>
            <li><a class="menu_item_first" href="index.php">START</a></li>

            <input type = "checkbox" name = "one" id = "one">
            <label for = "one">
              <span class="menu_span">USŁUGI <img src="<?php echo get_stylesheet_directory_uri();?>/images/sharp.svg"></span>
                <ul class = "submenu">
                  <li><a class="submenu"href="services.php">OUTSOURCING LOGISTYCZNY</a></li>
                  <li><a class="submenu"href="services.php">OUTSOURCING PRODUKCYJNY</a></li>
                </ul>
            </label>
            <li><a class="menu__item_second" href="client_none.php">STREFA KLIENTA</a></li>        
            <li><a class="menu__item" href="aboutus.php">O NAS</a></li>
            <li><a class="menu__item" href="#">BLOG</a></li>
          </ul>
      </div>
    </div>
  </header>