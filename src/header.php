<?php
session_start();
require_once("./functions.php");
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
                        
                    /* User is not logged in, display login form */
                    } else {
                        
                    }
                    ?>
                </div>
            </div>
            <div id="content">
                <div id="con_div">
                    <!-- Content -->