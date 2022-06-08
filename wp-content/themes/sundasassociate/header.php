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
                                            <p>09:00 AM till 18:00 PM</p>
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
                            
                            <!-- <?php
                           $args = array(
                            // 'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                            'menu_class'        => "navigation clearfix", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                            'menu_id'           => "div", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                            'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                            // 'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                            // 'container_id'      => "", // (string) The ID that is applied to the container.
                            // 'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                            // 'before'            => "", // (string) Text before the link markup.
                            // 'after'             => "", // (string) Text after the link markup.
                            // 'link_before'       => "", // (string) Text before the link text.
                            // 'link_after'        => "", // (string) Text after the link text.
                            // 'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
                            // 'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                            // 'walker'            => "", // (object) Instance of a custom walker class.
                            // 'theme_location'    => "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                            // 'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
                            // 'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
                           );
                            $menu_list = wp_nav_menu($args);
                            var_dump($menu_list);
                            ?> -->


                            <nav class="main-menu style1 navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown current"><a href="http://localhost/sundasAssociate/">Home</a>
                                        </li>
                                        <li class="dropdown"><a href="http://localhost/sundasAssociate/student-visa/">Student Visa</a>
                                           
                                        </li>
                                        <li class="dropdown"><a href="http://localhost/sundasAssociate/business-visa/">Business Visa</a>
                                         
                                        </li>
                                        <li><a href="http://localhost/sundasAssociate/job-seeker-visa/">Job Seeker Visa</a></li>
                                       
                                        <li><a href="http://localhost/sundasAssociate/migrate-visa/">Immigration Visa</a></li>
                                      
                                        <li class="dropdown"><a href="http://localhost/sundasAssociate/blog/">Blog</a>
                                           
                                        </li>
                                        <li><a href="http://localhost/sundasAssociate/contact-us/">Contact</a></li>
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
