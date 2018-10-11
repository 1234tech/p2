<?php

require 'logic.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hypo-allergenic eating</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>

<h1>What can I eat?</h1>

<p>This application will help those who have food allergies, food intolerances, and dietary restrictions
    to be able to find food that they can eat safely. The list is not inclusive of all foods.</p>

<p class="caution">Please note: This website is not approved by the FDA. Please read the labels on all the food
    packaging before eating.
    Also, by clicking the "Find food" button, you agree that this website and it's creator are not liable.</p>

<form method="GET" action="results.php">
    <fieldset class="outsideBorder">
        <fieldset class="insideBorder">
            <label>My name is:
                <input type="text" name="username" required>
            </label>
        </fieldset>
        <fieldset class="insideBorder">
            <label>I need to avoid foods that contain:</label><br/>
            <label>
                <input type="checkbox" name="lactose" value="lactose">
            </label>Dairy / Lactose / Casein<br/>
            <label>
                <input type="checkbox" name="gluten" value="gluten">
            </label>Gluten<br/>
            <label>
                <input type="checkbox" name="mushrooms" value="mushrooms">
            </label>Mushrooms<br/>
            <label>
                <input type="checkbox" name="seafood" value="seafood">
            </label>Seafood<br/>
        </fieldset>
        <fieldset class="insideBorder">
            <label>Are you a vegetarian?</label><br/>
            <label>
                <input type="radio" value="yesMeat" name="yesMeat">
            </label>No<br/>
            <label>
                <input type="radio" value="noMeat" name="noMeat"></label>Yes<br/>
        </fieldset>
        <input type="submit" value="Find food!" name="button">

</form>

</body>
</html>