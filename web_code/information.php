 <!DOCTYPE html>
 <html lang="el">

 <head>
   <title>information</title>
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
     <div class="container" style="background-color:#f1f1f1">
       <button type="button"> <a href="login_form.php">Login</a></button>

       <button type="button"> <a href="registers.php">Register</a></button>
       <p></p>

     </div>

     <!-- Login //password -->
     <form action="action_page.php" method="post">
       <div class="imgcontainer">
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


         <b>Στόχοι και Αντικείμενο</b>
         <p align="justify">
           Στην εποχή που το όραμα μιας Ευρωπαϊκής Κοινωνίας της Πληροφορίας και της Γνώσης, μετουσιώνεται σε δράση για την υπέρβαση των τεχνικών, κοινωνικών και οικονομικών εμποδίων και
           τη θεμελίωση Εθνικών και Ευρωπαϊκών Πληροφοριακών και Επικοινωνιακών υποδομών, η ανάπτυξη σύγχρονων και λειτουργικών Πληροφοριακών και Επικοινωνιακών Συστημάτων αποτελεί επιτακτική ανάγκη.
           Σε αυτό το πλαίσιο, το Τμήμα Μηχανικών Πληροφοριακών και Επικοινωνιακών Συστημάτων έχει ως κεντρικό στόχο τη δημιουργία επιστημόνων με υψηλού επιπέδου εκπαίδευση, δημιουργικό και κριτικό πνεύμα,
           ικανών να αναλύουν τα προβλήματα και να αξιοποιούν τις σύγχρονες Τεχνολογίες Πληροφορικής και Επικοινωνιών για το σχεδιασμό, την ανάπτυξη και τη διοίκηση Πληροφοριακών και Επικοινωνιακών συστημάτων.
           Το εκπαιδευτικό έργο του Τμήματος συνδυάζεται με την εκτεταμένη δραστηριότητα σε βασική και εφαρμοσμένη έρευνα, που στόχο έχει την παραγωγή νέας γνώσης και τη διάδοσή της στον Εθνικό και Ευρωπαϊκό χώρο.
           <br>
           <br>
           Ήδη από την εποχή της ίδρυσής του, το 1997, στο Τμήμα καταγράφηκε η οπτική ότι σε πολύ σύντομο χρονικό διάστημα οι κλασικές έννοιες του τηλεπικοινωνιακού μηχανικού και του
           επιστήμονα πληροφορικής θα πάψουν να αποτελούν αυτοτελείς οντότητες και ένα νέο ολοκληρωμένο επιστημονικό αντικείμενο, αυτό του Μηχανικού Πληροφοριακών και Επικοινωνιακών Συστημάτων,
           θα κληθεί να καλύψει τις ανάγκες αυτές.
           Η ολοκλήρωση των τεχνολογιών της πληροφορικής και των επικοινωνιών στο πλαίσιο ενιαίων συστημάτων, έδωσε στο Τμήμα έναν ιδιαίτερο χαρακτήρα, τον οποίο διατηρεί και ενισχύει.
           <br>
           <br>
           Το Τμήμα Μηχανικών Πληροφοριακών και Επικοινωνιακών Συστημάτων υιοθετεί την προαναφερόμενη αντίληψη για τη φύση των Πληροφοριακών και Επικοινωνιακών συστημάτων. Ως Πληροφοριακό νοείται ένα σύστημα που δέχεται πληροφορίες,
           τις αποθηκεύει, τις ανακτά, τις μετασχηματίζει και τις επεξεργάζεται. Το Πληροφοριακό σύστημα αποτελεί ένα οργανωμένο σύνολο ξεχωριστών αλληλεπιδρώντων στοιχείων: ανθρώπων, διαδικασιών, δεδομένων, λογισμικού και υλικού εξοπλισμού.
           Η παραπάνω θεώρηση καλύπτει όχι μόνο την πρώτη διάσταση της ονομασίας του Τμήματος, αλλά και τη δεύτερη, αφού σύμφωνα μ' αυτήν, ο όρος «Επικοινωνιακό σύστημα» δε λογίζεται ως ανεξάρτητη και συμπληρωματική, αλλά ως εγγενής διάσταση
           ενός ολοκληρωμένου Πληροφοριακού συστήματος. Έτσι, οι δύο διαστάσεις της ονομασίας του Τμήματος αντικατοπτρίζουν την πληρότητα των σπουδών, η οποία απαιτείται για την επίτευξη των τεθέντων σκοπών.
         </p>

         <br>
         <p>
           <b>Πρόγραμμα Σπουδών</b>
         </p>

         <p align="justify">
           Το Πρόγραμμα Σπουδών του Τμήματος εξελίσσεται σε 5 έτη και έχει σχεδιαστεί λαμβάνοντας υπόψη διεθνή πρότυπα σπουδών, τα οποία προσαρμόζονται στις ανάγκες της Ελληνικής πραγματικότητας.
           Καλύπτει το σύνολο των αντικειμένων που συνθέτουν το βασικό κορμό γνώσης που αφορά τα Πληροφοριακά και Επικοινωνιακά συστήματα, προσφέροντας μαθήματα υψηλής ποιότητας. Στην κατεύθυνση
           αυτή υιοθετούνται φοιτητοκεντρικά συστήματα διδασκαλίας, αξιολόγηση της εκπαιδευτικής διαδικασίας, υψηλό επίπεδο συνεργασίας μεταξύ καθηγητών - φοιτητών, αλλά και δράσεις σύνδεσης της
           διδασκαλίας με την έρευνα και την παραγωγή. Επιπλέον, το Πρόγραμμα Σπουδών ανανεώνεται και εξελίσσεται διαρκώς, ακολουθώντας τη δυναμική του κλάδου, έτσι ώστε οι σπουδές που προσφέρει
           το Τμήμα να έχουν διαρκώς σύγχρονο, δυναμικό και ανταγωνιστικό χαρακτήρα.
         </p>
       </div>
       <div class="tab-pane" id="m_tabs_1_2" role="tabpanel">
         <p class="text-justify">
           <br>
           Πολλοί απόφοιτοί μας έχουν
           συνεχίσει τις σπουδές τους για απόκτηση διδακτορικού διπλώματος ή μεταπτυχιακού
           τίτλου σπουδών, σε κορυφαία Πανεπιστήμια του κόσμου, όπως: Columbia University,
           Carnegie Mellon University, GeorgiaTech, Imperial College, University of
           Edinburgh, University of London, University of Warwick, City University,
           University of Bristol κ.ά. <br>
           <br>
           Πολλοί, επίσης, εργάσθηκαν ή εργάζονται σε εταιρείες όπως: J.P.Morgan UK, ATOS
           Origin UK, IBM Hellas, Deloitte, KPMG, PricewaterhouseCoopers, Accenture,
           Instrasoft International, Adacom, National Bank of Greece, Piraeus Bank,
           Ericsson, SingularLogic, Unisystems, Oracle, COSMOTE, Wind Hellas, European
           Dynamics, Ideal Systems, SAP, Exodus SA, SPACE Hellas, Obrela Security
           Industries, Encode κ.α. <br>
           <br>

       </div>
       <!--Τέλος-->


       <div class="w3-row">
         <div class="w3-twothird w3-container">


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

           // Get the DIV with overlay effect
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
