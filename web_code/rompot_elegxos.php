<!DOCTYPE html>
<html lang="el">
<head>
  <title>Ρομποτικός Έλεγχος</title>
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


        <h1>Ρομποτικός Έλεγχος</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </hr>

        <table>
          <tr id="heading">
            <td>Κωδικός Μαθήματος:</td>
            <td>321-2270</td>

          </tr>
          <tr>
            <td>Εξάμηνο:</td>
            <td>7</td>

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
          Βασικές συνιστώσες των ρομποτικών συστημάτων, συστήματα συντεταγμένων, ομογενείς μετασχηματισμοί, κινηματική για βραχίονα, αντίστροφη κινηματική, δυναμική βραχίονα, Jacobians, ταχύτητες και στατικές δυνάμεις, σχεδιασμός τροχιάς,
          ενεργοποιητές, αισθητήρες, όραση, ρομποτικός προγραμματισμός. Κατανόηση θεμάτων ρομποτικού ελέγχου. Σχεδιασμός και ανάπτυξη ρομποτικών συστημάτων.
          Ρομποτικές εφαρμογές – Τοποθέτηση στο χώρο – Μετακίνηση Ρομπότ - Έλεγχος.

        </p>
      </div>
      <hr>
      </hr>

      <div class="left">
      </div>
      <div class="right">

        <h3>Επιδιωκόμενα μαθησιακά αποτελέσματα:</h3>

        <p align="justify">

          Στο τέλος του μαθήματος, οι φοιτητές θα πρέπει:

        <p align="justify">

        <ul>
          <li>να είναι σε θέση να περιγράψουν και να αναλύσουν άκαμπτη κίνηση,</li>
          <li>να δώσουν την κινηματική βραχίονα με τις προκύπτουσες εξισώσεις,</li>
          <li>να επιλύσουν απλά προβλήματα αντίστροφης κινηματικής,</li>
          <li>να επιλέξουν αισθητήρες για την εκτέλεση έργων και</li>
          <li>να λύσουν προβλήματα σχεδιασμού τροχιάς.</li>

        </ul>
        </p>
        <hr>
        </hr>

        <h3>Προαπαιτούμενα:</h3>
        <p align="justify">
          Δεν απαιτούνται. </p>
          <br>
          <hr>
          </hr>

        <p align="justify">
        <h3>Εγχειρίδια του μαθήματος:</h3>
        <p>
        <ul>
          <p align="justify"> 1.Introduction to Robotics, Mechanics and Control, Third Edition, John J. Craig.</p>
          <p align="justify"> 2.Fischer-Cripps, A. C. (2002). Mechanical Engineering Series.</p>
          <p align="justify"> 3.Corke, P. I. (2001). Robotics toolbox for matlab (release 6).</p>
          <p align="justify"> 4.Siegwart, Roland, Illah Reza Nourbakhsh, and Davide Scaramuzza. Introduction to autonomous mobile robots. MIT press, 2011</p>

        </ul>
        <ul>



          <hr>
          </hr>
          <h3>Συμπληρωματική βιβλιογραφία:</h3>
          <p align="justify">
          <p align="justify"> 1.Robotics and Autonomous Systems https://www.journals.elsevier.com/robotics-and-autonomous-systems/</p>
          <p align="justify"> 2.IEEE Transactions on Automation Science and Engineering http://ieeexplore.ieee.org/xpl/RecentIssue.jsp?punumber=8856</p>
          <p align="justify"> 3.IEEE Transactions on Robotics http://ieeexplore.ieee.org/xpl/RecentIssue.jsp?punumber=8860</p>
          <p align="justify"> 4.Journal of Intelligent & Robotic Systems https://link.springer.com/journal/10846</p>

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
              <td>55 ώρες</td>
            </tr>
            <tr>
              <td>Παρουσιάσεις στην τάξη</td>
              <td>2 ώρες</td>
            </tr>
            <tr>
              <td>Τελική εξέταση-Γραπτή εργασία </td>
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
<p align="justify">
<p align="justify">Παρουσιάσεις ατομικών εργασιών 20%</p>

<p align="justify">Ερευνα ατομικής εργασίας 30%</p>

<p align="justify">Συγγραφή ατομικής εργασίας 30%</p>

<p align="justify">Εργαστηριακή ομαδική εργασία 20%</p>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


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
      ['Παρουσιάσεις', 20],
      ['Έρευνα ατομικής εργασίας', 30],
      ['Συγγραφή ατομικής εργασίας', 30],
      ['Εργαστηριακή ομαδική εργασία', 20],

    ]);

    var options = {
      title: 'Σύνθεση τελικού βαθμού μαθήματος'
    };

    var chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);
  }
</script>

<hr>
</hr>


<h3>Γλώσσα διδασκαλίας:</h3>
<p align="justify">
  Ελληνικά (Αγγλικά αν υπάρχουν φοιτητές/φοιτήτριες ERASMUS)</p>


<p align="justify">


  <hr>
  </hr>
<h3>Τρόπος παράδοσης μαθήματος:</h3>

Διδασκαλία με παρουσιάσεις που αναρτώνται μέσω portal. Ανάπτυξη και παρουσίαση θεωρητικών θεμάτων. Συζήτηση, ερωτήσεις. <br>


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
