<?php
/* Start the session */
session_start();
/* Require the functions page */
require_once("./functions.php");
/* Include the safe of player information, only if logged in */
if(logged_in()) include_once("./safe.php");
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Strategy Game</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="header">Strategy Game</div>
        <div id="container">
            <div id="nav">
                <div id="nav_div">
                    <!-- Navigation Menu -->
                    <?php
                    /* If user is logged in, display game menu */
                    if(logged_in()) {
                        ?>
                        <a href="main.php">Your Stats</a><br><br>
                        <a href="logout.php">Logout</a>
                        <?php
                    }
                    /* User is not logged in, display login form */
                    else {
                        ?>
                        <form action="login.php" method="post">
                            Username: <input type="text" name="username"><br>
                            Password: <input type="password" name="password"><br>
                            <input type="submit" name="login" value="Login">
                        </form>
                        <br>
                        <a href="register.php">Register</a>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div id="content">
                <div id="con_div">
                    <!-- Content -->