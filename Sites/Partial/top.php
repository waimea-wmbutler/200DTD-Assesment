<?php require_once '_config.php'; ?>

<?php
$myinteger = 1;
$mystring = "Yes" . $myinteger;

$myinteger = 0;
$mystring = "No" . $myinteger;


$page = basename($_SERVER['SCRIPT_NAME']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= SITE_NAME ?></title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header>
        <h1><a href="index.php"><?= SITE_NAME ?></a></h1>
    </header>

    <main>



