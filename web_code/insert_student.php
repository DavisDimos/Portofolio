
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Εισαγωγή Καθηγητή</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/A.min.js"></script>
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
  body, html {
    height: 100%;
    color: black;
    line-height: 1.8;
  }

  /* Create a Parallax Effect */

  </style>
</head>
<body>
  <body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <button class="btn1 w3-bar-item w3-button w3-hide-small"><a href="arxiki_student.php"><i class="fa fa-home"></i></a></button>

      <a href="logout.php" class="w3-bar-item w3-button w3-hide-small">LogOut</a>
      </a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <button class="btn1"><a href="arxiki_student.php"><i class="fa fa-home"></i></a></button>
      <a href="logout.php">LogOut</a>


    </div>
  </div>

  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">

    </div>
  </div><center>
    <!DOCTYPE html>

    <html>
    <body style="background-color:LightCyan    ;">
    </body>
    </html>

    <?php
    include ("config.php");
    ?>



    <?php
    //define the variables
    $SubjectID = "";
    $Subject_name = "";


    ?>

    <?php
    if (isset($_POST['submit']) && $_POST['submit'] == "Insert") {
        //get new values to insert
        $SubjectID = $_POST['SubjectID'];
        $Subject_name = $_POST['Subject_name'];

        $error = 0;

        //check fname
        if ($SubjectID == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τoν κωδικό μαθήματος!<br></font>";
            $error = 1;
        }

        //check lname
        if ($Subject_name == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε το όνομα μαθήματος!<br></font>";
            $error = 1;
        }


        if ($error) {
            echo "<font color=\"#FF0000\"><strong><br>Η εισαγωγή δεν ολοκληρώθηκε λόγω λαθών στα στοιχεία εισόδου!!!<br></strong></font>";
        } else {
            //kane eisagogi tis times stin vasi

            mysqli_autocommit($link, false);
            $sql = "insert into attends

                                    ( SubjectID,
                                     Subject_name
                                    )
                                    values
                                    (
                                     '$SubjectID',
                                     '$Subject_name'
                                    )";


            $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));
            if ($result) {
                mysqli_commit($link);
                echo "<font color=\"#3300FF\"><strong><br>Η εισαγωγή ολοκληρώθηκε με επιτυχία!!!<br></strong>";
            } else {
                mysqli_rollback($link);
                echo "<font color=\"#FF0000\"><strong><br>Η εισαγωγή δεν ολοκληρώθηκε λόγω προβλήματος!!!<br></strong></font>";
            }
        }
    }
    ?>

    <br>
    <form name="contactform" method="post" action="insert_admin_1.php">

        <table width="50%" class=form>
          <br>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">ID μαθήματος: <text style="color:red;">*</text></text></b></td>
                <td><input type="text" name="SubjectID" maxlength="50" size="30" value=<?php echo $SubjectID ?>></td>
            </tr>
            <br>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">Όνομα μαθήματος: <text style="color:red;">*</text></text></b></td>
                <td><input type="text" name="Subject_name" maxlength="50" size="30" value=<?php echo $Subject_name ?>> </td>
            </tr>
            
            <br><br>
            <tr>
              <br>
                <td valign="top" align="right"></td>
                <td align=left><input type="submit" name="submit" value="Insert"></td>
            </tr>
        </table>

    </form>

</center>
