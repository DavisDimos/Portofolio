<!DOCTYPE html>
<html lang="el">

<head>
  <title>Αρχική</title>
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
    * {box-sizing: border-box;}

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }


    .topnav .search-container {
      float: right;
    }

    .topnav input[type=text] {
      padding: 10px;
      font-size: 17px;
      border: none;
    }

    .topnav .search-container button {
      float: right;
      padding: 10px 10px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .topnav .search-container button:hover {
      background: #ccc;
    }

    @media screen and (max-width: 600px) {
      .topnav .search-container {
        float: none;
      }
      .topnav a, .topnav input[type=text], .topnav .search-container button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }
      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
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
    <form act`ion="action_page.php" method="post">

      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button"><a href="login_form.php">Login</a></button>

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

        <!--  <b><h1>Τμήμα Μηχανικών Πληροφοριακών και Επικοινωνιακών Συστημάτων</b></h1>
--><img alt="image" width="800px" src="icons/arxiki.png"></a>

        <div class="tab-content">
          <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
            <p class="text-justify">
              <br>
              <b>Γενικές Πληροφορίες:</b>
              <br>
              <br>
            <p align="justify">

              Το Τμήμα Μηχανικών Πληροφοριακών και Επικοινωνιακών Συστημάτων της Πολυτεχνικής Σχολής του Πανεπιστημίου Αιγαίου ιδρύθηκε το 1997.
              H αποστολή του Τμήματος είναι η παροχή υψηλού επιπέδου επιστημονικής τεχνολογικής παιδείας, η οποία κατατείνει στη δημιουργία επιστημόνων με υψηλού επιπέδου γνώσεις και
              δεξιότητες στις Τεχνολογίες της Πληροφορικής και των Επικοινωνιών. Στο πλαίσιο της αποστολής του Τμήματος το πρόγραμμα σπουδών του έχει ως βασικούς στόχους:
            </p>
            <ul>
              <li>
                <p align="justify">

                  Την επίτευξη υψηλής ποιότητας ανωτάτης παιδείας σύμφωνα με τα διεθνώς αποδεκτά πρότυπα.
                </p>
              </li>
              <li>
                <p align="justify">

                  Την τεχνολογική κατεύθυνση σπουδών.
                </p>
              </li>
              <li>
                <p align="justify">

                  Την παρακολούθηση των νέων εξελίξεων της έρευνας και της τεχνολογίας και την ένταξη και προσαρμογή του εκπαιδευτικού αντικειμένου σε αυτές.
                </p>
              </li>
              <li>
                <p align="justify">

                  Την καλλιέργεια γνώσεων και δεξιοτήτων στους αποφοίτους, που να τους επιτρέπουν να ανταποκριθούν σε ανταγωνιστικά εργασιακά περιβάλλοντα, να δραστηριοποιηθούν
                  στην έρευνα και να εκπονήσουν μεταπτυχιακές σπουδές, να παρακολουθούν διαρκώς τις εξελίξεις της έρευνας και της τεχνολογίας δια της δια βίου εκπαίδευσης.
                </p>
              </li>
            </ul>

            <p class="text-justify">

            <p align="justify">

              Η επιτυχής ολοκλήρωση του πρώτου κύκλου σπουδών, που οργανώνεται στο Τμήμα, οδηγεί στην απονομή ενιαίου και αδιάσπαστου τίτλου σπουδών μεταπτυχιακού επιπέδου (integrated master),
              στην ειδικότητα του Τμήματος, επιπέδου 7 του Εθνικού και Ευρωπαϊκού Πλαισίου Προσόντων

            </p>
            <p class="text-justify">
            <p align="justify">

              Με βάση τα στοιχεία που τηρεί η γραμματεία του Τμήματος, τον Αύγουστο 2021 οι εγγεγραμμένοι φοιτητές στο Τμήμα είναι 1284 και 251 για το Προπτυχιακό και Μεταπτυχιακό Πρόγραμμα Σπουδών αντίστοιχα.
              Επίσης, στο Τμήμα εκπονούν διδακτορική διατριβή 91 Υποψήφιοι Διδάκτορες. Οι απόφοιτοι του τμήματος ανέρχονται συνολικά σε 767, 651 και 86 για το Προπτυχιακό, Μεταπτυχιακό και Διδακτορικό Πρόγραμμα Σπουδών αντίστοιχα.<br>

            </p>
            </p>
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
