<!DOCTYPE html>
<html lang="el">

<head>
  <title>Δορυφορικές Επικοινωνίες: Mάθημα Κύκλου</title>
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
        <h1>Δορυφορικές Επικοινωνίες: Mάθημα Κύκλου</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </hr>

        <table>
          <tr id="heading">
            <td>Κωδικός Μαθήματος:</td>
            <td>321-3131</td>

          </tr>
          <tr>
            <td>Εξάμηνο:</td>
            <td>9</td>

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
            <td>2</td>

          </tr>
          <tr>
            <td>Διδάσκων:</td>
            <td>Καλλίγερος Εμμανουήλ</td>

          </tr>
        </table>

        <hr>
        </hr>
        <h3>Ύλη Μαθήματος:</h3>
        <p align="justify">
          Υποσυστήματα δορυφορικής ζεύξης, γεωμετρική θεώρηση της κίνησης των γεωσύγχρονων και γεωστατικών δορυφόρων. Τροχιές και μηχανική των τροχιών. Επιμέρους θέματα του δορυφορικού διαύλου, ανάλυση της δορυφορικής ζεύξης σε όρους εκπεμπόμενης και λαμβανόμενης ισχύος, σηματοθορυβικών σχέσεων και επιδράσεως τυχαίων παραγόντων. Αναλογικές και ψηφιακές μέθοδοι εκπομπής και πολλαπλής πρόσβασης και η υλοποίησή τους σε δορυφορικά συστήματα επικοινωνιών. Χρήση του προσαρμοσμένου φίλτρου και υπολογισμός της πιθανότητας λάθους σε ψηφιακά τηλεπικοινωνιακά συστήματα. Επεξεργασία του δορυφορικού σήματος στον αναμεταδότη και η επίδραση της μη γραμμικότητας των δορυφορικών ενισχυτών. Δορυφορικά δίκτυα με μεθόδους πολλαπλής πρόσβασης. Δορυφορική Ψηφιακή Τηλεόραση. Τεχνικά και λειτουργικά χαρακτηριστικά, απαιτήσεις και παραδείγματα εφαρμογών.

        </p>
      </div>
      <hr>
      </hr>

      <div class="left">
      </div>
      <div class="right">

        <h3>Επιδιωκόμενα μαθησιακά αποτελέσματα:</h3>
        <p align="justify">
          Στόχος του μαθήματος είναι η κατανόηση των μεθόδων ανάλυσης και σχεδιασμού δορυφορικών συστημάτων επικοινωνιών. Με την ολοκλήρωση του μαθήματος οι φοιτητές θα είναι σε θέση:
        </p>
        <ul>

          <li>να κατανοούν τις ιδιαιτερότητες των δικτύων δορυφορικών επικοινωνιών καθώς και το πεδίο αποδοτικής εφαρμογής τους,</li>
          <li>να αναγνωρίζουν όρους και τεχνικές που αφορούν στην αξιολόγηση της επίδοσης και της διαθεσιμότητας τέτοιων ζεύξεων,</li>
          <li>να αναγνωρίζουν, να περιγράφουν, να διακρίνουν και να σχεδιάζουν διαφορετικές τροχιές,</li>
          <li>να αναλύουν και να σχεδιάζουν ζεύξεις συγκεκριμένων τηλεπικοινωνιακών απαιτήσεων,</li>
          <li>να αναγνωρίζουν τα κατάλληλα κριτήρια, να υπολογίζουν τις τιμές κατωφλίου επίδοσης των ζεύξεων,</li>
          <li>να αξιολογούν την τελική επίδοση ψηφιακών δορυφορικών συστημάτων</li>
          <p>Με τη εργαστηριακή ενασχόληση οι φοιτητές θα μπορούν: </p>
          <li>να κατανοούν τα φυσικά φαινόμενα με τη χρήση των μαθηματικών εργαλείων,</li>
          <li>να αναγνωρίζουν και να εφαρμόζουν τη θεωρία σε πραγματικά προβλήματα,</li>
          <li>να σχεδιάζουν και να υλοποιούν δορυφορικές τροχιές και απλά μοντέλα προϋπολογισμού μιας ζεύξης.</li>

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

        <h3>Εγχειρίδια του μαθήματος:</h3>
        <p>
        <ul>
          1. Δ. Βουγιούκας, "Δορυφορικές Επικοινωνίες- Τεχνολογίες, Συστήματα και Εφαρμογές", ΣΕΑΒ, Κάλλιπος, Αθήνα, 2016.
      <p>2. G. Maral, M. Bousquet, “Δορυφορικές Επικοινωνίες : Συστήματα, Τεχνικές και Τεχνολογία”, 5η Έκδοση, Εκδόσεις Τζιόλα, Θεσσαλονίκη 2012. </p>
      <p>3. T. Pratt, C. W. Bostian, and J. E. Allnutt, Δορυφορικές Επικοινωνίες, John Wiley and Sons, 2nd ed., 2003 (μετάφραση: Α. Κανάτας). </p>
        </ul>

        <hr>  </hr>
        <h3>Συμπληρωματική βιβλιογραφία:</h3>
