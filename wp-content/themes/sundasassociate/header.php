<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SundasAssociate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--    <link rel="stylesheet" href="--><?php //echo bloginfo('template_url')?><!--/assets/css/aos.css">-->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/imp.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/custom-animate.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/scrollbar.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/hiddenbar.css">

    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/color.css">
    <link href="<?php echo bloginfo('template_url')?>/assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url')?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo bloginfo('template_url')?>/assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo bloginfo('template_url')?>/assets/images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo bloginfo('template_url')?>/assets/js/html5shiv.js"></script>
    <![endif]-->


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="boxed_wrapper">

        <div class="preloader"></div>

        <!-- Main header -->


    <header class="main-header header-style-one">
        <div class="border-top" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"></div>
        <!--Start header-->
        <div class="header">
            <div class="container">
                <div class="outer-box clearfix">
                    <!--Start Header Left-->
                    <div class="header-left clearfix pull-left">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo bloginfo('template_url')?>/assets/images/resources/Logo-300x300.png" alt="Awesome Logo" title=""></a>
                        </div>
                    </div>
                    <!--End Header Left-->
                    <!--Start Header Right-->
                    <div class="header-right pull-right clearfix">
                        <div class="top">
                            <div class="header-contact-info">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-worldwide thm-clr"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Sundas Associate</h3>
                                            <p>Office No.5, Z-House, Block C-3, Gulberg-3, M.M Alam Road Lahore, Pakistan.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-countdown thm-clr"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Office Timeing</h3>
                                            <p>Mon - Fri: 09:00 - 18:00</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-email thm-clr"></span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="tel:123456789">+92 336 9853366</a></h3>
                                            <p><a href="mailto:info@templatepath.com">sundus.associate224@gmail.com</a></p>
                                            <p><a href="mailto:info@templatepath.com">zulfeqarali123@hotmail.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom clearfix">
                            <div class="left pull-left">
                                <ul class="header-menu">
                                    <li><a href="#">Online Assessment<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                    <li><a href="#">Apply now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="right pull-right">
                                <div class="header-social-link">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/Sundusassociate224/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/settings/profile"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/sundus-associate-77a922240?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BM0p9IVE%2FT9%2B6GTA5et9%2BMw%3D%3D"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/sundus.associate224?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Header Right-->
                </div>
            </div>
        </div>
        <!--End header -->

        <!--Start Header Bottom-->
        <div class="header-bottom">
            <div class="container">
                <div class="outer-box clearfix">
                    <div class="header-bottom-left pull-left">

                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <div class="inner">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <!-- Main Menu -->
                            <nav class="main-menu style1 navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown current"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-3.html">Home Page 03</a></li>
                                                <li><a href="index-4.html">Home Page 04</a></li>
                                                <li><a href="index-box-layout.html">Home Boxed Layout</a></li>
                                                <li><a href="index-rtl.html">Home RTL</a></li>
                                                <li><a href="index-onepage.html">Home OnePage</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style One</a></li>
                                                        <li><a href="index-2.html">Header Style Two</a></li>
                                                        <li><a href="index-3.html">Header Style Three</a></li>
                                                        <li><a href="index-4.html">Header Style Four</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Student Visa</a>
                                            <ul>
                                                <li><a href="coaching.html">View All Coaching</a></li>
                                                <li><a href="coaching-ielts.html">IELTS Coaching</a></li>
                                                <li><a href="coaching-pte.html">PTE Coaching</a></li>
                                                <li><a href="coaching-toefl.html">TOEFL</a></li>
                                                <li><a href="coaching-graduate.html">Graduate Re-Exam</a></li>
                                                <li><a href="coaching-scholastic.html">Scholastic Apti</a></li>
                                                <li><a href="coaching-management.html">Management Test</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Business Visa</a>
                                            <ul>
                                                <li><a href="visa.html">View All Visa</a></li>
                                                <li><a href="visa-student.html">Student Visa</a></li>
                                                <li><a href="visa-business.html">Business Visa</a></li>
                                                <li><a href="visa-job.html">Job Seeker Visa</a></li>
                                                <li><a href="visa-tourist.html">Tourist Visa</a></li>
                                                <li><a href="visa-consular.html">Consular Closings</a></li>
                                                <li><a href="visa-diplomatic.html">Diplomatic Visa</a></li>
                                                <li><a href="visa-family.html">Family Visa</a></li>
                                                <li><a href="visa-transit.html">Transit Visa</a></li>
                                                <li><a href="visa-migrate.html">Migrate Visa</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="countery.html">Job Seeker Visa</a></li>
                                       
                                        <li><a href="countery.html">Immigration Visa</a></li>
                                      
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Latest Blog</a></li>
                                                <li><a href="blog-single.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>

                    </div>
                    <div class="header-bottom-right clearfix pull-right">
                        <div class="outer-search-box-style1">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                    <form method="post" action="index.html">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Search Here" required="">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Bottom-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="index.html" class="img-responsive"><img src="<?php echo bloginfo('template_url')?>/assets/images/resources/sticky-logo.png" alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="<?php echo bloginfo('template_url')?>/assets/images/resources/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>
