<?php
  include "db.php";
  $query = "SELECT * FROM tbl_88_books";
  $result = mysqli_query($connection, $query);

  if (isset($_GET["category"])) {
    $showData = $_GET["category"];
    echo $showData;
    if (strcasecmp($showData, 'General') == 0) {
      $query = "SELECT * FROM tbl_88_books";
    } else {
      $query = "SELECT * FROM tbl_88_books WHERE category = ". $showData;
    }
  } else {
    $query = "SELECT * FROM tbl_88_books";
  }
  $result = mysqli_query($connection, $query);

  if(!$result) {
  die("can not connect to the DATA BASE");
  }
?>
<?php if (isset($_GET['category'])) {
                echo $showData;
                                }
            else {
                 echo '';
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
      <a class="navbar-brand" href="index.php">BookStore</a>
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
  <br>
  <h2>Recommended books for you</h2>
  <br>
  <h5>Select a category:</h5>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Options</button>
    <ul class="dropdown-menu" id="dropmenu">
      <?php
        // Read categories from the JSON file
        $categoriesJson = file_get_contents('data/categories.json');
        $categories = json_decode($categoriesJson, true)['categories'];

        // Generate dropdown options
        foreach ($categories as $category) {
          echo '<li><a class="dropdown-item" href="?category=' . $category . '">' . $category . '</a></li>';
        }
      ?>
    </ul>
  </div>

  <?php
    if (isset($_GET['category'])) {
      echo $showData; // Display book data for the selected category
    } else {
      echo '';
    }
  ?>
</div>

    <!-- <div class="container">
    <br><h2>Recommended books for you</h2><br>
    <h5>Select a category:</h5>
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Options</button>
      <ul class="dropdown-menu" id="dropmenu"> -->
        <!-- <?php
            // // Read categories from the JSON file
            // $categoriesJson = file_get_contents('categories.json');
            // $categories = json_decode($categoriesJson, true)['categories'];

            // // Generate dropdown options
            // foreach ($categories as $category) {
            //   echo '<li><a class="dropdown-item" href="?category=' . $category . '">' . $category . '</a></li>';
           //  }
          ?> -->
      <!-- </ul> -->
  <!-- </div> -->
  <?php
    // if (isset($_GET['category'])) {
    //   echo $showData; // Display book data for the selected category
    // } else {
    //   echo '';
    // }
  ?>
</div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-10 col-md-12 py-10 d-flex justify-content-center">
          <div class="card-group">
              <?php  
                while($row = mysqli_fetch_assoc($result)) { 
                  $img = $row["img_url_1"];
                  echo    '<div class="col-16 col-sm-6 col-md-4 col-lg-2 mb-4">';
                  echo        '<div class="card" style="width: 18rem;">';
                  echo        '<img src="' . $img . '"class="card-img-top">';
                  echo        '<div class="card-body">';
                  echo          '<h5 class="card-title text-center">' . $row["name_books"] . '</h5>';
                  echo        '<div class="card-footer text-center"><a href="getbookweek.php?bookId=' . $row["id"] . '"class="btn btn-primary">More details!</a>';
                  echo '</div></div></div>';
                  }
                ?>
            </div> 
          </div>    
        </div>
      </div>
    </div>
  </main>
  <footer></footer>
  <script src="js/getbookid.js"></script>
</body>
</html>
<?php
  mysqli_close($connection);
?>