<u1>
        <p align="justify">
        <p>  1. Χ. Καψάλης, Κ. Κωττής, “Δορυφορικές Επικοινωνίες”, Εκδόσεις Τζιόλα, 2005.</p>
        <p>  2. Sheriff, Hu, “Mobile Satellite Communication Networks”, 2001.</p>
        <p>  3. D. Roddy, Satellite Communications, 3rd edition McGraw-Hill, 2001.</p>
        <p>  4. S. Ohmori, H. Wakana, and S. ­Kawase, Mobile Satellite Communications. Artech House Publishers, USA, 1997.</p>
        <p>  5. T. Ha, Digital Satellite Communications, McGraw Hill, 1990.</p>
        <p>  6. B. G. Evans, Satellite Communication Systems, IEE Telecommunications, 3rd edn, Jan. 1999.
        <p>  7. L. J. Ippolito, Radiowave Propagation in Satellite Communications, Van Nostrand, N.Y., 1986.
        <p>  8. G. D. Gordon and W. L. Morgan, Principles of Communication Satellites, John Wiley & Sons, Inc., N.Y., 1993.
        <p>  9. G. E. Corazza, Digital Satellite Communications, Springer, May 2007.
          </ul>
        </p>
        <hr></hr>

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
              <td>39 ώρες</td>
            </tr>
            <tr>
              <td>Ασκήσεις:</td>
              <td>26 ώρες</td>
            <tr>
              <td>Αυτοτελής μελέτη:</td>
              <td>50 ώρες</td>
            </tr>
            <tr>
              <td>Μικρές ατομικές εργασίες εξάσκησης:</td>
              <td>10 ώρες</td>
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
<p>  Η κύρια διδακτική μέθοδος που ακολουθείται είναι οι παραδόσεις θεωρίας διά ζώσης μέσα στην αίθουσα. Οι παραδόσεις γίνονται με ηλεκτρονικό πρόγραμμα παρουσιάσεων, χρησιμοποιώντας φορητό Η/Υ, με κατάλληλη οθόνη προβολής και τρίποδο προβολής. Χρησιμοποιούνται διαδραστικές εικόνες και βίντεο για την επαρκής κατανόηση των αντικειμένων του μαθήματος. Επιπλέον, παραδόσεις γίνονται στον πίνακα με επίλυση προβλημάτων και ασκήσεων. Γίνεται χρήση λογισμικού συστήματος ασύρματης μάθησης (eclass). Όλες οι παρουσιάσεις, λυμένες ασκήσεις, πολυμεσικό υλικό, σημειώσεις, ασκήσεις προς παράδοση, εργαστηριακές ασκήσεις, ανακοινώσεις, σύνδεσμοι, κ.λπ. ανανεώνονται συχνά στο eclass. Στο εργαστήριο οι φοιτητές εκτελούν συγκεκριμένες ασκήσεις σχεδίασης δορυφορικών συστημάτων και τροχιών για την καλύτερη κατανόηση της θεωρίας.</p>

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
        ['Εργαστηριακές Ασκήσεις', 20],
        ['Σειρές Ασκήσεων', 20],
        ['Γραπτή Τελική Εξέταση', 60]

      ]);

      var options = {
        title: 'Ποσοστά βαρύτητας τελική βαθμολογία'
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
