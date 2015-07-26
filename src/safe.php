<?php
/**
 * Safe
 * 
 * This page contains the variables which contain
 * the player's information. It is only included
 * when the user is logged in.
 * 
 **/
 
/* Query and store the player's stats */
$stats_get = $mysqli->query("SELECT * FROM stats WHERE id = '{$_SESSION['id']}'");
$stats = $stats_get->fetch_assoc();

/* Query and store the player's units */
$units_get = $mysqli->query("SELECT * FROM units WHERE id = '{$_SESSION['id']}'");
$units = $units_get->fetch_assoc();

/* Query and store the player's user information */
$user_get = $mysqli->query("SELECT * FROM users WHERE id = '{$_SESSION['id']}'");
$user = $user_get->fetch_assoc();

/* Query and store the player's weapons */
$weapons_get = $mysqli->query("SELECT * FROM weapons WHERE id = '{$_SESSION['id']}'");
$weapon = $weapons_get->fetch_assoc();

/* Query and store the player's rankings */
$rank_get = $mysqli->query("SELECT * FROM rankings WHERE id = '{$_SESSION['id']}'");
$rank = $rank_get->fetch_assoc();
?>