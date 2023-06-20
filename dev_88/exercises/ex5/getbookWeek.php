<?php
  include 'db.php';

  $query  = "SELECT * FROM tbl_88_books WHERE id=".$_GET["bookId"];
  $result = mysqli_query($connection, $query);

  if(!$result) { 
  die("can not connect to the databace");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"crossorigin="anonymous"></script>
  <!--bootstrap-->
  <link rel="stylesheet" type="text/css" href="css/style5.css">
  <title>Get Book Week - Nave Maymon</title>
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
      <a class="navbar-brand" href="index.php">BookStore</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link disabled" aria-current="page" href="index.php">Home</a>
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
    <div class="container"><br>
    <h2>Your choice</h2>
      <div id="carouselExampleIndicators" class="carousel slide">
        <?php 
          echo '<div class="row justify-content-center">';
          echo '<div class="col-sm-10 col-md-8 py-10 d-flex justify-content-center">';
          echo '<div class="row">';
          echo '<div class="col-sm-12">';
          $row = mysqli_fetch_assoc($result);
          $img1 = $row["img_url_1"];
          $img2 = $row["img_url_2"];
          echo '<div class="col-sm-12">';
          echo '<div class="card mx-auto shadow-lg" style="width: 35rem;"><br>';
          echo '<div class="row justify-content-center">';
          echo '<div class="col-6">';
          echo '<img src="' . $img1 . '" class="rounded mx-auto d-block img-fluid" style="max-width: 200px;">';
          echo '</div>';
          echo '<div class="col-6">';
          echo '<img src="' . $img2 . '" class="rounded mx-auto d-block img-fluid" style="max-width: 200px;">';
          echo '</div>';
          echo '</div>';
          echo '<div class="card-body">';
          echo '<h5 class="card-title text-center">' . $row["name_books"] . '</h5>';
          echo '<h6 class="card-text">Description:<br> ' . $row["description_book"] . '</h6>';
          echo '<h6 class="price">Price: '.$row["price_books"] . '</h6>';
          echo '<h6 class="author">Author: '.$row["author"] . '</h6>';
          echo '<h6 class="category">Category: '.$row["category"] . '</h6>';
          echo '</div></div></div></div>';        
          echo '</div></div></div>';
          ?> 
      </div>
      <br><a href="index.php" class="btn btn-primary">Previous Page</a>
    </div>
  </main>
  <footer></footer>
  <script src="js/getbookid.js"></script>
</body>
</html>
<?php
  mysqli_close($connection);
?>

