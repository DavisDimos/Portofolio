<!DOCTYPE html>
<html lang="el">

<head>
  <title>Αντικειμενοστρεφής Προγραμματισμός ΙI</title>
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
        <h1>Αντικειμενοστρεφής Προγραμματισμός ΙI</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </hr>

        <table>
          <tr id="heading">
            <td>Κωδικός Μαθήματος:</td>
            <td>321-3652</td>

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
            <td>Δούμα Αναστασία</td>

          </tr>
        </table>

        <hr>
        </hr>
        <h3>Ύλη Μαθήματος:</h3>
        <ul>
          <li>  Εισαγωγή στην τεχνολογία αντικειμένων και στη UML.</li>
          <li>  Η Java ως αντικειμενοστραφής γλώσσα προγραμματισμού.</li>
          <li>  Βασικές έννοιες, εκφράσεις, τελεστές, προτάσεις ελέγχου.</li>
          <li>Διαδικασία σύνταξης προγράμματος: Κλάσεις, αντικείμενα, μέθοδοι και μεταβλητές στιγμιοτύπων, ενθυλάκωση. Πίνακες και λίστες πινάκων. Μέθοδοι δημιουργοί, υπερφόρτωση, επικάλυψη, προσδιοριστές ορατότητας, κληρονομικότητα, πολυμορφισμός.
</li>
<li>Διαχείριση εξαιρέσεων.
</li>
<li>Αρχεία, ροές και σειριακή επεξεργασία αντικειμένων.
</li>
<li>Γενικές συλλογές, γενικεύσεις.
</li>
<li>Πολυνηματική επεξεργασία στη Java: Μηχανισμοί της Java για την υποστήριξη του ταυτόχρονου προγραμματισμού.
</li>
<li>Διασύνδεση χρήστη, το AWT, γραφικά και Java 2D API. Προσθήκη κίνησης και ήχου, εικόνες, διαχειριστές διατάξεων. Χρήση του SWING.
</li>
<li>Τοποθέτηση διαλογικών προγραμμάτων στο Διαδίκτυο.
</li>
<li>Εισαγωγή στη δικτύωση με Java.
</li>

        </ul>
      </div>
      <hr>
      </hr>

      <div class="left">
      </div>
      <div class="right">

        <h3>Επιδιωκόμενα μαθησιακά αποτελέσματα:</h3>
        <p align="justify">
        Παρουσιάζονται και αναλύονται τα βασικά χαρακτηριστικά της αντικειμενοστραφούς σχεδίασης με χρήση της γλώσσας προγραμματισμού Java. Σκοπός του μαθήματος είναι:
        </p>
        <ul>
          <li> Η απόκτηση γνώσεων και σχετικής εμπειρίας ώστε οι φοιτητές να είναι ικανοί να χρησιμοποιούν με τον προσφορότερο τρόπο τα χαρακτηριστικά της γλώσσας ανάλογα με το πρόβλημα.
</li>
          <li>  Η κατανοήση και διάκριση μεταξύ των διαφορετικών χαρακτηριστικών που παρέχονται από ευρέως χρησιμοποιούμενες γλώσσες αντικειμενοστραφούς προγραμματισμού, όπως η C++ και η Ruby.
</li>
</ul>
        <p>Οι βασικοί εκπαιδευτικοί στόχοι του μαθήματος που αντικατοπτρίζονται σε μαθησιακά αποτελέσματα είναι:
</p>

<ul>
  <li>Η απόκτηση και η ανάπτυξη αντικειμενοστραφούς προγραμματιστικής σκέψης. Τούτο συμβάλει στην εξοικείωση του φοιτητή με τις έννοιες της αντικειμενοστραφούς σχεδίασης, ανεξάρτητα από την εκάστοτε πλατφόρμα και γλώσσα προγραμματισμού.
