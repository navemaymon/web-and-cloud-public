
<?php
  include 'db.php';

  $query  = "SELECT * FROM tbl_88_books WHERE id=".$_GET["id"];
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
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almendra+Display&display=swap" rel="stylesheet">
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
            <h1>Book info:</h1>
            <?php 
                echo '<div class="row">';
                $row = mysqli_fetch_assoc($result);
                $img1 = $row["img_url_main"];
                $img2 = $row["img_url_seccond"];
                echo '<div class="col-sm-12">';
                echo    '<div class="card">';
                echo        '<img src="' . $img1 . '"class="rounded mx-auto d-block">';
                echo        '<img src="' . $img2 . '"class="rounded mx-auto d-block">';
                echo        '<div class="card-body">';
                echo          '<h5 class="card-title text-center">' . $row["name_books"] . '</h5>';
                echo        '<h5 class="card-text">' . $row["description_book"] . '</h5></div>';
                echo        '<h6 class="price">Price: '.$row["price_books"] . '</h6>';
                echo        '<h6 class="author">Author: '.$row["author"] . '</h6>';
                echo        '<h6 class="category">Category: '.$row["category"] . '</h6>';
                echo '</div></div></div>';
                
                echo '</div>';
            ?> 
  <!-- <br><h2>Your Choice: </h2><br>
  <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 </div> -->
  <?php
    // $bookId = $_GET["bookId"];
    // $query = "SELECT * FROM tbl_88_books where id=" . $id;
    // $result = mysqli_query($connection, $query);
    // if ($result) {
    //     $row = mysqli_fetch_assoc($result);
    // } else
    //     die("DB query failed.");
    // $img1 = $row["img_url_1"];
    // if (!$img1)
    //     $img1 = '../img';
    // $img2 = $row["img_url_2"];
    // if (!$img2)
    //     $img2 = '../img';
    // $categoryId = $row["category"];
    ?>
  </main>
  <footer></footer>
  <script src="js/getbookid.js"></script>
</body>
</html>
<?php
  mysqli_close($connection);
?>

