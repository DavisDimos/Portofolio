<!DOCTYPE html>
<html lang="el">

<head>
  <title>Douma</title>
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


        <div id="header">
          <h1>ΔΟΥΜΑ ΑΝΑΣΤΑΣΙΑ: Μόνιμος Επίκουρος Καθηγητής</h1>
          <hr style="height:2px;border-width:0;color:gray;background-color:gray">

        <h3>Προσωπικές πληροφορίες:</h3>
            <b>Email: </b>sia@aegean.com<p>
            <b>Τηλέφωνο: </b>22730-82050<p>
            <b>Γραφείο: </b>Κτίρια Ψάθα - Περιοχή Ταμπάκια<p>
            </div>
            <hr></hr>

             <div class="left">
             </div>
             <div class="right">

                    <h3>Εκπαίδευση - Σπουδές:</h3>

                    <p>
                    <ul>
                        <li>Δίπλωμα Μηχανικού Πληροφορικής
</li>
<li>Μεταπτυχιακό Ασφάλειας Πληροφοριακών και Επικοινωνιακών Συστημάτων
</li>
                    </p>
                    <hr></hr>
                    <h3>Ερευνητικά Ενδιαφέροντα:</h3>
                    <p>
              <ul>
                <li>  Ασφάλεια Πληροφοριακών Συστημάτων και Δικτύων </li>
                <li>Μηχανική μάθηση
</li>
<li>Τεχνολογία λογισμικού
</li>
              </ul>


                  <hr></hr>
                    <h3>Διδασκαλία:</h3>

                                        <ul>
                                        <li><p align="justify">Εργαστήριο Αντικειμενοστρεφής Προγραμματισμός Ι, 2ο εξάμηνο, (Ακ. έτος 2009-10 έως σήμερα)
                    </p></li>
                                        <li><p align="justify">Εργαστήριο Αντικειμενοστρεφής Προγραμματισμός IΙ, 3ο εξάμηνο, (Ακ. έτος 2010-11 έως σήμερα)
                    </p></li>
                                        <li><p align="justify">Εργαστήριο Δομές Δεδομένων, 3ο εξάμηνο, (Ακ. έτος 2011-12 έως σήμερα)
                    </p></li>
                                        <li>Εργαστήριο Κατανεμημένα Συστήματα, 6ο εξάμηνο (Ακ. έτος 2012-13 έως σήμερα)
                    </li>
                    <li><p align="justify">Εργαστήριο Ασφάλεια Πληροφοριακών και Επικοινωνιακών Συστημάτων, 6ο εξάμηνο, (Ακ. έτος 2009-10 έως σήμερα)
                    </p></li>

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
