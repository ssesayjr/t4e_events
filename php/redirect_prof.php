<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["id"] ===1){
    header("location: profile.php");
    
} else {
    header("location: home.php");
}

exit;
?>