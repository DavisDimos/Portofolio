
    <?php
    include ("config.php");
    ?>

<center>

    <?php

    //define the variables
    $Recognition="";
    $ID="";
    $Username = "";
    $Password = "";
    $email= "";


    ?>

    <?php
    if (isset($_POST['submit']) && $_POST['submit'] == "Register") {
        //get new values to insert
        $Recognition = $_POST['Recognition'];
        $ID = $_POST['ID'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $email = $_POST['email'];


        //check fname

        //check lname
        if ($Recognition == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε το αναγνωριστικό σας!<br></font>";
            $error = 1;
        }
        if ($ID == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τον αριθμό μητρώου σας!<br></font>";
            $error = 1;
        }

        if ($Username == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε το όνομα!<br></font>";
            $error = 1;
        }




        if ($email == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε την διεύθυνση ταχυδρομείου!<br></font>";
            $error = 1;
        }

 else {
            //kane eisagogi tis times stin vasi

            mysqli_autocommit($link, false);
            $sql = "insert into users

                                    (Recognition,
                                     ID,
                                     Username,
                                     Password,
                                     email
                                    )
                                    values
                                    (
                                      '$Recognition',
                                      '$ID',
                                      '$Username',
                                      '$Password',
                                      '$email'
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


</center>

!DOCTYPE html>
<html lang="el">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yinka Enoch Adedokun">
	<meta name="description" content="Simple Forgot Password Page Using HTML and CSS">
	<meta name="keywords" content="forgot password page, basic html and css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Εγγραφή Χρήστη</title>
	<link rel="stylesheet" type="text/css" href="style_forget.css" />
	<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Roboto", sans-serif;
    }

    .w3-sidebar {
      z-index: 3;
      width: 250px;
      top: 43px;
      bottom: 0;
      height: inherit;
    }

	    input[type=text],
	    input[type=password],
	    textarea {
	      width: 100%;
	      padding: 15px;
	      margin: 5px 0 22px 0;
	      display: inline-block;
	      border: none;
	      background: #f1f1f1;
	    }

	    input[type=text]:focus,


	    .registerbtn {
	      background-color:white;
	      color: Black;
	      padding: 16px 20px;
	      margin: 8px 0;
	      border: none;
	      cursor: pointer;
	      width: 100%;
	      opacity: 0.9;
	    }

	    .registerbtn:hover {
	      opacity: 1;
	    }
      div.goog-te-gadget-simple{ border-radius: 5px; background: black;}
      a.goog-te-menu-value{ text-decoration: none;}
      a.goog-te-menu-value > span { color: white;}
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
  </style>
</head>

<body>
	<!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
      <a href="i.php" class="w3-bar-item w3-button w3-theme-l1">Αρχική</a>


</a></button>
<a href="communication.php" class="w3-bar-item w3-button w3-theme-l1">Επικοινωνία</a>
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
  </div>

  <!-- Sidebar -->
  <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
    <img src="sima.jpg" style="  position: relative;
left: 10px;
height: 150px;
border: 3px solid grey ;">

    <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
      <i class="fa fa-remove"></i>
    </a>
    <h4 class="w3-bar-item"><b>Menu</b></h4>
    <a class="w3-bar-item w3-button w3-hover-black" href="information.php">Σχετικές Πληροφορίες για το τμήμα</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="info.php">Επαγγελματική κατάρτιση</a>
		<a class="w3-bar-item w3-button w3-hover-black" href="proswpiko.php">Προσωπικό</a>
		<a class="w3-bar-item w3-button w3-hover-black" href="mathimata.php">Μαθήματα</a>

    <p>
    </p>


    <!-- Login //password -->
    <form act`ion="action_page.php" method="post">

      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button"><a href="login_form.php">Login</a></button>

        <button type="button"> <a href="registers.php">Register</a></button>
        <p></p>

      </div>
    </form>
    <!-- End Login//Password -->
    </nav>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
  <div class="w3-main" style="margin-left:250px">

    <div class="w3-row w3-padding-64">

	<div class="row">
		<form action="registers.php" method="post">
			<div class="container">
				<center>
					<h1> Φόρμα Εγγραφής </h1>
				</center>
				<hr>

        <label for="Recognition"><b>Recognition:</b></label>
        <input type="text" placeholder="Recognition" name="Recognition" required>

        <label for="ID"><b>ID:</b></label>
				<input type="text" placeholder="ID" name="ID" required>

				<label for="Email"><b>Email:</b></label>
				<input type="text" placeholder="Email" name="email" required>

        <label for="Username"><b>Username: </b></label>
        <input type="text" name="Username" placeholder="Username" size="15" required />

				<label for="Password"><b>Password: </b></label>
				<input type="Password" placeholder="Enter Password" name="psw" required>

				 <p>
				 <label for="si_captcha_code">CAPTCHA Code<br />
				<input id="si_captcha_code" name="si_captcha_code" class="input" type="text" value="" /></label>
				</p>
				<div class="si_captcha_small"><img id="si_image_reg" src="http://moocrec.com/wp-content/plugins/si-captcha-for-wordpress/captcha/securimage_show.php?si_sm_captcha=1&amp;si_form_id=reg&amp;prefix=8TltGeoMho13cXqp" width="132" height="45" alt="CAPTCHA" title="CAPTCHA" />
						<input id="si_code_reg" name="si_code_reg" type="hidden"  value="8TltGeoMho13cXqp" />
						<div id="si_refresh_reg">
				<a href="#" rel="nofollow" title="Refresh" onclick="si_captcha_refresh('si_image_reg','reg','/wp-content/plugins/si-captcha-for-wordpress/captcha','http://moocrec.com/wp-content/plugins/si-captcha-for-wordpress/captcha/securimage_show.php?si_sm_captcha=1&amp;si_form_id=reg&amp;prefix='); return false;">
							<img class="si_captcha_refresh" src="http://moocrec.com/wp-content/plugins/si-captcha-for-wordpress/captcha/images/refresh.png" width="22" height="20" alt="Refresh" onclick="this.blur();" /></a>
					</div>
					</div>

					<!-- <p id="reg_passmail">Registration confirmation will be emailed to you.</p> -->
					<br class="clear" />
					<input type="hidden" name="redirect_to" value="" />


          <td align=left><input type="submit" name="submit" value="Register"></td>
		</form>

<hr></hr>

			<!--Τέλος-->


			<div class="w3-row">
				<div class="w3-twothird w3-container">




<!-- END MAIN -->
				</div>
				<style>
					.footer {
						position: fixed;
						left: 0;
						bottom: 0;
						width: 100%;
						background-color: blue;
						color: white;
						text-align: center;

					}
				</style>
				<div class="footer">

					<p>ICSD 2021-2022</p>

				</div>
				<script>
					// Get the Sidebar
					var mySidebar = document.getElementById("mySidebar");

					var overlayBg = document.getElementById("myOverlay");

					// Toggle between showing and hiding the sidebar, and add overlay effect
					function w3_open() {
						if (mySidebar.style.display === 'block') {
							mySidebar.style.display = 'none';
							overlayBg.style.display = "none";
						} else {
							mySidebar.style.display = 'block';
							overlayBg.style.display = "block";
						}
					}

					// Close the sidebar with the close button
					function w3_close() {
						mySidebar.style.display = "none";
						overlayBg.style.display = "none";
					}
				</script>


</body>

</html>
