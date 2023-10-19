<?php


session_start();//session is a way to store information (in variables) to be used across multiple pages.


unset($_SESSION['user_is_logged_in']);
unset($_SESSION['email']);
unset($_SESSION['fullname']);

session_destroy(); 
session_unset();
$_SESSION = NULL;


header("Location: ../index.php");//use for the redirection to some page  


?>