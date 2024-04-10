<!DOCTYPE html>
<html lang="el">

<head>
  <title>Δίκτυα Υπολογιστών</title>
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
        <h1>Δίκτυα Υπολογιστών</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </hr>

        <table>
          <tr id="heading">
            <td>Κωδικός Μαθήματος:</td>
            <td>321-1302</td>

          </tr>
          <tr>
            <td>Εξάμηνο:</td>
            <td>5</td>

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
            <td>Βλάχου Ακριβή</td>

          </tr>
        </table>

        <hr>
        </hr>
        <h3>Ύλη Μαθήματος:</h3>
        <p align="justify">
          Μοντέλο αναφοράς TCP/IP και απεικόνιση αυτού στο OSI. Στρώμα Δικτύου. Διευθυνσιοδότηση. Άμεση και έμμεση δρομολόγηση. Αλγόριθμοι και πρωτόκολλα δρομολόγησης. Αναφορά σε IPv6 και mobile IP. Έλεγχος συμφόρησης. Μέθοδοι ανοιχτού (μορφοποίηση
          κίνησης, αλγόριθμος διαρρέοντος κάδου, κ.λπ.) και κλειστού βρόχου (πακέτα φραγής, απόρριψη φορτίου, κ.λπ.). Διαδικτύωση, νοητά δίκτυα, τείχη προστασίας (firewalls). Στρώμα μεταφοράς (τριμερής χειραψία). Πρωτόκολλα TCP και UDP. Πολυμεσικές
          εφαρμογές και δίκτυα.


        </p>
      </div>
      <hr>
      </hr>

      <div class="left">
      </div>
      <div class="right">

        <h3>Επιδιωκόμενα μαθησιακά αποτελέσματα:</h3>
        <p align="justify">
          Το μάθημα αποτελεί το βασικό εισαγωγικό μάθημα στις έννοιες των δικτύων και μεταφοράς δεδομένων και των διαδικασιών διοίκησης και διαχείρισης τους. Η ύλη του μαθήματος στοχεύει στην εισαγωγή των σπουδαστών στις βασικές έννοιες της
          διαδικτύωσης, τη σύνδεση της έννοιας μεταφοράς δεδομένων με τους εκάστοτε στόχους σε ποιότητα υπηρεσίας, το αντίστοιχο περιβάλλον και την κατανόηση της συνολικής εικόνας και των απαιτήσεων για την αποτελεσματική διαχείριση της. Επίσης
          αναφέρεται σε εισαγωγικές έννοιες σε μεθοδολογίες διαχείρισης μεταφοράς δεδομένων και την επίδραση στο διαδίκτυο, έτσι ώστε ο φοιτητής να έχει μία συνολική αντίληψη των διαδικασιών και μεθοδολογιών στη μεταφορά δεδομένων. Με αυτή την έννοια
          το μάθημα αποτελεί τη βάση πάνω στην οποία συγκεκριμένες μεθοδολογίες και τεχνικές διαχείρισης στην μεταφορά δεδομένων από άκρη σε άκρη αναπτύσσονται σε επί μέρους ειδικά μαθήματα της κατεύθυνσης. Τέλος, στόχο του μαθήματος αποτελεί η
          κατανόηση από τους σπουδαστές της σημασίας της προώθησης δεδομένων στη σύγχρονη τεχνολογική εξέλιξη και της μετεξέλιξης της διαδικτύωσης, διοίκησης και διαχείρισης σε ένα διακριτό επιστημονικό πεδίο / επάγγελμα.
        </p>
        <p align="justify">

          Ο φοιτητής -τρια μετά την επιτυχή ολοκλήρωση του μαθήματος θα μπορεί να:
        <p align="justify">

        <ul>
          <li>Έχει κατανοήσει τα βασικά και κρίσιμα χαρακτηριστικά της μεταφοράς δεδομένων και διαδικτύωσης, την σύνδεση τους με γενικότερους τεχνολογικούς και επιχειρησιακούς στόχους.</li>
          <li>Έχει γνώση των εργαλείων και των τεχνικών της μεταφοράς δεδομένων και πως αυτά χρησιμοποιούνται για να εξασφαλίσουν την επιτυχή ολοκλήρωση των υπηρεσιών σε χρόνο και εντός στόχων ποιότητας υπηρεσίας</li>
          <li>Είναι σε θέση διακρίνει τους βασικούς ρόλους σε ένα πραγματικό ή μία μελέτη διαδικτύωσης και να εκτιμήσει το ρόλο των εμπλεκόμενων επιπέδων στην υλοποίηση.</li>
          <li>Χρησιμοποιεί τις μεθοδολογίες δικτύωσης και μεταφοράς δεδομένων για να προσδιορίσει βασικά στοιχεία όπως κρίσιμη διαδρομή, απώλειες, ασφάλεια και εξαρτήσεις και ένα ρεαλιστικό περιβάλλον.</li>
          <li>Συνεργαστεί με τους συμφοιτητές του για να δημιουργήσουν και να παρουσιάσουν ολοκληρωμένες εργαστηριακές ασκήσεις που περιλαμβάνουν, στοιχεία μελέτης, ανάλυσης και υλοποίησης.</li>

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
          <p> 1.Δικτύωση Υπολογιστών, J.F Kurose and K.W. Ross.</p>
          <p> 2.Δίκτυα Υπολογιστών, Andrew S. Tanenbaum. </p>
        </ul>
        <hr>
        </hr>
        <h3>Συμπληρωματική βιβλιογραφία:</h3>
        <p>
        <p> 1.Χρήσιμες πληροφορίες και συμπληρωματικό υλικό για ότι έννοιες και όρους συναντάμε μπορείτε να βρείτε στην Διαδικτυακή εγκυκλοπαίδεια Wikipedia.</p>
        <p> 2.James F. Kurose http://www-net.cs.umass.edu/personnel/kurose.html</p>
        <p> 3.William Stallings http://williamstallings.com/</p>
        <p> 4.Andrew S. Tanenbaum http://www.cs.vu.nl/~ast/</p>
        <p> 5.IEEE Network - The Magazine of Global Internetworkinghttp://www.comsoc.org/livepubs/ni/index.html.</p>
        <p> 6.«Διαδίκτυα με TCP/IP: Αρχές, Πρωτόκολλα, και Αρχιτεκτονικές» του Douglas E. Comer, εκδόσεις ΚΛΕΙΔΑΡΙΘΜΟΣ.</p>
        <p> 7.High-Speed Networks and Internets Performance and Quality of Service, Second Edition, William Stallings, Prentice-Hall.</p>
        <p> 8.Δίκτυα Ευρείας Ζώνης, Ιάκωβος Βενιέρης, Τζιόλας.</p>
        </ul>

        <hr>
        </hr>

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
              <td>Εργαστηριακές ώρες</td>
              <td>26 ώρες</td>
            <tr>
              <td>Προσωπική μελέτη</td>
              <td>57 ώρες</td>
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
<p align="justify">Τελική εξέταση 80%, εργαστηριακή εξέταση 20%</p>

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
        ['Θεωρία', 80],
        ['Εργαστήριο', 20],

      ]);

      var options = {
        title: 'Ποσοστά βαρύτητας θεωρίας-εργαστηρίου στην τελική βαθμολογία'
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
