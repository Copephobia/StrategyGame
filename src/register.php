<?php
/**
 * Register
 * 
 * This page deals with user registration, allowing them
 * to sign up for the game and be insert into the database.
 * 
 **/
 
 /* Require the Header file */
require_once("./header.php");

/* Check if user is logged in already */
if(logged_in()) {
    output("You are already logged in!");
}
/* User is not logged in, did they try to register? */
elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
    /* Protect the form data from SQL injection */
    $form_username = protect($_POST['username']);
    $form_password = protect($_POST['password']);
    $form_confpass = protect($_POST['confpass']);
    $form_emailadd = protect($_POST['emailadd']);
    $hash_password = md5(md5($form_password));
    $hash_confpass = md5(md5($form_confpass));
    
    /* Attempt to get user information from database */
    $get_user = $mysqli->query("SELECT id FROM users WHERE 
                                username = '{$form_username}' LIMIT 1");
    $get_email = $mysqli->query("SELECT id FROM users WHERE 
                                email = '{$form_emailadd}' LIMIT 1");
    
    /* Check for invalid form data (e.g. empty input) */
    if($form_username == '' || $form_password == '' || 
       $form_confpass == '' || $form_emailadd == '') {
        output("You must fill out all fields!");
    }
    /* Check for correct username length */
    elseif(strlen($form_username) < 3 || strlen($form_username) > 20) {
        output("Username must be between 3 and 20 characters!");
    }
    /* Check if the passwords match */
    elseif($hash_confpass != $hash_password) {
        output("Passwords do not match!");
    }
    /* Check if e-mail is correct length */
    elseif(strlen($form_emailadd) > 100) {
        output("E-mail address must be less than 100 characters!");
    }
    /* Check if e-mail is valid format */
    elseif(!filter_var($form_emailadd, FILTER_VALIDATE_EMAIL)) {
        output("E-mail address format is invalid!");
    }
    /* Does the user exist in the database? */
    elseif($get_user->num_rows > 0) {
        output("Username is already in use!");
    }
    /* Does the e-mail address exist in the database? */
    elseif($get_email->num_rows > 0) {
        output("E-mail address is already in use!");
    }
    /* Everything is good, register the user */
    else {
        $mysqli->query("INSERT INTO users (username,password,email) VALUES 
                ('{$form_username}','{$hash_confpass}','{$form_emailadd}')");
        /* The database handles the default values */
        $mysqli->query("INSERT INTO stats () VALUES ()");
        $mysqli->query("INSERT INTO units () VALUES ()");
        $mysqli->query("INSERT INTO weapons () VALUES ()");
        $mysqli->query("INSERT INTO rankings () VALUES ()");
        output("You are now registered! Please login to the left.");
    }
}
/* User is not logged in and hasn't tried to register */
else {
    ?>
    <form action="register.php" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        Confirm: <input type="password" name="confpass"><br>
        E-mail: <input type="text" name="emailadd"><br>
        <input type="submit" name="register" value="Register">
    </form>
    <?php
}

/* Require the Footer file */
require_once("./footer.php");
?>