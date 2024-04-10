<!DOCTYPE html>
<html lang="el">

<head>
  <title>Δομές Δεδομένων Ι</title>
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
        <h1>Δομές Δεδομένων
</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </hr>

        <table>
          <tr id="heading">
            <td>Κωδικός Μαθήματος:</td>
            <td>321-3004
</td>

          </tr>
          <tr>
            <td>Εξάμηνο:</td>
            <td>3</td>

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
            <td>Θεόδωρος Λεουτσάκος</td>

          </tr>
        </table>

        <hr>
        </hr>
        <h3>Ύλη Μαθήματος:</h3>
        <p align="justify">
          Εισαγωγή - Βασικές έννοιες αλγορίθμων και δομών δεδομένων, Αφηρημένοι Τύποι Δεδομένων (ΑΤΔ), Απόδοση αλγορίθμων, Ανάλυση αλγορίθμων, Ασυμπτωτικοί συμβολισμοί, Πίνακες (πολυδιάστατοι, ειδικές μορφές, αραιοί), Λίστες (απλά συνδεδεμένη, κυκλική, διπλά συνδεδεμένη), Στοίβες (υλοποίηση με πίνακα, υλοποίηση με λίστα, εφαρμογές), Ουρές (υλοποίηση με κυκλικό πίνακα, υλοποίηση με λίστα, εφαρμογές), Δένδρα (ποσοτικά στοιχεία, αναπαράσταση με πίνακες και δείκτες, διασχίσεις), Ουρά προτεραιότητας, Δομή σωρού, Αναζήτηση (γραμμική, δυαδική, με παρεμβολή), Ταξινόμηση (με επιλογή, με εισαγωγή, φυσαλίδας, quicksort, σωρού, με συγχώνευση), Δυαδικά δένδρα αναζήτησης, Ζυγισμένα δένδρα αναζήτησης, Κόκκινα-μαύρα δένδρα, Β-δένδρα, Κατακερματισμός (λεξικό, συνάρτηση και πίνακας κατακερματισμού, συγκρούσεις, κατακερματισμός με αλυσίδες, γραμμικός και διπλός κατακερματισμός), Γραφήματα (αναπαράσταση με πίνακα/ λίστα γειτνίασης, αναζήτηση πρώτα σε πλάτος, αναζήτηση πρώτα σε βάθος). Η σχεδίαση ή επιλογή των κατάλληλων δομών δεδομένων για συγκεκριμένα προγραμματιστικά προβλήματα. Η υλοποίηση και αξιολόγηση διαφορετικών δομών. Βασικές αλγοριθμικές τεχνικές.
        </p>

      </div>
      <hr>
      </hr>

      <div class="left">
      </div>
      <div class="right">

        <h3>Επιδιωκόμενα μαθησιακά αποτελέσματα:</h3>
        <p align="justify">
          Ο/Η φοιτητής/-τρια που θα ολοκληρώσει επιτυχώς το εν λόγω μάθημα, αναμένεται ότι θα είναι σε θέση να:
        <ul>
        <li>Αναφέρει τα χαρακτηριστικά των βασικών δομών δεδομένων.
</li>
<li>Αναφέρει και να εξηγεί βασικούς αλγόριθμους εύρεσης και ταξινόμησης στοιχείων σε βασικές δομές δεδομένων.
</li>
<li>Αναφέρει και να εξηγεί βασικούς αλγόριθμους διέλευσης και διαχείρισης δέντρων και γράφων.
</li>
<li>Αναφέρει και να εξηγεί τρεις ασυμπτωτικούς συμβολισμούς.
</li>
<li>Σχολιάζει την ποιότητα μιας λύσης σε σχέση με τον χρόνο εκτέλεσης του αντίστοιχου αλγορίθμου.
</li>
<li>Να σχεδιάζει την λύση ενός προβλήματος και να επιλέγει κατάλληλες δομές δεδομένων.
</li>
<li>Αναλύει την ποιότητα μιας λύσης σε σχέση με τον χρόνο εκτέλεσης των επιμέρους διαδικασιών της.
</li>
<li>Τροποποιεί κατάλληλα γνωστούς αλγόριθμους για να μπορούν να αξιοποιηθούν στην λύση ενός προβλήματος.
</li>
<li>Υλοποιεί γνωστούς και νέους αλγόριθμους.
</li>
<li>Αξιολογεί την ποιότητα του σχεδιασμού της λύσης ενός προβλήματος και να συγκρίνει ανάμεσα σε διάφορες εναλλακτικές επιλογές για την λύση ενός προβλήματος.
</li>
<li>Ελέγχει και να επαληθεύει την ορθότητα μιας λύσης ενός προβλήματος.
</li>
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
<ul>
  <p>1. Robert Sedgewick. Αλγόριθμοι σε C, Μέρη 1-4: Θεμελιώδεις Εννοιες, Δομές Δεδομένων, Ταξινόμηση, Ααναζήτηση. 3η έκδοση/2006, Εκδόσεις Κλειδάριθμος ΕΠΕ, ISBN: 960-209-896-1.
</p>
<p>2. Sahnii Sartaj. Δομές δεδομένων, αλγόριθμοι και εφαρμογές C++. 1η έκδοση/2004, Εκδόσεις Α. ΤΖΙΟΛΑ Ο.Ε., ISBN: 978-960-418-030-1.
<p>
</ul>


        <hr></hr>

        <h3>Συμπληρωματική βιβλιογραφία
</h3>
<p  align="justify">1. Τ. Cormen, E. Leiserson, L. Rivest, C. Stein, Εισαγωγή στους Αλγορίθμους, Τόμος Ι, 1η Εκδοση/2009 Παν/κές Εκδόσεις Κρήτης, ISBN: 978-960-524-225-1.
</p>
<p align="justify">2. M. A. Weiss, Data Structures and Algorithm Analysis in Java, Prentice Hall; 3rd edition, 2011. ISBN 978-0132576277.
</p>
<p align="justify">3. M. Goodrich και R. Tamassia, Data Structures and Algorithms in Java, Wiley; 5th edition, 2010. ISBN 978-0470383261.
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
<p align="justify">Ατομικές και ομαδικές εργασίες, πρακτική εξάσκηση στο εργαστήριο, μικρά τεστ στη μορφή κουίζ, τελική γραπτή εξέταση.</p>
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
              <td>Εργαστηριακές Ασκήσεις	</td>
              <td>26 ώρα</td>
            </tr>
            <tr>
              <td>Προσωπική μελέτη</td>

              <td>56 ώρες</td>
            </tr>
            <tr>
              <td>Πρόοδος	 </td>
              <td>1 ώρα</td>
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

<p  align="justify">Πρόοδος

Γραπτή τελική εξέταση
</p>


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
