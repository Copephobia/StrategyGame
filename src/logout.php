<?php
/**
 * Logout
 * 
 * This page deletes the user's session
 * and returns them to the index page.
 * 
 **/
 
/* Start the session */
session_start();

/* Unset the login variable, to be safe */
unset($_SESSION['login']);

/* Destroy the session */
session_destroy();

/* Redirect to the index page */
header("Location: index.php");
?>