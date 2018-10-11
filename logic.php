<?php


session_start();

require 'Form.php';

use DWA\Form;

#Instantiate objects
$form = new Form($_GET);

$hasErrors = false;

$submitted = $form->isSubmitted();

if ($submitted) {
    $errors = $form->validate(
        [
            'username' => 'required|alpha',
        ]
    );
}

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $username = $results['username'];
    $lactose = $results['lactose'];
    $gluten = $results['gluten'];
    $mushrooms = $results['mushrooms'];
    $seafood = $results['seafood'];
    $noMeat = $results['noMeat'];
    $yesMeat = $results['yesMeat'];

    $errors = $results['errors'];
    $hasErrors = $results['hasErrors'];

    $button = $results['button'];
}


session_unset();

