<?php
  session_start();
  require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="robots" content="noindex" />
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Magyar Gyermekmentő Alapítvány</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
          <img src="img/logo.png" alt="logo">
        </a>
        <ul>
          <li><a href="index.php">Főoldal</a></li>
          <li><a href="support.php">Támogatás</a></li>
          <li><a href="galery.php">Galéria</a></li>
          <li><a href="contact.php">Kapcsolat</a></li>
        </ul>
      </nav>
      <div class="header-login">
            <form action="https://www.google.com/search" method="GET">
                  <input type="hidden" name="ie" value="UTF-8" />
                  <input type="hidden" name="oe" value="UTF-8" />
                  <input type="hidden" name="domains" value="mgya.org" />
                  <input type="hidden" name="sitesearch" value="mgya.org" />
            <input class="search-txt" type="text" name="q" placeholder="Keresés az oldalon">
            </form>
        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Felhasználónév/E-mail">
            <input type="password" name="pwd" placeholder="Jelszó">
            <button type="submit" name="login-submit">Belépés</button>
          </form>
          <a href="signup.php" class="header-signup">Regisztráció</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Kijelentkezés</button>
          </form>';
        }
        ?>
      </div>
    </header>