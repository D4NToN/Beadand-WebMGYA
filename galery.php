<?php
  require "header.php";
?>
    <main>
      <section class="gallery-links">
      <div class="wrapper">
                <h2 align="center">Galéria</h2>
                
          <div class="gallery-container">
          <?php

          include_once 'includes/gallery.dbh.inc.php';

          $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL művelet hiba!";
          } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
              echo '<a href="#">
                <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                <h3>'.$row["titleGallery"].'</h3>
                <p>'.$row["descGallery"].'</p>
              </a>';
            }
          }
          ?>
        </div><br/>

        <?php
        if (isset($_SESSION['id'])) {
          echo '<div class="gallery-upload">
            <h2>Kép közzététele</h2>
            <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
            <input type="text" name="filename" placeholder="Fájlnév...">  
            <input type="text" name="filetitle" placeholder="Képcím...">
            <input type="text" name="filedesc" placeholder="Leírás...">
            <input type="file" name="file">
            <button type="submit" name="submit">Feltöltés</button>
            </form>
          </div>';
        }
        ?>
          
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>
