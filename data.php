<?php

# create lists of the following - each in an array

#checkbox
$dairy = ['cheese', 'ice cream', 'milk'];

$gluten = ['bread', 'pasta', 'bagels'];

$mushrooms = ['crimino mushroom', 'portabello mushroom', 'shiitake mushroom', 'white button mushroom'];

$seafood = ['clams', 'crab', 'mussels', 'shrimp'];

#radio button
$meat = ['beef', 'bison', 'chicken', 'turkey'];

#display regardless
$veggies = ['artichoke', 'asparagus', 'broccoli', 'carrots', 'corn', 'cucumber',
    'kale', 'lettuce', 'potato', 'spinach', 'zucchini'];

$fruits = ['apple', 'blueberry', 'cherry', 'grapes', 'lemon', 'lime', 'pear', 'plum',
    'raspberry', 'strawberry', 'watermelon'];


#full lists of foods

$dairyList = implode(', ', $dairy);
$glutenList = implode(', ', $gluten);
$mushList = implode(', ', $mushrooms);
$seafoodList = implode(', ', $seafood);

$meatList = implode(', ', $meat);

$veggiesList = implode(', ', $veggies);
$fruitsList = implode(', ', $fruits);






