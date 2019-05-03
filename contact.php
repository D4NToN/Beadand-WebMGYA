<?php
  require "header.php";
?>
    <main>
      <div class="wrapper-main">
        <section class="section-default">
        <h3 class="contact-text">KAPCSOLAT</h3>

        <h4 class="index-text">Az Alapítvány postacíme: 1519 Budapest, Pf.: 428<br/>Az Alapítvány székhelye: 1146 Budapest, Bethesda u. 10.<br/>E-mail: info@mgya.org</h4>
        <h4 class="contact-1">Doroszlai Richárd<br/>Alapítványi titkár<br/>+36-20-520-8940<br/>rdoroszlai@mgya.org</h4>

        <h4 class="contact-2">Dr. Gesztes Éva<br/>Szakmai igazgató<br/>+36-20-523-6190<br/>egesztes@mgya.org</h4>

        <h4 class="contact-3">Bükkösi Krisztián<br/>Oktatásszervező<br/>oktatas@mgya.org</h4><br/><br/>

        <form action="include/message.inc.php" method="post">
            <label>Név: <input class="contact-input" type="text" name="name"></label><br/><br/>
            <label>Üzenet: <textarea class="contact-input" cols="45" rows="5" name="message" style="margin: 0px;
              width: 899px; height: 143px;"></textarea></label>
            <button class="contact-button" type="submit" name="send-submit">Elküldés</button>
          </form>
        <br/>

        <img class="contact-pics1" src="img/Pics1.jpg" alt="Car">
        <img class="contact-pics2" src="img/Pics2.jpg" alt="The team" align="right">

        <br/>
        <img class="contact-pics3" src="img/tamogato-bg.jpg" alt="The team" align="bottom">
          
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>
