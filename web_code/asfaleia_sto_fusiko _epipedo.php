<!DOCTYPE html>
<html lang="el">

<head>
  <title>Ασφάλεια στο Φυσικό Επίπεδο:Μάθημα Κύκλου</title>
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
      <div id="header">
        <h1>Ασφάλεια στο Φυσικό Επίπεδο:Μάθημα Κύκλου</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </hr>

        <table>
          <tr id="heading">
            <td>Κωδικός Μαθήματος:</td>
            <td>321-1919</td>

          </tr>
          <tr>
            <td>Εξάμηνο:</td>
            <td>8</td>

          </tr>
          <tr>
            <td>ECTS:</td>
            <td>5</td>

          </tr>
          <tr>
            <td>Ώρες (Θεωρία):</td>
            <td>3</td>

          </tr>
          <tr>
            <td>Ώρες (Εργαστήριο):</td>
            <td>0</td>

          </tr>
          <tr>
            <td>Διδάσκων:</td>
            <td>Μαλιάτσος Κωνσταντίνος</td>

          </tr>
        </table>

        <hr>
        </hr>
        <h3>Ύλη Μαθήματος:</h3>
        <p align="justify">
          Εισαγωγή στην ασφάλεια προσεγγίζοντας την μέσα από τη θεωρίας πληροφορίας. Βασικά στοιχεία θεωρίας πληροφορίας (πληροφορία, εντροπία, αμοιβαία πληροφορία, χωρητικότητα, Gaussian κανάλι, θεωρία ρυθμού-παραμόρφωσης). Ορισμός ασφάλειας φυσικού επιπέδου. Μετρικά μυστικότητας και απορρήτου. Τέλεια μυστικότητα σε όρους θεωρίας πληροφορίας. Κανάλια υποκλοπής (wiretap). Χωρητικότητα μυστικότητας και χωρητικότητα μυστικού κλειδιού. Σύστημα κρυπτογράφησης Shannon. Όρια ασφάλειας διαύλων και ασύρματων καναλιών. Κωδικοποίηση για μυστικότητα. Beamforming και προ-κωδικοποίηση μυστικότητας, ΜΙΜΟ κανάλια. Βασικά στοιχεία για Diffie-Hellman, AES και επιθέσεις πλευρικού καναλιού. Χρήση από κοινού τυχαιότητας και τεχνητού θορύβου. Απόρρητο-παρεμβολή-jamming σε κανάλια πολλαπλών χρηστών. Ασφάλεια κωδικοποίησης δικτύου. LDPC κώδικες στο wiretap κανάλι. Γέννηση μυστικών κλειδιών, συμφωνία μυστικού κλειδιού (επικοινωνία μιας κατεύθυνσης, αμφίδρομη, και ανταλλαγή κβαντικών κλειδιών), Fingerprinting μέσω καναλιού. Κωδικοποίηση πηγής κάτω από περιορισμούς μυστικότητας.
        Επίλυση ασκήσεων μοντελοποίησης των καναλιών wiretap, εκτίμησης μυστικότητας, ανάπτυξης κωδικών και κωδικοποίησης, beamforming και γέννησης κλειδιών μέσω εκτίμησης καναλιού.

        </p>
      </div>
      <hr>
      </hr>

      <div class="left">
      </div>
      <div class="right">

        <h3>Επιδιωκόμενα μαθησιακά αποτελέσματα:</h3>
        <p align="justify">
        Με την επιτυχή ολοκλήρωση του μαθήματος, ο φοιτητής/τρια θα μπορεί:
        </p>
        <ul>
          <li>Να κατανοήσει βασικές μεθόδους ανάλυσης πληροφορίας,</li>
          <li>Να είναι σε θέσει να ποσοτικοποιήσει την πληροφορία, τον ρυθμό πληροφορίας, να αξιολογεί την χωρητικότητα πληροφορίας στα κανάλια,</li>
          <li>Να εξοικειωθεί με τα μετρικά πληροφορίας και αβεβαιότητας,</li>
          <li>Να κατανοήσει τις βασικές αρχές επίτευξης ασφάλειας στο φυσικό επίπεδο και τα οφέλη και πλεονεκτήματα που προσφέρει,</li>
          <li>Να κατανοήσει τις έννοιες της μυστικότητας-απορρήτου, των μετρικών μυστικότητας και της χωρητικότητας απορρήτου/μυστικότητας,</li>
          <li>Να μελετήσει τα κανάλια υποκλοπών (wiretap) και να κατανοήσει τους κινδύνους αλλά και τα μέσα αποφυγής,</li>
          <li>Να μελετήσει το beamforming, την προ-κωδικοποίηση και τις συνεργατικές μορφές μετάδοσης ως μέσα απόρρητης και ασφαλούς επικοινωνίας,</li>
          <li>Να κατανοήσει τις διαδικασίες ασφαλούς κωδικοποίησης μέσου του καναλιού σε φυσικό επίπεδο,</li>
        </ul>
        </p>
        <hr>
        </hr>

        <h3>Προαπαιτούμενα:</h3>
        <p>
          Δεν απαιτούνται.
          <br>
          <hr>
          </hr>

        <p align="justify">



        <style>
          font-family: arial,
          sans-serif;
          border-collapse: collapse;
          width: 100%;
          }

          td,
          th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }

          tr:nth-child(even) {
            background-color: #dddddd;
          }
        </style>
        </head>

        <body>

          <h3>Διδακτικές και μαθησιακές μέθοδοι:</h3>
<p align="justify">Ατομικές εργασίες, τελική γραπτή εξέταση.</p>
          <table>
            <tr>
              <th>Δραστηριότητα</th>
              <th>Φόρτος Εργασίας Εξαμήνου</th>
            </tr>
            <tr>
              <td>Διαλέξεις</td>
              <td>39ώρες</td>
            </tr>
            <tr>
              <td>Aσκήσεις</td>
              <td>21 ώρες</td>
            <tr>
              <td>Προσωπική μελέτη</td>
              <td>62 ώρες</td>
            </tr>
            <tr>
              <td>Τελική εξέταση </td>
              <td>3 ώρες</td>
            </tr>
            <tr>
              <td><b>Σύνολο Μαθήματος</b></td>
              <td><b>125 ώρες (5 ECTS)</b></td>
            </tr>
            <tr>

            </tr>
          </table>
          <hr>
          </hr>
        </body>

</html>


<h3>Μέθοδοι αξιολόγησης / βαθμολόγησης:</h3>
<p>
  <p> Ατομική εργασία</p>
  <p>Γραπτή εξέταση</p>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
  <div id="myChart" style="width:100%; max-width:600px; height:500px;">
  </div>

  <script>
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['type', 'percentage'],
        ['Ατομική εργασία', 30],
        ['Γραπτή εξέταση', 70],

      ]);

      var options = {
        title: 'Ποσοστά βαρύτητας στην τελική βαθμολογία:'
      };

      var chart = new google.visualization.PieChart(document.getElementById('myChart'));
      chart.draw(data, options);
    }
  </script>

  <hr>
  </hr>

  <h3>Γλώσσα διδασκαλίας:</h3>
  <p>
    Ελληνικά (Αγγλικά αν υπάρχουν φοιτητές/φοιτήτριες ERASMUS)</p>


  <p align="justify">


    <hr>
    </hr>
  <h3>Τρόπος παράδοσης μαθήματος:</h3>

  Φυσική Παρουσία.
  <br>


  <p align="justify">

  <p></p>

  <hr>
  </hr>

  <!-- footer -->
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

  <!-- END MAIN -->
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
