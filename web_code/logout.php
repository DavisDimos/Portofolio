<?php
// Initialize the session
session_start();

// Unset all of the session variables
//unset($SESSION['AdminID']);
//$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: login_form.php");
exit();
?>
<!--
<!DOCTYPE html>
<html>
<body>
<a href="login_neo.php"><button class="btn success">LogOut</button></a>
</html>-->
