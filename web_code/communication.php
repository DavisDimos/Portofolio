<<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Επικοινωνία</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
 z-index: 3;
 width: 250px;
 top: 43px;
 bottom: 0;
 height: inherit;
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
   <div class="w3-twothird w3-container">


 <h1>Eπικοινωνία</h1>
 <hr style="height:2px;border-width:0;color:gray;background-color:gray">
 <div class="row">
                                   <div class="col-xl-12">
                                       <!--Begin::Portlet-->
<div class="m-portlet m-portlet m-portlet--rounded-leo">
   <div class="m-portlet__head">
       <div class="m-portlet__head-caption">
           <div class="m-portlet__head-title">
               <h3 class="m-portlet__head-text">
                  <p><li> Διοικητικό προσωπικό     </li>  </p> </li>        </h3>
           </div>
       </div>
   </div>
   <div class="m-portlet__body">

       <!--begin::Content-->
       <div class="tab-content">

           <!--begin::m-widget5-->
           <div class="m-widget5">
               <div class="m-widget5__item">
                   <div class="m-widget5__content">
                       <!--                        <div class="m-widget5__pic">
                                                   <img class="m-widget7__img" src="http://www.icsd.aegean.gr/website_photos/nophoto.png" alt="">
                                               </div>-->
                       <div class="m-widget5__section">
                           <h4 class="m-widget5__title">
                               Προϊσταμένη Γραμματείας Τμήματος                            </h4>
                           <span class="m-widget5__desc">
                                Καλλιόπη Καραγιάννη                            </span>
                           <div class="m-widget5__info">
                               <span class="m-widget5__author">
                                   Τηλ.:                                </span>
                               <span class="m-widget5__info-author m--font-info">
                                   22730 82202                                </span>
                               <span class="m-widget5__info-label">
                                   Email:
                               </span>
                               <span class="m-widget5__info-date m--font-info">
                                   gramicsd [at] icsd [dot] aegean [dot] gr                                </span>
                           </div>
                       </div>
                   </div>
                   <div class="m-widget5__content">
                       <div class="m-widget5__stats1">
                       </div>
                       <div class="m-widget5__stats2">
                       </div>
                   </div>
               </div>
               <div class="m-widget5__item">
                   <div class="m-widget5__content">
                       <!--                        <div class="m-widget5__pic">
                                                   <img class="m-widget7__img" src="http://www.icsd.aegean.gr/website_photos/nophoto.png" alt="">
                                               </div>-->
                       <div class="m-widget5__section">
                           <h4 class="m-widget5__title">
                               Γραμματεία Προπτυχιακών Σπουδών                            </h4>
                           <span class="m-widget5__desc">
                                Αλέξανδρος Σχοινάς                            </span>
                           <div class="m-widget5__info">
                               <span class="m-widget5__author">
                                   Τηλ.:                                </span>
                               <span class="m-widget5__info-author m--font-info">
                                   22730 82200                                </span>
                               <span class="m-widget5__info-label">
                                   Email:
                               </span>
                               <span class="m-widget5__info-date m--font-info">
                                   dicsd [at] icsd [dot] aegean [dot] gr                                </span>
                           </div>
                       </div>
                   </div>
                   <div class="m-widget5__content">
                       <div class="m-widget5__stats1">
                       </div>
                       <div class="m-widget5__stats2">
                       </div>
                   </div>
               </div>
               <div class="m-portlet__head-title">
                   <h3 class="m-portlet__head-text">
<hr></hr>
                      <p><li> Tηλέφωνο - Email    </li>  </p> </li>     </h3>
                    <p> Tηλέφωνο: 22730-82200</p>
                    <p>  Ε-mail: www.icsd@aegean.gr</p>
               </div>
               <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      <hr></hr>
                       <p><li> Διεύθυνση</li>  </p> </li>   </h3>
                       <p>Κτήριο Λυμπέρη, Παλαμά 2 & Γοργύρας, ΤΚ. 83200
                         <br></br>
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197.04669235258888!2d26.704796865786207!3d37.79596670831651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bc6a01874a2101%3A0x8995ee8f7b70597c!2zzqTOvM6uzrzOsSDOnM63z4fOsc69zrnOus-Ozr0gzqDOu863z4HOv8-Gzr_Pgc65zrHOus-Ozr0gzrrOsc65IM6Vz4DOuc66zr_Ouc69z4nOvc65zrHOus-Ozr0gzqPPhc-Dz4TOt868zqzPhM-Jzr0gzqDOsc69LiDOkc65zrPOsc6vzr_PhQ!5e0!3m2!1sel!2see!4v1651099122027!5m2!1sel!2see" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="m-portlet__head-title">
                     <h3 class="m-portlet__head-text">
                       <hr></hr>

                        <p><li> Media </li>  </p> </li>   </h3>
                        <!-- Add font awesome icons -->
<p>Facebook:                       <a href="https://www.facebook.com/theicsd" class="fa fa-facebook"></a>
</p>
<p>Twitter:
                        <a href="https://twitter.com/icsdaegean" class="fa fa-twitter"></a>
</p>
                 </div>

         <div class="m-widget5__item">
             <div class="m-widget5__content">


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

<!-- </style>
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
