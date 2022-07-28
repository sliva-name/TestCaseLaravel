<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Markit - Digital Marketplace  HTML5 Template </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

      <!-- CSS here -->
       @vite([
       'resources/css/preloader.css',
       'resources/css/bootstrap.min.css',
       'resources/css/default.css',
       'resources/css/style.css',
       'resources/css/animate.min.css',
       'resources/css/color-switcher.css',
       'resources/css/backToTop.css',
       'resources/css/elefantFont.css',
       'resources/css/FontAwesome5Pro.css',
       'resources/css/jquery.fancybox.min.css',
       'resources/css/owl.carousel.min.css',
       'resources/css/meanmenu.css',
       'resources/css/slick.css',
       'resources/js/vendor/jquery-3.5.1.min.js',
       'resources/js/vendor/waypoints.min.js',
       'resources/js/bootstrap.bundle.min.js',
       'resources/js/jquery.meanmenu.js',
       'resources/js/slick.min.js',
       'resources/js/jquery.fancybox.min.js',
       'resources/js/isotope.pkgd.min.js',
       'resources/js/parallax.min.js',
       'resources/js/owl.carousel.min.js',
       'resources/js/backToTop.js',
       'resources/js/jquery.counterup.min.js',
       'resources/js/wow.min.js',
       'resources/js/ajax-form.js',
       'resources/js/imagesloaded.pkgd.min.js',
       'resources/js/main.js',
       ])
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Add your site or application content here -->

      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="object" id="object_one"></div>
               <div class="object" id="object_two" style="left:20px;"></div>
               <div class="object" id="object_three" style="left:40px;"></div>
               <div class="object" id="object_four" style="left:60px;"></div>
               <div class="object" id="object_five" style="left:80px;"></div>
            </div>
         </div>
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

      <!-- header area start -->
      <header>
         <div class="header__area white-bg" id="header-sticky">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-6">
                     <div class="logo">
                        <a href="index.html">
                        <img src="../assets/img/logo/logo.png" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class="col-xxl-8 col-xl-8 col-lg-8 d-none d-lg-block">
                     <div class="main-menu">
                        <nav id="mobile-menu">
                           <ul>
                              <li class="has-dropdown active">
                                 <a href="index.html">Home</a>
                                 <ul class="submenu">
                                    <li><a href="index.html">Home Wordpress</a></li>
                                    <li><a href="index-2.html">Home Plugins</a></li>
                                 </ul>
                              </li>
                              <li class="has-dropdown">
                                 <a href="product.blade.php">Themes</a>
                                 <ul class="submenu">
                                    <li><a href="product.blade.php">Product</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                 </ul>
                              </li>
                              <li><a href="product.blade.php">HTML</a></li>
                              <li><a href="support.html">Support</a></li>
                              <li  class="has-dropdown">
                                 <a href="product.blade.php">pages</a>

                                 <ul class="submenu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="documentation.html">Documentation</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="sign-up.html">Sign Up</a></li>
                                    <li><a href="sign-in.html">Log In</a></li>
                                 </ul>
                              </li>
                              <li class="has-dropdown">
                                 <a href="blog.html">Blog</a>

                                 <ul class="submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                 </ul>
                              </li>
                              <li><a href="contact.html">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-8 col-6">
                     <div class="header__action d-flex align-items-center justify-content-end">
                        <div class="header__login d-none d-sm-block">
                           <a href="sign-in.html"><i class="far fa-unlock"></i> Log In</a>
                        </div>
                        <div class="header__cart d-none d-sm-block">
                           <a href="javascript:void(0);" class="cart-toggle-btn">
                              <i class="far fa-shopping-cart"></i>
                              <span>3</span>
                           </a>
                        </div>
                        <div class="sidebar__menu d-lg-none">
                           <div class="sidebar-toggle-btn" id="sidebar-toggle">
                               <span class="line"></span>
                               <span class="line"></span>
                               <span class="line"></span>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->





      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <img src="../assets/img/logo/logo-white.png" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu"></div>
               <div class="sidebar__action mt-330">
                  <div class="sidebar__login mt-15">
                     <a href="#"><i class="far fa-unlock"></i> Log In</a>
                  </div>
                  <div class="sidebar__cart mt-20">
                     <a href="javascript:void(0);" class="cart-toggle-btn">
                        <i class="far fa-shopping-cart"></i>
                        <span>2</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      <main>
          @yield('content')
      </main>

      <!-- footer area start -->
      <footer>
         <div class="footer__area footer-bg">
            <div class="footer__top pt-90 pb-50">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4">
                        <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay=".3s">
                           <div class="footer__widget-head mb-35">
                              <h4 class="footer__widget-title">Follow our Socials</h4>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__social mb-30">
                                 <ul>
                                    <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="pin"><i class="fab fa-pinterest-p"></i></a></li>
                                 </ul>
                              </div>
                              <div class="footer__lang">
                                 <span><a href="#">US</a> English</span>
                                 <span><a href="#">ES</a> Spanish</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4">
                        <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay=".5s">
                           <div class="footer__widget-head">
                              <h4 class="footer__widget-title">Products</h4>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__link">
                                 <ul>
                                    <li><a href="#">Tutor LMS </a></li>
                                    <li><a href="#">WP Mega Menu </a></li>
                                    <li><a href="#">WP Page Builder </a></li>
                                    <li><a href="#">Themes</a></li>
                                    <li><a href="#">Interactions</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4">
                        <div class="footer__widget mb-40 wow fadeInUp footer__pl"  data-wow-delay=".7s">
                           <div class="footer__widget-head">
                              <h4 class="footer__widget-title">Resources</h4>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__link">
                                 <ul>
                                    <li><a href="#">Promotion </a></li>
                                    <li><a href="#">Submit Content</a></li>
                                    <li><a href="#">Resources</a></li>
                                    <li><a href="#">Design System</a></li>
                                    <li><a href="#">Expert</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4">
                        <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay=".9s">
                           <div class="footer__widget-head">
                              <h4 class="footer__widget-title">Products</h4>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__link">
                                 <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Contact</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4">
                        <div class="footer__widget mb-40 wow fadeInUp" data-wow-delay="1.2s">
                           <div class="footer__widget-head">
                              <h4 class="footer__widget-title">Community</h4>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__link">
                                 <ul>
                                    <li><a href="#">Forums</a></li>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Meetups</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Careers</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer__bottom">
               <div class="container">
                  <div class="footer__bottom-inner">
                     <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="footer__copyright wow fadeInUp" data-wow-delay=".5s">
                              <p>Copyright © 2021 All Rights Reserved, Design by <a href="#">Theme Pure</a></p>
                           </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="footer__bottom-link wow fadeInUp text-md-end" data-wow-delay=".8s">
                              <ul>
                                 <li><a href="#">Licence</a></li>
                                 <li><a href="#">Privacy Policy </a></li>
                                 <li><a href="#">Affiliate Notice</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer area end -->
   </body>
</html>

