<?php
/**
 * Login
 * 
 * This page deals with setting up the user session if they
 * correctly login, or displaying any error messages.
 * 
 **/
 
 /* Require the Header file */
require_once("./header.php");

/* Check if user is logged in already */
if(logged_in()) {
    output("You are already logged in!");
}
/* User is not logged in, did they visit correctly? */
elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
    /* Protect the form data from SQL injection */
    $form_username = protect($_POST['username']);
    $form_password = protect($_POST['password']);
    
    /* Attempt to get user information from database */
    $hash_password = md5(md5($form_password));
    $get_user = $mysqli->query("SELECT id FROM users WHERE 
                                username = '{$form_username}' AND 
                                password = '{$hash_password}' LIMIT 1");
    echo $mysqli->error;
    /* Check for invalid form data (e.g. empty input) */
    if($form_username == '' || $form_password == '') {
        output("You must fill out both fields!");
    }
    /* Does the user exist in the database? */
    elseif($get_user->num_rows == 0) {
        output("Invalid username/password combination");
    }
    /* User exists, create session variables and redirect */
    else {
        $get_id = $get_user->fetch_assoc();
        $_SESSION['login'] = true;
        $_SESSION['id'] = $get_id['id'];
        header("Location: main.php");
    }
}
/* User visited this page incorrectly */
else {
    output("You have visited this page incorrectly!");
}

/* Require the Footer file */
require_once("./footer.php");
?>