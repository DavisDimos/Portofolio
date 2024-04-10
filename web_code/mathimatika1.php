<!DOCTYPE html>
<html lang="el">

<head>
  <title>Μαθηματικά για Μηχανικούς I</title>
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
        <h1>Μαθηματικά για Μηχανικούς I</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </hr>
        <table>
          <tr id="heading">
            <td>Κωδικός Μαθήματος:</td>
            <td>321-2343</td>

          </tr>
          <tr>
            <td>Εξάμηνο:</td>
            <td>1</td>

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
            <td>Αλέξιος Καπόρης</td>

          </tr>
        </table>

        <!--<p id="name"><b><h2>ΑΛΕΞΙΟΣ ΚΑΠΟΡΗΣ: Μόνιμος Επίκουρος Καθηγητής</b></p></h2>-->
        <hr>
        </hr>
        <h3>Ύλη Μαθήματος:</h3>
        <p align="justify">
          Πληρότητα των πραγματικών αριθμών. Συναρτήσεις. Όρια. Συνέχεια, θεωρήματα συνεχών συναρτήσεων. Ομοιόμορφη συνέχεια. Παράγωγος, παράγωγος αντίστροφης συνάρτησης, παράγωγοι τριγωνομετρικών συναρτήσεων, διαφορικό. Εφαρμογές παραγώγων,
          ακρότατα, γραφήματα συναρτήσεων, θεώρημα μέσης τιμής Cauchy, κανόνας L’Hopital, γραφική επίλυση αυτόνομων διαφορικών εξισώσεων, προσεγγιστική μέθοδος Newton. Ολοκλήρωμα, αόριστο, ορισμένο, μέθοδοι ολοκλήρωσης. Όγκος στερεών εκ περιστροφής.
          Γενικευμένα ολοκληρώματα. Υπερβατικές συναρτήσεις. Το θεώρημα Taylor. Διαφορικές εξισώσεις πρώτης τάξης (διαχωρίσιμη, ομογενής, γραμμική, Bernoulli, Ricatti, ολικού διαφορικού ή ακριβής, ολοκληρωτικός παράγοντας Euler, εξισώσεις ειδικής
          μορφής, ορθογώνιες τροχιές).
        </p>
      </div>
      <hr>
      </hr>

      <div class="left">
      </div>
      <div class="right">

        <h3>Επιδιωκόμενα μαθησιακά αποτελέσματα:</h3>

        <p align="justify">

          Ο στόχος του μαθήματος είναι να δώσει μία πλήρη αλλά και χρηστική γνώση του διαφορικού και ολοκληρωτικού λογισμού, καλύπτοντας και επεκτείνοντας την ύλη που έχει παρουσιαστεί στα τελευταία χρόνια του σχολείου. Με την επιτυχή ολοκλήρωση του
          μαθήματος, ο φοιτητής/τρια θα :
        <ul>
          <li>έχει μια στέρεη γνώση της ανάλυσης συναρτήσεων μιας μεταβλητής όπως αυτή παρουσιάζεται με τη κατάλληλη μαθηματική αυστηρότητα μέσω των αποδείξεων των περισσοτέρων θεωρημάτων και προτάσεων,</li>
          <li>έχει την ικανότητα να αντιμετωπίζει το όριο κάποιας συνάρτησης ή να μελετά τη συνέχεια και την παράγωγο της με τον κλασσικό ε-δ ορισμό,</li>
          <li>έχει την ικανότητα εφαρμογής των θεωρητικών γνώσεων σε μια σειρά άμεσων εφαρμογών από την καθημερινή ζωή, από τη γεωμετρία (εμβαδά, όγκοι) ή από τη φυσική, συνειδητοποιώντας το ζωντανό και πρακτικό περιεχόμενο του απειροστικού λογισμού,
          </li>
          <li>έχει τη γνώση του ορισμού του ορισμένου ολοκληρώματος ως μιας οριακής άθροισης,</li>
          <li>έχει την ικανότητα να χρησιμοποιεί μια ποικιλία τεχνικών για τον υπολογισμό περίπλοκων αόριστων ολοκληρωμάτων ή γενικευμένων ολοκληρωμάτων,</li>
          <li>έχει την ικανότητα να χρησιμοποιεί το ανάπτυγμα Taylor για να προσεγγίσει την τιμή μιας συνάρτησης,</li>
          <li>έχει τη γνώση της έννοιας της διαφορικής εξίσωσης πρώτης τάξης και της λύσης της μέσα στο πλαίσιο του διαφορικού και ολοκληρωτικού λογισμού,</li>
          <li>έχει τη δεξιότητα να αναγνωρίζει και να επιλύει μια μεγάλη οικογενεια από χαρακτηριστικές και χρήσιμες διαφορικές εξισώσεις πρώτης τάξης και να αυτενεργεί για την επίλυση διαφορικών εξισώσεων που θα συναντήσει στις μετέπειτα σπουδές
            του/της και στη σταδιοδρομία του/της.</li>
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
          <p> 1.Finney R.L, Weir M.D, Giordano F.R., Thomas Απειροστικός Λογισμός, Τόμος Ι, Πανεπιστημιακές Εκδόσεις Κρήτης.</p>
          <p> 2.Κραββαρίτης Δ.Χ. Μαθήματα Ανάλυσης, Εκδόσεις Τσότρας, 2017. </p>
          <p> 3.Σημειώσεις Διδάσκοντα.</p>
        </ul>
        <hr>
        </hr>
        <h3>Συμπληρωματική βιβλιογραφία:</h3>
        <p>
        <p> 1.Απειροστικός Λογισμός, Τόμος Ι, Σ. Νεγρεπόντη, Σ. Γιωτόπουλου, Ε. Γιαννακούλια, Εκδόσεις Συμμετρία.</p>
        <p> 2.Απειροστικός Λογισμός, M. Spivak, Publish or Perish, Inc.</p>
        <p> 3.Answer Book for Calculus, M. Spivak, Publish or Perish, Inc.</p>
        <p> 4.A first course in Calculus, S. Lang, Springer.</p>
        <br>
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
              <td>Φροντιστηριακές ώρες</td>
              <td>26 ώρες</td>
            </tr>
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
<p> Η αξιολόγηση και η βαθμολογία προκύπτει ως εξής:</p>
<ul>
  <li>3 υποχρεωτικές εργασίες κατά τη διάρκεια του εξαμήνου: μετρούν 30% στην τελική βαθμολογία.</li>
  <li>τελική γραπτή εξέταση: μετράει 70% στην τελική βαθμολογία</li>
</ul>
<p><b>Τελικός Βαθμός</b> = (0.3*Μ.Ο. Εργασιών) + (0.7*Βαθμός Εξέτασης)</p>
<p>Πρέπει: Τελικός Βαθμός >= 5</p>

<hr>
</hr>


<h3>Γλώσσα διδασκαλίας:</h3>
<p>
  Ελληνικά (Αγγλικά αν υπάρχουν φοιτητές/φοιτήτριες ERASMUS)</p>
<br>


<p align="justify">


  <hr>
  </hr>
<h3>Τρόπος παράδοσης μαθήματος:</h3>

Φυσική Παρουσία.
<br>


<p align="justify">
  <hr>
  </hr>
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
