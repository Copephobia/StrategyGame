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
 * @param string $str string to protect
 * @return string
 */
function protect($str)
{
    return mysqli_real_escape_string(strip_tags(addslashes($str)));
}

/**
 * Output a message to the user 
 * @param string $str message to display
 */
function output($str)
{
    echo "<div id=\"output\">{$string}</div>";
}

?>