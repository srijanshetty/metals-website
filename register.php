<?php
    session_start(); // Starting Session

    // Define $username and $password
    $username=$_POST['mail'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $pincode=$_POST['pincode'];
    $name=$_POST['name'];

    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysql_connect("localhost", "root", "L0RpapQlZC");

    // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    // Selecting Database
    $db = mysql_select_db("metallurgy", $connection);

    // SQL query to fetch information of registerd users and finds user match.
    $query = mysql_query("INSERT INTO users VALUES('$name', '$username', '$password', '$address', '$mobile', '$pincode')", $connection);

    if ($query == 1) {
        header("location: index.php"); // Redirecting To Other Page
    } else {
        header("location: registration.html"); // Redirecting To Other Page
    }
    mysql_close($connection); // Closing Connection
?>
