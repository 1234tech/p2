<?php


# This page will show the results of which food can be eaten based on the form on index.php

require 'logic.php';
require 'data.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Results</title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css"/>
</head>

<body>

<div>
    <h1>
        <?php
        echo "Welcome, " . $_GET['username'] . "!";
        echo "<br>";
        echo "<br>";
        ?>
    </h1>
</div>

<div class="bad">
    <h2>You need to avoid:</h2>

    <?php

    if (isset($_GET['lactose'])) {
        echo "Dairy";
        echo "<br>";
    }
    if (isset($_GET['gluten'])) {
        echo "Gluten";
        echo "<br>";
    }
    if (isset($_GET['mushrooms'])) {
        echo "Mushrooms";
        echo "<br>";
    }
    if (isset($_GET['seafood'])) {
        echo "Seafood";
        echo "<br>";
    }

    if ((!isset($_GET['lactose'])) && (!isset($_GET['gluten'])) && (!isset($_GET['mushrooms'])) && (!isset($_GET['seafood']))) {
        echo "no special food groups";
        echo "<br>";
    }

    ?>
</div>

<div>
    <?php
    if ((!isset($_GET['noMeat'])) && (!isset($_GET['yesMeat']))) {
        echo "You did not indicate if you were a vegetarian.";
        echo "<br>";
    }

    if (isset($_GET['noMeat'])) {
        echo "You are a vegetarian.";
        echo "<br>";
    }

    if (isset($_GET['yesMeat'])) {
        echo "You are not a vegetarian.";
        echo "<br>";
    }

    echo "<br>";
    ?>
</div>

<div>


    <h2>You can eat the following foods:</h2>
    <?php

    echo "Vegetables: " . $veggiesList;
    echo "<br>";
    echo "<br>";

    echo "Fruits: " . $fruitsList;
    echo "<br>";
    echo "<br>";

    # if checkbox is checked, do not display that food array
    # if the 'no' radio button is selected, display meat & seafood
    # if the 'no' radio button is selected, and seafood is checked, display meat

    if (!isset($_GET['lactose'])) {
        echo "Dairy: " . $dairyList;
        echo "<br>";
        echo "<br>";
    }
    if (!isset($_GET['gluten'])) {
        echo "Gluten: " . $glutenList;
        echo "<br>";
        echo "<br>";
    }
    if (!isset($_GET['mushrooms'])) {
        echo "Mushrooms: " . $mushList;
        echo "<br>";
        echo "<br>";
    }
    if (!isset($_GET['seafood']) && (isset($_GET['yesMeat']))) {
        echo "Seafood: " . $seafoodList;
        echo "<br>";
        echo "<br>";
        echo "Meat: " . $meatList;
        echo "<br>";
        echo "<br>";
    }
    if (!isset($_GET['seafood']) && (!isset($_GET['yesMeat'])) && (!isset($_GET['noMeat']))) {
        echo "Seafood: " . $seafoodList;
        echo "<br>";
        echo "<br>";
        echo "Meat: " . $meatList;
        echo "<br>";
        echo "<br>";
    }

    if (!isset($_GET['seafood']) && (isset($_GET['yesMeat'])) && (isset($_GET['noMeat']))) {
        echo "Seafood: " . $seafoodList;
        echo "<br>";
        echo "<br>";
        echo "Meat: " . $meatList;
        echo "<br>";
        echo "<br>";
    }

    if (isset($_GET['seafood']) && (!isset($_GET['yesMeat'])) && (!isset($_GET['noMeat']))) {
        echo "Meat: " . $meatList;
        echo "<br>";
        echo "<br>";
    }

    if (isset($_GET['seafood']) && (isset($_GET['yesMeat'])) && (isset($_GET['noMeat']))) {

    }

    if (isset($_GET['seafood']) && (isset($_GET['yesMeat']))) {
        echo "Meat: " . $meatList;
        echo "<br>";
        echo "<br>";
    }
    ?>
</div>
</body>
</html>