</li>
<li>Η απόκτηση συνολικής εικόνας - για το ευρέως χρησιμοποιούμενο σήμερα - περιβάλλον προγραμματισμού Java, τις εντολές της γλώσσας, τις δυνατότητές της και τα επιμέρους χαρακτηριστικά της (βιβλιοθήκες κλάσεων, δομές δεδομένων, κ.τ.λ.). Αυτό οδηγεί σε βέλτιστες επιλογές στη φάση της ανάλυσης, του σχεδιασμού και της υλοποίησης προγραμματιστικών εργασιών και επιτρέπει τη δημιουργία εφαρμογών Java για κάθε υπολογιστικό περιβάλλον.
</li>
<li>Η καλλιέργεια της αναλυτικής αντικειμενοσταφούς προγραμματιστικής σκέψης και της ικανότητας εμβάθυνσης. Αυτό βοηθάει στην αντιμετώπιση προβλημάτων που συχνά ανακύπτουν στη φάση του σχεδιασμού και υλοποίησης σύνθετων προγραμματιστικών εργασιών.
</li>
</ul>

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
          <p>- Liang D. Y., Java, 10η έκδοση, Εκδόσεις Τζιόλα (μετάφραση).
</p>
          <p>- Deitel Harvey M., Deitel Paul J., JAVA Προγραμματισμός, 10η έκδοση, Εκδόσεις Γκιούρδα (μετάφραση).
</p>
<p>- Cadenhead R. and Lemay L., Πλήρες Εγχειρίδιο της Java 7, 6η έκδοση, Εκδόσεις Γκιούρδα (μετάφραση).
</p>
<p>- Κάβουρας, Ι. Κ., Ρουκουνάκη, Α. Α., Προγραμματισμός με Java, Κλειδάριθμος.
</p>
<p>- Horton, I., Beginning Java 2.
</p>
<p>- Horstmann, K. Big Java, Wiley.
</p>
<p>- Horstmann, C. S., Cornell, G., Core Java, Prentice Hall.
</p>
<p>- Eckel, B., Thinking in Java, Prentice Hall, 2nd Edition.
</p>
<p>- Naughton, P., Java Handbook, Osborne.
</p>
<p>- Burns, J., Javascript Goodies, Earthweb press.
</p>
<p>- Kathy Sierra and Bert Bates, SCJP Sun Certified Programmer for Java.
</p>
<p>- Cay S. Horstmann, Java 8 for the Really Impatient.
</p>
<p>- Brian Goetz and Tim Peierls, Java Concurrency in Practice.
</p>
<p>- Kathy Sierra and Bert Bates, Head First Java, 2nd Edition.
</p>
<p>- Joshua Bloch, Effective Java, 2nd Edition.
</p>
<p>- Craig Walls, Spring in Action, 4th edition.
</p>
<p>- Christian Bauer and Gavin King, Java Persistence with Hibernate.
</p>
<p>- Bear Bibeault and Yehuda Katz, jQuery in Action.
</p>
<p>- Eric Freeman and Bert Bates, Head First Design Patterns.
</p>
<p>- Erich Gamma and Richard Helm, Design Patterns: Elements of Reusable Object-Oriented Software.
</p>
<p>- Robert C. Martin, Clean Code: A Handbook of Agile Software Craftsmanship.
</p>
<p>- Robert Sedgewick and Kevin Wayne, Algorithms, 4th Edition.
</p>
<p>- Narasimha Karumanchi, Data Structures and algorithms Made Easy in Java, 2nd edition.
</p>
<p>- Jon Bentley, Programming Pearls, 2nd Edition.
</p>
<p>- Yegor Bugayenko, Elegant Objects (Vol. 1).
</p>
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
              <td>Εργαστηριακές ώρες</td>
              <td>26 ώρες</td>
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
<p>
<p>Ι. Γραπτή εξέταση (70%), που περιλαμβάνει:</p>
<ul>
  <li>- Ερωτήσεις πολλαπλής επιλογής,.
</li>
<li>- Ερωτήσεις σύντομης απάντησης.
</li>
<li>- Επίλυση προβλημάτων.
</li>
</ul>
<p>ΙΙ. Εξέταση εργαστηρίου (30%) που περιλαμβάνει:
</p>
<ul>
  <li>- Τρείς προγραμματιστικές εργασίες.
</li>
<li>- Προφορική εξέταση.
</li>
</ul>
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
        ['Θεωρία', 70],
        ['Εργαστήριο', 30],

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
