<?php
// Initialize the se
ob_start();
//session_start();
if(!isset($_SESSION))
    {
        session_start();
    }

// Check if the user is already logged in, if yes then redirect him to welcome page


// Include config file
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "phpxampp2022";
 $db = "vasi";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);



// Define variables and initialize with empty values
$Username = filter_input(INPUT_POST ,'Username');

$Password =filter_input(INPUT_POST ,'Password') ;

if(!empty($Username) && !empty($Password))
{
  $query = "SELECT * FROM users WHERE Username ='$Username' AND Password = '$Password' ";

  $out = mysqli_query($conn , $query);

  if (mysqli_num_rows($out) > 0) {
    $row = mysqli_fetch_assoc($out);

    $Recognition = intval($row['Recognition']);

    if($Recognition ==3){
      $_SESSION["ID"] =$row['ID'];
      header('Location: arxiki_student.php');
    }
    else if($Recognition ==2){
  $_SESSION["ID"] = $row['ID'];
        header('Location: arxiki_teacher.php');
        exit();
}
    else {
      $_SESSION["ID"] =$row['ID'];
      header('Location:arxiki_admin.php');
    }

  } else {
    echo "<script>alert('Login details is incorrect. Please try again.');</script>";

}
}
    // Close connection
    // mysqli_close($link);
?>
