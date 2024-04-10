<!DOCTYPE html>
<html lang="el">

<head>
  <title>Μαθήματα</title>
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

    font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
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
    <form action="action_page.php" method="post">
      <div class="imgcontainer">
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button"> <a href="login_form.php">Login</a></button>

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


      <!--Αρχική σελίδα-->
      <div class="w3-twothird w3-container">



            <!--Τέλος-->


            <div class="w3-row">
              <div class="w3-twothird w3-container">




<!-- END MAIN -->

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


</style>
</head>
<body>

<h3><b>Μαθήματα:</b></h3>

<table>
  <tr>
    <th>Κωδικός μαθήματος</th>
    <th>Ονομασία μαθήματος</th>
    <th>Ώρες Θεωρίας</th>
    <th>Ώρες Εργαστηρίου</th>
    <th>Μονάδες ETCS</th>
    <th>Κατάσταση</th>
    <th>Εξάμηνο</th>

  </tr>
  <tr>
    <td>123-1342</td>
    <td><a href="proigmena_mathimatika.php">Προηγμένα Μαθηματικά</a></td>
    <td>3 ώρες</td>
    <td>0 ώρες</td>
    <td>5</td>
    <td>Επιλογής</td>
    <td>-</td>

  </tr>
  <tr>
    <td>213-9015</td>
    <td><a href="statistiki_analisi.php">Στατιστική Ανάλυση</a></td>
    <td>3 ώρες</td>
    <td>0 ώρες</td>
    <td>5</td>
    <td>Επιλογής</td>
    <td>-</td>

    <tr>
      <td>321-2343</td>
      <td><a href="mathimatika1.php"> Μαθηματικά για Μηχανικούς I</a></td>
      <td>3 ώρες</td>
      <td>0 ώρες</td>
      <td>5</td>
      <td>Υποχρεωτικό</td>
      <td>1ο</td>

    </tr>
    <tr>
      <td>321-5445</td>
      <td><a href="mathimatika2.php">Μαθηματικά για Μηχανικούς II</a></td>
      <td>3 ώρες</td>
      <td>0 ώρες</td>
      <td>5</td>
      <td>Υποχρεωτικό</td>
      <td>2ο</td>

    </tr>

    <tr>
      <td>321-2105</td>
      <td><a href="Antik_progr.php">Αντικειμενοστρεφής Προγραμματισμός I</a></td>
      <td>3 ώρες</td>
      <td>2 ώρες</td>
      <td>5</td>
      <td>Υποχρεωτικό</td>
      <td>2ο</td>

    </tr>
    <tr>
      <td>321-2106</td>
      <td><a href="Antik_progr2.php">Αντικειμενοστρεφής Προγραμματισμός II</a></td>
      <td>3 ώρες</td>
      <td>2 ώρες</td>
      <td>5</td>
      <td>Υποχρεωτικό</td>
      <td>3ο</td>

    </tr>

    <tr>
      <td>321-1011</td>
      <td><a href="domes.php">Δομές Δεδομένων</td>
      <td>3 ώρες</td>
      <td>2 ώρες</td>
      <td>5</td>
      <td>Υποχρεωτικό</td>
      <td>3ο</td>

    </tr>
  <tr>
    <td>321-0721</td>
    <td><a href="vaseisd1.php">Βάσεις Δεδομένων I</a></td>
    <td>3 ώρες</td>
    <td>2 ώρες</td>
    <td>5</td>
    <td>Υποχρεωτικό</td>
    <td>4ο</td>

  </tr>

  <tr>
    <td>321-1012</td>
    <td><a href="vaseisd2.php">Βάσεις Δεδομένων II</a></td>
    <td>3 ώρες</td>
    <td>2 ώρες</td>
    <td>5</td>
    <td>Υποχρεωτικό</td>
    <td>5ο</td>

  </tr>
  <tr>
    <td>321-1302</td>
    <td><a href="diktya.php">Δίκτυα Υπολογιστών</a></td>
      <td>3 ώρες</td>
      <td>2 ώρες</td>
      <td>5</td>
      <td>Υποχρεωτικό</td>
      <td>5ο</td>

  </tr>
  <tr>
    <td>321-1354</td>
    <td><a href="texniti_noim.php">Τεχνητή Νοημοσύνη</a></td>
    <td>3 ώρες</td>
    <td>2 ώρες</td>
    <td>5</td>
    <td>Υποχρεωτικό</td>
    <td>6ο</td>

  </tr>
  <tr>
    <td>321-2270</td>
    <td><a href="rompot_elegxos.php">Ρομποτικός Έλεγχος</a></td>
    <td>3 ώρες</td>
    <td>2 ώρες</td>
    <td>5</td>
    <td>5ου Κύκλου</td>
    <td>7ο</td>

  </tr>

  <tr>
    <td>321-1919</td>
    <td><a href="asfaleia_sto_fusiko _epipedo.php">Ασφάλεια στο Φυσικό Επίπεδο</a></td>
    <td>3 ώρες</td>
    <td>0 ώρες</td>
    <td>5</td>
    <td>1ου Κύκλου</td>
    <td>8ο</td>

  </tr>


  <tr>
    <td>321-2170</td>
    <td><a href="psifiaki.php">Ψηφιακή Διακυβέρνηση</a></td>
    <td>3 ώρες</td>
    <td>2 ώρες</td>
    <td>5</td>
    <td>2ου Κύκλου</td>
    <td>8ο</td>

  </tr>
  <tr>
    <td>321-1313</td>
    <td><a href="doriforikes_epikoinonies.php">Δορυφορικές Επικοινωνίες</a></td>
    <td>3 ώρες</td>
    <td>2 ώρες</td>
    <td>5</td>
    <td>Κύκλου</td>
    <td>9ο</td>

  </tr>




  <tr>

  </tr>
</table>
<hr></hr>
</body>
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
</html>
