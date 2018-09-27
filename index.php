<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project 2</title>
    <link rel="stylesheet" href="p2stylesheet.css" type="text/css"/>
</head>

<body>

<h1>What can I eat?</h1>

<form>
    <label>My name is:</label>
    <input type="text">
    <br/>
    <br/>
    <label>I need to avoid foods that contain:</label><br/>
    <input type="checkbox" name="lactose" value="gluten">Dairy / Lactose / Casein<br/>
    <input type="checkbox" name="gluten" value="gluten">Gluten<br/>
    <input type="checkbox" name="seafood" value="seafood">Seafood<br/>
    <input type="checkbox" name="mushrooms" value="mushrooms">Mushrooms<br/>
    <br/>
    <br/>
    <label>Are you vegan?</label><br/>
    <input type="radio" name="yes" value="yes">Yes<br/>
    <input type="radio" name="no" value="no">No<br/>
    <br />
    <input type="button" value="Find me food!">

    //submit using $_GET
</form>

<p class="warn">This website is not approved by the FDA.  Please read the labels on all the food packaging before eating.</p>


</body>
</html>