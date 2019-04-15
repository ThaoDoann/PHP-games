<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $pagetitle = (isset($_GET['pagetitle']))
                ? $_GET['pagetitle']
                : "Home Page";
    ?>
    <title><?= $pagetitle ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--
Author: Shawn Pudjowargono
Date create: June 28, 2018
Date update: June 28, 2018
Version: 4.0

Purpose:
    Assignment 4: Tic Tac Toe Game
Description:
    A Tic Tac Toe game.
-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <header><h1><?= $pagetitle ?></h1></header>
    <nav>
        <?php
            include_once 'includes/navigation.php';
            /*TODO: Will be used to login/logout members*/
        ?>
    </nav>
    <main>