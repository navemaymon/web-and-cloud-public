<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Productphp - Nave Maymon</title>
    </head>
    <body>
        <section>  
            <?php
                $cookie = $_GET['cookie'];
                $weight = $_GET['weight'];
                $nameOfTheOrderer = $_GET['nameOfTheOrderer'];
                $address = $_GET['address'];
                $isValidCo = ($cookie == "chocolateChips") || ($cookie == "blueberryMuffins") || ($cookie == "browniesCookies") || ($cookie == "Cinnabon");
                $isValidWe = ($weight == 1) || ($weight == 2) || ($weight == 4);
                echo $cookie . " " . $weight . " " . $nameOfTheOrderer . " " . $address;
                if ($isValidCo == $isValidWe)
                    echo "<h2>The order is on the way.</h2>";
                
                else
                    echo  "<h2>Sorry, out of stock.</h2>";
            ?>  
        </section>
    </body>
</html>