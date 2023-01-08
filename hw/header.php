<?php 
session_start();
include 'stock.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist</title>
    <link rel="stylesheet" href="/css/css.css">
</head>
<body>
<nav>
<ul class="clientMenu">
        <li><a href="/">Home</a></li>
        <li><a href="/about.php">About</a></li>
</ul>
<ul class="staffMenu">
    <?php
        if($_SESSION)
        {
            echo '
                <li><a href="/allOrders.php">All Comments</a></li>
                <li><a href="/functions.php?op=logout">Logout</a></li>';
        }
        else
        {
            echo '<li><a href="/login.php">Staff Login</a></li>';
        }
    ?>

</ul>
</nav>