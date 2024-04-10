<!DOCTYPE html>
<html lang="el">

<head>
  <title>ΑΛΕΞΙΟΣ ΚΑΠΟΡΗΣ</title>
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

        <body>
        <div id="header">
          <h1 >ΑΛΕΞΙΟΣ ΚΑΠΟΡΗΣ: Μόνιμος Επίκουρος Καθηγητής</h1>
          <hr style="height:2px;border-width:0;color:gray;background-color:gray">

        <!--<p id="name"><b><h2>ΑΛΕΞΙΟΣ ΚΑΠΟΡΗΣ: Μόνιμος Επίκουρος Καθηγητής</b></p></h2>-->
        <h3>Προσωπικές πληροφορίες:</h3>
            <b>Email: </b>AKap@aegean.gr<p>
            <b>Τηλέφωνο: </b>22730-53472<p>
            <b>Γραφείο:</b>Κτίριο Λυμπέρη, 2ος όροφος-Γραφείο Β5(Είσοδος Β1)<p>

            </div>
             <div class="left">
             </div>
             <hr></hr>
             <div class="right">

                    <h3>Εκπαίδευση - Σπουδές:</h3>

                    <p align="justify">
                    <ul>
                        <li>Πτυχίο: Τμήμα Μαθηματικών, Π. Πατρών.</li>
                        <li>Διδακτορικό: Τμήμα Μηχανικών Ηλεκτρονικών Υπολογιστών και Πληροφορικής.</li>
                        <li>Μεταδιδακτορικός Ερευνητής: Τμήμα Μηχανικών Ηλεκτρονικών Υπολογιστών και Πληροφορικής.</li>
                        <li>Συνεργάτης Ερευνητής: Ερευνητική Μονάδα Ένα, Ερευνητικό Ακαδημαϊκο Ινστιτούτο Τεχνολογίας Υπολογιστών.</li></ul>
                    </p>
                    <hr></hr>

                    <h3>Ερευνητικά Ενδιαφέροντα:</h3>
                    <p align="justify">
                      Αλγόριθμοι και Πολυπλοκότητα, Πιθανοτικές Τεχνικές, Δυναμικές Δομές Δεδομένων, Αλγοριθμική Θεωρία Παιγνίων, Βιοπληροφορική.


                      <p align="justify">
        Μια μεγάλη τιμή για την εργασία The Probabilistic Analysis of a Greedy Satisfiability Algorithm (συ-συγγραφείς Λ. Κυρούσης, Ε. Λάλας) είναι η αναφορά της στην διάσημη σειρά τόμων του Καθηγητή Don Knuth The art of the computer programming. (“Οι 12 καλύτερες μονογραφίες του αιώνα” American Scientist, “Αν νομίζεις ότι είσαι καλός προγραμματιστής… διάβασε τη συλλογή The art of the computer programming …” Bill Gates). Σε αυτό τον τόμο ο Καθηγητής Don Knuth με μοναδικά γλαφυρό αλλά και αυστηρό τρόπο παρουσιάζει τους σπουδαιότερους συνδυαστικούς αλγόριθμους.</p>
        <p align="justify">

        Μια μεγάλη τιμή για την ερευνητική πρόταση “Αλγοριθμική Θεωρία Παιγνίων” όπου συμμετέχει είναι η επίτευξη της 1ης θέσης πανελλαδικά στο διαγωνισμό Θαλής στην περιοχή των Επιστημών Μηχανικών Πληροφορικής. Ο Συντονιστής της πρότασης είναι ο Καθηγητής Παύλος Σπυράκης.
                      </p>
<hr></hr>
                    <h3>Διδασκαλία:</h3>
                    <p align="justify">
                    <ul>
                    <li>Θεωρία Υπολογισμού</li>
                    <li> Αλγόριθμοι και Πολυπλοκότητα</li>
                    <li> Υπολογιστική Πολυπλοκότητα </li>
                    <li>Θεωρία Παιγνίων</li>
                    <li>Συνδυαστική Βελτιστοποίηση</li>
                    <li>Μαθηματικά για Μηχανικούς I</li>
                    <li>Μαθηματικά για Μηχανικούς II</li>
                    </ul>
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
