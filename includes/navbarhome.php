<style>
   .header-area .theme-bg {
      background: linear-gradient(to right, rgb(0 80 200 / 94%), rgb(10 7 96 / 56%));

      background-size: 200% 200%;
      animation: gradientAnimation 3s ease infinite;
      
   }
   @keyframes gradientAnimation {
         0% {
            background-position: 0% 50%;
         }

         50% {
            background-position: 100% 50%;
         }

         100% {
            background-position: 0% 50%;
         }
      }
</style>
<header class="header-area tp-header-transparent p-relative">
   <div class="tp-header-top theme-bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="tp-heder-info d-flex justify-content-center justify-content-lg-start align-items-center">

                  <div class="tp-header-info-item">
                     <span>
                        <a href="tel:6389086000"><i><img src="assets/img/icon/calling.svg" alt="phone-img"></i> +91-6389086000</a>
                     </span>
                  </div>
                  <div class="tp-header-info-item">
                     <span>
                        <a href="#"><i><img src="assets/img/icon/location.svg" alt="location"></i>Karma Devi Group, Sansarpur , Basti</a>
                     </span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 d-none d-lg-block">
               <div class="tp-header-right-list d-flex justify-content-md-end">
                  <div class="tp-header-info-item d-none d-md-block">
                     <span><a href="#"><i class="fa-brands fa-facebook-f"></i></a></span>
                     <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
                     <span><a href="#"><i class="fa-brands fa-linkedin"></i></a></span>
                     <span><a href="#"><i class="fa-brands fa-youtube"></i></a></span>
                     <span><a href="#"><i class="fa-brands fa-whatsapp"></i></a></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="header-sticky" class="tp-header-mob-space tp-header-1">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-6">
               <div class="tp-header-logo-1 tp-header-logo">
                  <a href="index.php">
                     <img class="logo-1" src="assets/gd/logo/karmatagl.png" alt="logo">
                     <img class="logo-2" src="assets/gd/logo/karmatagl.png" alt="logo">
                  </a>
               </div>
            </div>
            <style>
               #header-sticky {


                  background: rgba(255, 255, 255, 0.7);
                  box-shadow: 0 2px 4px rgba(7, 37, 68, 0.1);
                  animation: 0.95s ease 0s normal forwards 1 running headerSlideDown;
               }

               #header-sticky nav>ul>li>a {
                  padding: 25px 0 25px 0;
                  color: var(--tp-common-black);
               }

               #header-sticky .offcanvas-open-btn {
                  background-color: var(--tp-theme-primary);
               }

               #header-sticky nav>ul>li.has-dropdown>a::after {
                  content: "\f107";
                  font-size: 12px;
                  color: black !important;
                  font-family: var(--tp-ff-fontawesome);
                  font-weight: 400;
                  margin-left: 6px;
                  display: inline-block;
                  -webkit-transition: all 0.3s 0s ease-out;
                  -moz-transition: all 0.3s 0s ease-out;
                  -ms-transition: all 0.3s 0s ease-out;
                  -o-transition: all 0.3s 0s ease-out;
                  transition: all 0.3s 0s ease-out;
               }

               .tp-search-open-btn {
                  color: black;
               }

               .tp-breadcrumb__area {
                  margin-top: 115px;
               }

               .tp-breadcrumb__bg {
                  background-repeat: round;
               }

               .tp-breadcrumb__area span,
               .tp-breadcrumb__area h3 {
                  color: black !important;
               }

               @media only screen and (max-width: 768px) {

                  /* Your styles for mobile go here */
                  .tp-breadcrumb__area {
                     margin-top: 150px;
                  }
               }



               #header-sticky .tp-header-btn a {
                  color: var(--tp-common-white);
                  background-color: var(--tp-theme-primary);
               }
            </style>
            <div class="col-xxl-8 col-xl-7 d-none d-xl-block">
               <div class="main-menu text-end">
                  <nav class="tp-main-menu-content">
                     <ul>
                        <li class=" tp-static">
                           <a class="tp-static" href="index.php">Home</a>

                        </li>
                        <li class="has-dropdown">
                           <a href="university-about.php">About</a>
                           <div class="tp-megamenu-main">
                              <div class="megamenu-demo-small p-relative">
                                 <div class="tp-megamenu-small-content">
                                    <div class="row tp-gx-50">
                                       <div class="col-xl-6">

                                          <div class="tp-megamenu-list">
                                             <a href="university-about.php#about">About KDG</a>
                                             <a href="university-about.php#mission">Mission and Vision</a>
                                             <a href="university-about.php#management">Leadership Team</a>

                                          </div>
                                       </div>
                                       <div class="col-xl-6">
                                          <div class="tp-megamenu-list">
                                             <a href="university-about.php#history">History</a>
                                             <a href="university-about.php#institution">Our Institutions</a>

                                          </div>
                                       </div>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </li>
                        <li class="has-dropdown">
                           <a>Institutions</a>






                           <div class="tp-megamenu-main">
                              <div class="megamenu-demo-small p-relative">
                                 <div class="tp-megamenu-small-content">
                                    <div class="row tp-gx-50">
                                       <div class="col-xl-6">
                                          <div class="tp-megamenu-list">
                                             <a href="https://omniinternationalschool.com" target="_blank">Omni International School</a>
                                             <a href="https://pspharmacycollege.com" target="_blank">PS Pharmacy College</a>
                                             <a href="https://psn.ac.in" target="_blank">PS School of Nursing</a>

                                          </div>
                                       </div>
                                       <div class="col-xl-6">
                                          <div class="tp-megamenu-list">
                                             <a href="https://dmssps.ac.in" target="_blank">DMS B.Ed. and BTC College</a>
                                             <a href="https://www.facebook.com/p/Karma-Vocational-Academy-Basti-100064198055251/" target="_blank">Karma Vocational Academy</a>
                                             <a href="https://ksm.ac.in" target="_blank">Karma Devi Smriti Mahavidyalaya</a>

                                          </div>
                                       </div>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </li>


                        <li class="has-dropdown">
                           <a>More</a>
                           <ul class="tp-submenu">



                              <li><a href="digitalzone.php">Karma Devi Digital Zone</a></li>
                              <li><a href="international.php">International Collaborations</a></li>
                              <li><a href="blog-list.php">GB Welfare Trust</a></li>
                              <li><a href="radio.php">Omni Radio 90.0 FM</a></li>


                           </ul>
                        </li>
                        <li class=" tp-static">
                           <a class="tp-static" href="gallery.php">Gallery</a>

                        </li>
                        <li class=" tp-static">
                           <a class="tp-static" href="contact.php">Contact</a>

                        </li>
                     </ul>
                  </nav>

               </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-6">
               <div class="tp-header-contact d-flex align-items-center justify-content-end">

                  <div class="tp-header-btn d-none d-md-block ml-30">
                     <a href="contact.php#contact-form">Apply Now </a>
                  </div>
                  <div class="tp-header-bar d-xl-none ml-30">
                     <button class="offcanvas-open-btn"><i class="fa-solid fa-bars"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>