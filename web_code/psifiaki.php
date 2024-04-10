<!DOCTYPE html>
<html lang="el">
<head>
  <title>Ψηφιακή Διακυβέρνηση</title>
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
        <h1>Ψηφιακή Διακυβέρνηση</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </hr>

        <table>
          <tr id="heading">
            <td>Κωδικός Μαθήματος:</td>
            <td>321-11102
</td>

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
            <td>Καρύδα Μαρία</td>

          </tr>
        </table>

        <hr>
        </hr>
        <h3>Ύλη Μαθήματος:</h3>
        <p align="justify">
          Κύριες έννοιες Ηλεκτρονικής Διακυβέρνησης. O Ελληνικός Δημόσιος Τομέας – δομή και λει-τουργίες. Κύριες υπηρεσίες προς πολίτες, επιχειρήσεις και ανάμεσα σε δημόσιους φορείς. Διαχείριση επιχειρηματικών διαδικασιών στη δημόσια διοίκηση και τοπική αυτοδιοίκηση. Τρέχουσα κατάσταση σε Διεθνές, Ευρωπαϊκό και Εθνικό επίπεδο (δείκτες ηλεκτρονικής διακυ-βέρνησης). Αρχές και κύρια ζητήματα ανοικτής και συμμετοχικής διακυβέρνησης. Συστήματα και μεθοδολογίες ηλεκτρονικής συμμετοχής και ηλεκτρονικής δημοκρατίας. Ανοικτά κυβερ-νητικά δεδομένα: διοικητικές διαδικασίες και τεχνολογίες πληροφορικής και επικοινωνιών. Κοινωνικά δίκτυα στη δημόσια διοίκηση και στην παροχή υπηρεσιών προς πολίτες και επιχει-ρήσεις. Περιπτώσεις και συστήματα από την κεντρική κυβέρνηση και την τοπική αυτοδιοίκηση. Ομαδική εργασία: Ανάπτυξη καινοτομικών πρωτοτύπων για την ηλεκτρονική διακυβέρνηση.ΑΚΑΔΗΜΑΙΚΟΥ ΕΤΟΥΣ 2019-2020ρήσεις. Περιπτώσεις και συστήματα από την κεντρική κυβέρνηση και την τοπική αυτοδιοίκηση.

        </p>
        <p  align="justify">          Ομαδική εργασία: Ανάπτυξη καινοτομικών πρωτοτύπων για την ηλεκτρονική διακυβέρνηση.
</p>
      </div>
      <hr>
      </hr>

      <div class="left">
      </div>
      <div class="right">

        <h3>Επιδιωκόμενα μαθησιακά αποτελέσματα:</h3>
        <p align="justify">
Ο/Η φοιτητής/-τρια που θα ολοκληρώσει επιτυχώς την εν λόγω Θεματική Ενότητα, αναμένεται ότι θα είναι σε θέση να:        </p>
        <ul>
          <li>  Γνωρίζει τη βασική δομή του κράτους και των κύριων οργανισμών της Ευρωπαϊκής Ένωσης
</li>
          <li>Γνωρίζει τα πιο σημαντικά πληροφοριακά συστήματα που χρησιμοπιούνται στο Δημόσιο Τομέα καθώς και τις κύριες ψηφιακές υπορεσίες προς πολίτες και επιχειρήσεις
</li>
          <li>Αναλύει την κατάσταση ενός οργανισμού όσον αφορά την ψηφιακή του ετοιμότητα.
</li>
<li>Γνωρίζει τα βασικά πρότυπα για την Ψηφιακή Διακυβέρνηση και τη Διαλειτουργκότητα σε Ελλάδα και ΕΕ
</li>
<li>Προτείνει λύσεις για τον ψηφιακό μετασχηματισμό ενός φορέα του Δημόσιου Τομέα
</li>
<li>Συμμετέχει στη σχεδίαση και υλοποίηση καινοτομικλών πληροφοριακών συστημάτων για το Δημόσιο Τομέα
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


          <p>«Ηλεκτρονική δημόσια διοίκηση, Οργάνωση, τεχνολογία και εφαρμογές»
</p>
          <p> Ιωάννης Αποστολάκης, Ευριπίδης Λουκής, Ιωάννης Χάλαρης. Εκδόσεις Παπαζήση, 2012
</p>

        <hr></hr>

        <h3>Συμπληρωματική βιβλιογραφία
</h3>
<p  align="justify">Charalabidis Y., Koussouris S. (2012) ”Empowering Open and Collaborative Governance: Technologies and Methods for On-line Citizen Engagement in Public Policy Making”, pp. 1-296, ISBN 978-3-642-27218-9, Springer Publications, 2012.
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

              <td>Προσωπική μελέτη</td>
              <td>82 ώρες</td>
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

<p  align="justify">Τελική εξέταση και εργασία (θεωρητικές και προγραμματιστικές ασκήσεις).
Ο βαθμός της εργασίας θα πρέπει να είναι ≥ 4 για συμμετοχή στις τελικές εξετάσεις. Ο βαθμός της τελικής εξέτασης πρέπει να είναι ≥ 4 για προβιβάσιμο βαθμό. Ο τελικός βαθμός διαμορφώνεται ως εξής: 0.5 *
(Βαθμός Εργαστηρίου) + 0.5 * (Βαθμός Εξέτασης).
</p>

<p  align="justify">Τα θέματα των εξετάσεων/ασκήσεων έχουν σαφώς προσδιορισμένα κριτήρια αξιολόγησης τα οποία και αναγράφονται. Οι φοιτητές έχουν την δυνατότητα να δουν το γραπτό τους μετά την αξιολόγηση και να
διαπιστώσουν τα λάθη τους. Ανακοινώνεται στο eClass η συνολική κατανομή των βαθμών του τμήματος, ώστε ο φοιτητής να μπορεί να αξιολογήσει την επίδοσή του.</p>


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
