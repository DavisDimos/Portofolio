<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="el">
<head>
  <title>Αναβάθμιση ανάθεσης μαθήματος σε διδάσκοντα</title>
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
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }


  .w3-wide {letter-spacing: 10px;}
  .w3-hover-opacity {cursor: pointer;}

  /* Turn off parallax scrolling for tablets and phones */
  @media only screen and (max-device-width: 1600px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
      background-attachment: scroll;
      min-height: 400px;
    }
  }
  .btn1 {
  background-color: white;
  border: none;
  color: grey;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  }
  div.goog-te-gadget-simple{ border-radius: 5px; background: white;}
  a.goog-te-menu-value{ text-decoration: none;}
  a.goog-te-menu-value > span { color: black;}

  .goog-logo-link {
      display:none !important;
  }
  .goog-te-gadget {
      color: transparent !important;
  }
  .goog-te-banner-frame.skiptranslate {
  display: none !important;
  }
  .goog-te-gadget-icon{
    display:none !important;
  }
  hr.new5 {
  border: 2px solid red;
}
  </style>
  <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
      });
  </script>
</head>
  <body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
      <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
          <i class="fa fa-bars"></i>
        </a>
        <a href="arxiki_admin.php" class="btn1 w3-bar-item w3-button w3-hide-small"><i style="font-size:18px" class="fa fa-home"></i></a>
    <a href="index_admin_2.php" class="btn1 w3-bar-item w3-button w3-hide-small"><i style="font-size:18px" class="fa">&#xf100;</i>
    </a>
    <a href="logout.php" class="btn1 w3-bar-item w3-button w3-hide-small"><i style="font-size:17px" class="fa">&#xf08b;</i></a>
        <div class="topnav">
                  <div id="google_translate_element" style="float:  right;   padding: 10px 10px;
                    margin-right: 16px;" ></div>

        <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'el', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                  </div>
      </div>

      <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <button class="btn1"><a href="arxiki_admin.php"><i class="fa fa-home"></i></a></button>
    &nbsp;
          <button class="btn1"><a href="index_admin_2.php" ><i style="font-size:18px" class="fa">&#xf100;</i>
        </a></button>
        &nbsp;
            <button class="btn1"><a href="logout.php" ><i style="font-size:17px" class="fa">&#xf08b;</i></a></button>
      </div>

    </div>
      <br></br>

<center>
    <?php
    include ("config.php");
    ?>

    <?php
    //define the variables
    $TeacherID = "";
    $Teacher_Firstname = "";
    $Teacher_Lastname = "";
    $SubjectID = "";
    $Subject_name = "";

    ?>

    <?php
    //------------------update xristi----------------------------
    if ((isset($_POST['SubjectID']))) {
        $SubjectID = $_POST['SubjectID'];

        $sql = "select
                                 TeacherID,
                                 Teacher_Firstname,
                                 Teacher_Lastname,
                                 SubjectID,
                                 Subject_name

                from teaches where SubjectID = '$SubjectID'";
        $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));

        $row = mysqli_fetch_array($result);
        $TeacherID = $row['TeacherID'];
        $Teacher_Firstname = $row['Teacher_Firstname'];
        $Teacher_Lastname = $row['Teacher_Lastname'];
        $SubjectID = $row['SubjectID'];
        $Subject_name = $row['Subject_name'];

    }
    ?>

    <?php
    //------------------update xristi----------------------------
    if (isset($_POST['submit']) && $_POST['submit'] == "update1") {
        $SubjectID = $_POST['SubjectID'];

        $sql = "select
                                 TeacherID,
                                 Teacher_Firstname,
                                 Teacher_Lastname,
                                 SubjectID,
                                 Subject_name


                from teaches where SubjectID = '$SubjectID'";
        $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));

        $row = mysqli_fetch_array($result);
                $TeacherID = $row['TeacherID'];
                $Teacher_Firstname = $row['Teacher_Firstname'];
                $Teacher_Lastname = $row['Teacher_Lastname'];
                $SubjectID = $row['SubjectID'];
                $Subject_name = $row['Subject_name'];

    }
    ?>

    <?php
    if (isset($_POST['submit']) && $_POST['submit'] == "Update") {
        //get new values to insert

        $TeacherID = $_POST['TeacherID'];
        $Teacher_Firstname = $_POST['Teacher_Firstname'];
        $Teacher_Lastname = $_POST['Teacher_Lastname'];
        $SubjectID = $_POST['SubjectID'];
        $Subject_name = $_POST['Subject_name'];


        $error = 0;

        //check fname
        if ($TeacherID == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τoν αριθμό μητρώου!<br></font>";
            $error = 1;
        }

        //check lname
        if ($Teacher_Firstname == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε το όνομα!<br></font>";
            $error = 1;
        }

        if ($Teacher_Lastname == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τo επώνυμο!<br></font>";
            $error = 1;
        }

        if ($SubjectID == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τoν κωδικό μαθήματος!<br></font>";
            $error = 1;
        }


        if ($Subject_name == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε το όνομα του μαθήματος!<br></font>";
            $error = 1;
        }



        if ($error) {
            echo "<font color=\"#FF0000\"><strong><br>Η εισαγωγή δεν ολοκληρώθηκε λόγω λαθών στα στοιχεία εισόδου!!!<br></strong></font>";
        } else {
            //kane eisagogi tis times stin vasi

            mysqli_autocommit($link, false);
            $sql = "update teaches set
                                            TeacherID = '$TeacherID',
                                            Teacher_Firstname = '$Teacher_Firstname',
                                            Teacher_Lastname = '$Teacher_Lastname',
                                            SubjectID = '$SubjectID',
                                            Subject_name = '$Subject_name'

                    where SubjectID = '$SubjectID'";

            $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));
            if ($result) {
                mysqli_commit($link);
                echo "<font color=\"#000000\"><strong><br>Η επεξεργασία ολοκληρώθηκε με επιτυχία!!!<br></strong>";
            } else {
                mysqli_rollback($link);
                echo "<font color=\"#FF0000\"><strong><br>Η επεξεργασία δεν ολοκληρώθηκε λόγω προβλήματος!!!<br></strong></font>";
            }
        }
    }
    ?>


    <?php
    $sql = "select           TeacherID,
                             Teacher_Firstname,
                             Teacher_Lastname,
                             SubjectID,
                             Subject_name

        from teaches";

    $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));
    ?>
    <hr class="new5"></hr>
    <table class="view">
        <div class="container">

          <table class="table table-bordered">
