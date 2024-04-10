<!DOCTYPE html>
<html lang="el">

<head>
  <title>Βάσεις Δεδομένων I</title>
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
        <h1>Βάσεις Δεδομένων I</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray"></hr >
        <table>
                   <tr id="heading">
                       <td>Κωδικός Μαθήματος:</td>
                       <td>321-0721</td>

                   </tr>
                   <tr>
                       <td>Εξάμηνο:</td>
                       <td>4</td>

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
                       <td>Λεουτσάκος Θεόδωρος</td>

                   </tr>
               </table>

      <!--<p id="name"><b><h2>ΑΛΕΞΙΟΣ ΚΑΠΟΡΗΣ: Μόνιμος Επίκουρος Καθηγητής</b></p></h2>-->
      <hr></hr>
      <h3>Ύλη Μαθήματος:</h3>
      <p align="justify">
        Εισαγωγή στα Συστήματα Διαχείρισης Βάσεων Δεδομένων (ΣΔΒΔ). Πλεονεκτήματα χρήσης ενός ΣΔΒΔ. Αρχιτεκτονική ΣΔΒΔ. Η χρήση του δίσκου για την αποθήκευση δεδομένων. Η αρχή της ανεξαρτησίας των δεδομένων. Το μοντέλο οντοτήτων-συσχετίσεων και το σχεσιακό μοντέλο δεδομένων. Μετασχηματισμός διαγράμματος οντοτήτων-συσχετίσεων σε σχήμα σχεσιακής βάσης δεδομένων. Περιορισμοί ακεραιότητας. Πράξεις ενημέρωσης βάσεων δεδομένων. Γλώσσες βάσεων δεδομένων. Σχεσιακή άλγεβρα. Η SQL ως γλώσσα χειρισμού δεδομένων: ερωτήσεις, όψεις, δηλώσεις ενημέρωσης. Εισαγωγή στην οργάνωση αρχείων και δομών ευρετηρίων. Κανονικοποίηση και εισαγωγή στην βελτιστοποίηση και στην επεξεργασία επερωτήσεων.
        </p>
          </div>
          <hr></hr>

           <div class="left">
           </div>
           <div class="right">

                  <h3>Επιδιωκόμενα μαθησιακά αποτελέσματα:</h3>

                  <p align="justify">

                    Οι φοιτητές μετά την επιτυχή ολοκλήρωση του μαθήματος μπορούν:

                  <ul>
                      <li>Να αναλύουν τις απαιτήσεις και να σχεδιάσουν μια βάση δεδομένων</li>
                      <li>Να εφαρμόζουν τις αρχές της εννοιολογικής και λογικής μοντελοποίησης και σχεδιασμού των βάσεων δεδομένων</li>
                      <li>Να υλοποιούν ερωτήματα SQL σε συστήματα διαχείρισης βάσεων δεδομένων</li>
                      <li>Να σχεδιάζουν καλά δομημένες βάσεις δεδομένων με βάση τους κανόνες κανονικοποίησης</li>
                      <li>Να κατανοούν το κόστος επεξεργασίας μιας επερώτησης σε μια βάση δεδομένων</li>
                    </ul>
                  </p>
          <hr></hr>

                  <h3>Προαπαιτούμενα:</h3>
                  <p>
                    Δεν απαιτούνται.
                    <br>
      <hr></hr>

      <p align="justify">



                  <h3>Εγχειρίδια του μαθήματος:</h3>
                  <p align="justify">
                  <ul>
              <p align="justify">  1. Elmasri R. and Navathe S.B.: "Θεμελιώδεις Αρχές Συστημάτων Βάσεων Δεδομένων", 6η Έκδοση, 2012. Μετάφραση από τις Εκδόσεις Δίαυλος.</p>
              <p align="justify">  2.Μανωλόπουλος Ι. και Παπαδόπουλος Α.: "Συστήματα Βάσεων Δεδομένων", Εκδόσεις Νέων Τεχνολογιών, 2006. </p>
              <p align="justify">  3.Ramakrishnan R., Gehrke J.: "Συστήματα Διαχείρισης Βάσεων Δεδομένων", 3η Έκδοση, 2012.</p>
                  </ul>
                  <hr></hr>
                  <h3>Συμπληρωματική βιβλιογραφία:</h3>
                  <p align="justify">
                  <p align="justify">  1.A.Silberschatz, H.F. Korth and S. Sudarshan: "Database System Concepts", Sixth Edition, McGraw-Hill, 2010.</p>
                  <p align="justify">  2.Garcia-Molina H., Ullman J. and Widom J.: "Database Systems: The Complete Book", Prentice Hall Inc., 2002.</p>
                  <p align="justify">  3.Date C.J.: "An Introduction to Database Systems", 8th Edition, Addison Wesley-Pearson Education Inc., 2004.</p>
                    <br>
      <hr></hr>

      <style>
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
      </style>
      </head>

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
          <td>Εργαστηριακές ασκήσεις</td>
          <td>26 ώρες</td>
        </tr>
        <tr>
          <td>Προσωπική μελέτη</td>
          <td>56 ώρες</td>
        </tr>
        <td>Πρόοδος</td>
        <td>1 ώρα</td>
        </tr>
        <tr>
          <td>Τελική εξέταση	</td>
          <td>3 ώρες</td>
        </tr>
        <tr>
          <td><b>Σύνολο Μαθήματος</b></td>
          <td><b>125 ώρες (5 ECTS)</b></td>
        </tr>
        <tr>

        </tr>
      </table>
      <hr></hr>

      <h3>Μέθοδοι αξιολόγησης / βαθμολόγησης:</h3>
      <p align="justify">
      <p align="justify">Τελική εξέταση 80%, εργαστηριακή εξέταση 20%</p>
      <p align="justify">Τελικός Βαθμός = Θ*0.8+Ε*0.2 και Θ>=5 και Ε>=5</p>

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


      <hr></hr>


            <h3>Γλώσσα διδασκαλίας:</h3>
                          <p align="justify">
      Ελληνικά (Αγγλικά αν υπάρχουν φοιτητές/φοιτήτριες ERASMUS)</p>
                            <br>


              <p align="justify">


      <hr></hr>
                        <h3>Τρόπος παράδοσης μαθήματος:</h3>

                          Φυσική Παρουσία.
                          <br>


            <p align="justify">

          <p></p>

      <hr></hr>

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
