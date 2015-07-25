<?php
/**
 * Functions
 * 
 * This file holds all of the commonly used
 * functions for this game.
 * 
 **/

/* $mysqli is the MySQL databasae connection object */
$mysqli = new mysqli("localhost","username","password","database");

/* If any connection errors occur, exit gracefully */
if ($mysqli->connect_error) {
    echo "Cannot connect to database.";
    exit;
}

/**
 * Protect strings
 * @global $mysqli the MySQL database connection object
 * @param string $str string to protect
 * @return string
 */
function protect($str)
{
    global $mysqli;
    return mysqli_real_escape_string($mysqli,strip_tags(addslashes($str)));
}

/**
 * Output a message to the user 
 * @param string $str message to display
 */
function output($str)
{
    echo "<div id=\"output\">{$str}</div>";
}

/**
 * Returns whether or not the user is logged in
 * @return boolean
 **/
function logged_in()
{
    return (isset($_SESSION['login']) && $_SESSION['login']);
}

/**
 * If user is not logged in, display a 
 * message and exit the page cleanly
 * @gloabl $mysqli MySQL databse connection object
 **/
function login_protect()
{
    global $mysqli;
    if(!logged_in()) {
        output("You must be logged in to view this page!");
        include("./footer.php");
        exit;
    }
}
?>