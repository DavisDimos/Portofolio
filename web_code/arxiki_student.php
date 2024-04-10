<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="el">
<head>
  <title>Αρχική φοιτητή</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
    * {box-sizing: border-box;}

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }


    .topnav .search-container {
      float: right;
    }

    .topnav input[type=text] {
      padding: 10px;
      font-size: 17px;
      border: none;
    }

    .topnav .search-container button {
      float: right;
      padding: 10px 10px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .topnav .search-container button:hover {
      background: #ccc;
    }

    @media screen and (max-width: 600px) {
      .topnav .search-container {
        float: none;
      }
      .topnav a, .topnav input[type=text], .topnav .search-container button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }
      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
    }

    /* Create a Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3 {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
      background-image: url('icons/im.png');
      min-height: 20%;

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

    <div class="w3-top">
      <div class="w3-bar w3-theme w3-top w3-left-align w3-large">

        <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>

        <a href="logout.php" class="w3-bar-item w3-button w3-theme-l1">LogOut</a>
        <a href="dilosi_mathimaton.php" class="w3-bar-item w3-button w3-theme-l1">Δήλωση μαθημάτων</a>

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


        <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
          <i class="fa fa-remove"></i>
        </a>
        <h4 class="w3-bar-item"><b>Επιλέξτε τον πίνακα που θέλετε να δείτε:</b></h4>
        <a class="w3-bar-item w3-button w3-hover-black" href="index_student_1.php">Το προφίλ μου</a>
        <a class="w3-bar-item w3-button w3-hover-black" href="index_student_2.php">Τα Μαθήματα μου</a>
        <a class="w3-bar-item w3-button w3-hover-black" href="index_student.php">Η βαθμολογία μου</a>


        <p>
        </p>


        <!-- Login //password -->


  </nav>
    <!-- Navbar (sit on top) -->

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main" style="margin-left:250px">

      <div class="w3-row w3-padding-64">

        <!--Αρχική σελίδα-->
        <div class="w3-twothird w3-container">

          <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
            <div class="w3-display-middle" style="white-space:nowrap;">

              <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Καλώς ήρθες Student!<span class="w3-hide-small"></span></span>
            </div>
          </div>

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
