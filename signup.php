<?php
  require "header.php";
?>
    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <h1>Regisztrációs lap</h1>
          <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Minden mezőt töltsön ki!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Érvénytelen felhasználónév vagy E-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Érvénytelen felhasználónév!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Érvénytelen e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">A jelszavak nem egyeznek meg!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">A felhasználónév már foglalt!</p>';
            }
          }
          
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Sikeres regisztráció!</p>';
            }
          }
          ?>

          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <?php

            if (!empty($_GET["uid"])) {
              echo '<input type="text" name="uid" placeholder="Felhasználónév" value="'.$_GET["uid"].'">';
            }
            else {
              echo '<input type="text" name="uid" placeholder="Felhasználónév">';
            }

            if (!empty($_GET["mail"])) {
              echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
            }
            else {
              echo '<input type="text" name="mail" placeholder="E-mail">';
            }
            ?>
            <input type="password" name="pwd" placeholder="Jelszó">
            <input type="password" name="pwd-repeat" placeholder="Jelszó ismét">
            <button type="submit" name="signup-submit">Beküldés</button>
          </form>
        </section>
      </div>
    </main>
<?php
  require "footer.php";
?>
