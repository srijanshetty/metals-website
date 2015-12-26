<?php
session_start();
echo $_SESSION['login_user'];

// if(session_destroy()) // Destroying All Sessions
// {
//     foreach(array_keys($_SESSION) as $k) unset($_SESSION[$k]);
//     unset($_SESSION);
//     header("Location: index.php"); // Redirecting To Home Page
// }
?>