<br><br>
        <tr>
          <th>TeacherID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>SubjectID</th>
            <th> Subject Name</th>

            <th>Update</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <tr class="alt">
              <td><?php echo $row['TeacherID']; ?></td>
              <td><?php echo $row['Teacher_Firstname']; ?></td>
              <td><?php echo $row['Teacher_Lastname']; ?></td>
              <td><?php echo $row['SubjectID']; ?></td>
                <td><?php echo $row['Subject_name']; ?></td>


                <td valign="center" align="center">
                    <form name="updateform" method="post" action="update_admin_2.php">
                        <input type="hidden" name="status" value="update">
                        <input type="hidden" name="SubjectID" value="<?php echo $row['SubjectID']; ?>">
                        <BUTTON TYPE="submit" name="submit" value="update1" CLASS="image1"><img src="icons/pencil.png"  width="30" height="28"></BUTTON>
                    </form>
            </tr>
            <?php
        }
        ?>
    </table>

    <form name="contactform" method="post" action="update_admin_2.php">

        <table width="50%" class=form>
          <tr>
              <td class=form_subheader><b><text style="font-size:20px;">ID: </text></b></td>
              <td><input type="text" name="TeacherID" maxlength="50" size="30" value=<?php echo $TeacherID ?>></td>
          </tr>
          <br>
          <tr>
              <td class=form_subheader><b><text style="font-size:20px;">Όνομα: </text></b></td>
              <td><input type="text" name="Teacher_Firstname" maxlength="50" size="30" value=<?php echo $Teacher_Firstname ?>> </td>
          </tr>
          <tr>
              <td class=form_subheader><b><text style="font-size:20px;">Eπώνυμο: </text></b></td>
              <td><input type="text" name="Teacher_Lastname" maxlength="80" size="30" value=<?php echo $Teacher_Lastname ?>></td>
          </tr>
          <tr>
              <td class=form_subheader><b><text style="font-size:20px;">Κωδικός Μαθήματος: </text> </b></td>
              <td><input type="text" name="SubjectID" maxlength="80" size="30" value=<?php echo $SubjectID ?>></td>
          </tr>
          <tr>
              <td class=form_subheader><b><text style="font-size:20px;">Όνομα Μαθήματος: </text> </b></td>
              <td><input type="text" name="Subject_name" maxlength="80" size="30" value=<?php echo $Subject_name ?>></td>
          </tr>
</tr>
          <br>
          <tr>
            <br>
              <td valign="top" align="right"></td>
              <td align=left><input type="submit" name="submit" value="Update"></td>
          </tr>
      </table>

    </form>
    <hr class="new5"></hr>
    <br></br>
  </center>
  </body>
  </html>

  <script>
  // Change style of navbar on scroll
  window.onscroll = function() {myFunction()};
  function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
          navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
  }

  // Used to toggle the menu on small screens when clicking on the menu button
  function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
      } else {
          x.className = x.className.replace(" w3-show", "");
      }
  }
  </script>
