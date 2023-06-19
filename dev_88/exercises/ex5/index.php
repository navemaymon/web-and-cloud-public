<?php
  include "db.php";
  $query = "SELECT * FROM tbl_88_books";
  $result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almendra+Display&display=swap" rel="stylesheet">
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <!--bootstrap-->
  <link rel="stylesheet" type="text/css" href="css/style5.css">
  <title>Book Week - Nave Maymon</title>
</head>
<body>
  <header>
  </header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">BookStore</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link disabled" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Best Seller</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">New Books</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
  <div class="container">
    <br><h2>Recommended books for you</h2><br>
    <div class="row justify-content-center">
      <div class="col-sm-10 col-md-8 py-10">
        <div class="card-group">
          <div class="card" style="width: 18rem;">
            <?php  
              echo '<div class="row">';
              while($row = mysqli_fetch_assoc($result)) { 
                $img = $row["img_url_1"];
                echo        '<img src="' . $img . '"class="card-img-top">';
                echo        '<div class="card-group">';
                echo        '<div class="card-body">';
                echo          '<h5 class="card-title text-center">' . $row["name_books"] . '</h5>';
                echo        '<div class="card-footer text-center"><a href="getbookweek.php?bookId=' . $row["id"] . '"class="btn btn-outline-primary">More details!</a>';
                echo '</div></div></div>';
              }
              echo '</div>';
              ?>
            </div> 
        </div>    
      </div>
    </div>
  </div>
            
  <!-- <div class="container">
    <br><h2>Recommended books for you</h2><br>
    <div class="row justify-content-center">
      <div class="col-sm-10 col-md-8 py-10">
        <div class="card-group">
        <?php
            // $count = 0; 
            // while($row = mysqli_fetch_assoc($result)) {
            //   if ($count % 3 == 0) {
            //     echo '<div class="row"><br>';
            //   }
            //   echo '<div class="col-md-4">';
            //   echo '<div class="card">'; 
            //   $img = $row["img_url_1"];
            //   echo '<img src="' . $img . '"class="card-img-top" style="object-fit: cover;">'; 
            //   echo '<div class="card-body">';
            //   echo '<h5 class="card-title text-center">' . $row["name_books"] . '</h5>';
            //   echo '<div class="card-footer text-center"><a href="getbookweek.php?bookId=' . $row["id"] . '"class="btn btn-outline-primary">More details!</a>';
            //   echo '</div></div></div></div>';
            //   $count++;
            //   if ($count % 3 == 0) {
            //     echo '</div>';

            //   }
            // }
          ?>
        </div> 
      </div>    
    </div>
  </div> -->
  
    <!-- <div class="container">
      <div id="Almendra">
        <br><h2>Recommended books for you</h2><br>
      </div> -->
      <!-- <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8 py-10">
          <div class="card-group">
           <div class="card" style="width: 18rem;">
              <img src="img/Moana.jpeg" class="card-img-top" alt="Moana">
              <div class="card-body">
                <h5 class="card-title text-center">How Far You’ll Go</h5>
                <p class="card-text">TStarting a new journey can be scary. . . But no matter the obstacles you face,
                  with resilience, love, and a sprinkling of magic, who knows how far you’ll go! From Peter Pan and
                  Tinker Bell teaching the Darling children to fly, to Moana finding the courage to voyage across the
                  sea, these lush, watercolor scenes from across Disney’s 100 years of film will inspire readers to make
                  their own mark on the world.</p>
              </div>
              <div class="card-footer text-center">
                <a href="booksdetails.php?id=1" class="btn btn-outline-primary">More details!</a>
              </div>
            </div> -->
            <!-- <div class="card" style="width: 18rem;">
              <img src="img/frozen.jpeg" class="card-img-top" alt="frozen">
              <div class="card-body">
                <h5 class="card-title text-center">Dangerous Secrets: The Story of Iduna and Agnarr</h5>
                <p class="card-text">ixteen-year-old Iduna harbors a dark secret. On the surface, she is an Arendellian
                  village girl, an aspiring inventor, and the best friend of Prince Agnarr, but she is also secretly
                  Northuldra. Ever since the day the forest fell, Arendellians have despised and distrusted Northuldra
                  with a vengeance.</p>
              </div>
              <div class="card-footer text-center">
                <a href="booksdetails.php?id=2" class="btn btn-outline-primary">More details!</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="img/Cinderella.jpeg" class="card-img-top" alt="Cinderella">
              <div class="card-body">
                <h5 class="card-title text-center">So This is Love</h5>
                <p class="card-text">when the Grand Duke appoints her to serve under the king’s visiting sister,
                  Cinderella becomes witness to a grand conspiracy to take the king—and the prince—out of power, as well
                  as a longstanding prejudice against fairies, including Cinderella’s own Fairy Godmother. Faced with
                  questions of love and loyalty to the kingdom, Cinderella must find a way to stop the villains of past
                  and present . . . before it’s too late.</p>
              </div>
              <div class="card-footer text-center">
                <a href="booksdetails.php?id=3" class="btn btn-outline-primary">More details!</a>
              </div>
            </div>
          </div>
          <br><br>
          <div class="card-group">
            <div class="card" style="width: 18rem;">
              <img src="img/aladdin.jpeg" class="card-img-top" alt="aladdin">
              <div class="card-body">
                <h5 class="card-title text-center">Lost Legends: Diamond in the Rough</h5>
                <p class="card-text">Twelve-year-old Aladdin has spent his entire life roaming the desert as a part of a
                  tribe of nomads. He has nothing to his name except the stars in the sky, the clothes on his back, and
                  a peculiar necklace left to him by his late mother. But that doesn’t bother Aladdin—he doesn’t want
                  much. If he had three wishes, he would only ask for one thing: a home. A place to belong.</p>
              </div>
              <div class="card-footer text-center">
                <a href="booksdetails.php?id=4" class="btn btn-outline-primary">More details!</a>
                <button type="button" class="btn btn-outline-primary">More details!</button>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="img/Minnie Mouse.jpeg" class="card-img-top" alt="Minnie">
              <div class="card-body">
                <h5 class="card-title text-center">Minnie Mouse Bedtime Storybook</h5>
                <p class="card-text">Join Minnie and all her friends and snuggle up in this collection of tales! Search
                  for a daffodil thief, attend a sleepover with Daisy, spend the day at the lake with the whole gang and
                  more in this bedtime collection. With six stories and a padded cover, this is sure to be a bedtime
                  favorite year after year!</p>
              </div>
              <div class="card-footer text-center">
                <a href="booksdetails.php?id=5" class="btn btn-outline-primary">More details!</a>
                <button type="button" class="btn btn-outline-primary">More details!</button>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="img/Beauty and the Beast.jpeg" class="card-img-top" alt="belle">
              <div class="card-body">
                <h5 class="card-title text-center">Beauty and the Beast: The Story of Belle</h5>
                <p class="card-text">When Belle’s father is captured, she takes his place as the fearsome Beast’s
                  prisoner. But life in the enchanted castle isn’t as terrible as Belle imagines. She makes friends and
                  sees a kinder side of the Beast. In order to break the spell, the Beast must learn to love another and
                  be loved in return.</p>
              </div>
              <div class="card-footer text-center">
                <button type="button" class="btn btn-outline-primary">More details!</button>
                <a href="./item.php?id=6" class="btn btn-outline-primary">More details</a>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div> -->
  </main>
  <footer></footer>
  <script src="js/getbookid.js"></script>
</body>
</html>
<?php
  mysqli_close($connection);
?>