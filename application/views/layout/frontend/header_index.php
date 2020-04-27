<!-- ====================  header area ====================-->
    <div class="header-area header-sticky bg-img space__inner--y40 background-repeat--x background-color--dark d-none d-lg-block" style="background-color: rgba(1, 48, 166, 0.9);">
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                   <!--  <div class="col-lg-4">
                        <div class="header-top-info">
                            <span class="header-top-info__image pr-1"><img src="<?php echo base_url() ?>assets/img/icons/phone.png" alt=""></span>
                            <span class="header-top-info__text">01225 265 847</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-info text-center">
                            <span class="header-top-info__image pr-1"><img src="<?php echo base_url() ?>assets/img/icons/clock.png" alt=""></span>
                            <span class="header-top-info__text">9.00 am - 11.00 pm</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-info text-right">
                            <a class="header-top-info__link" href="login-register.html"><span>Login</span></a> / <a class="header-top-info__link" href="login-register.html">Register</a>
                        </div>
                    </div> -->
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        <div class="header-top-info">
                            <ul>
                                <li class="email">
                                    <div class="header-image">
                                        <span class="icon"><i class="fa fa-envelope-open"></i></span>     
                                    </div>
                                    <div class="header-text">
                                        <h4><a href="index.html">needhelp@dustri.com</a></h4>
                                    </div>
                                </li>
                                <li class="phone">
                                    <div class="header-image">
                                        <span class="icon"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <div class="header-text">
                                        <h4><a href="index.html">666 888 0000</a></h4>
                                    </div>
                                </li>
                                <li class="visit">
                                    <div class="header-image">
                                        <span class="icon"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                    <div class="header-text">
                                        <h4><a href="index.html">660 broklyn street, USA</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- menu bar -->
        <div class="menu-bar position-relative">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-bar-wrapper background-color--default space__inner--x35">
                            <div class="menu-bar-wrapper-inner">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <div class="brand-logo">
                                            <a href="index.html">
                                                <img src="<?php echo base_url() ?>assets/img/wp-resize.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="navigation-area d-flex justify-content-end align-items-center">
                                            
                                            <nav class="main-nav-menu">
                                                <ul class="d-flex justify-content-end">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="about.html">Services</a></li>
                                                    <li><a href="about.html">Products</a></li>
                                                    <li><a href="about.html">News</a></li>
                                                    <li><a href="about.html">Career</a></li>
                                                    <li><a href="about.html">Client</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </nav>
                                            
                                            <!-- <div class="nav-search-icon">
                                                <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                                <div class="header-search-form">
                                                    <form action="#">
                                                        <input type="text" placeholder="Type and hit enter">
                                                        <button><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!--====================  End of header area  ====================-->
    <!--====================  mobile header ====================-->
    <div class="mobile-header header-sticky bg-img space__inner--y30 background-repeat--x background-color--dark d-block d-lg-none" data-bg="<?php echo base_url() ?>assets/img/icons/ruler.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="brand-logo">
                        <a href="index.html">
                            <img src="<?php echo base_url() ?>assets/img/wp-white-resize.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile-menu-trigger-wrapper text-right" id="mobile-menu-trigger">
                        <span class="mobile-menu-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of mobile header  ====================-->
    <!--====================  offcanvas mobile menu ====================-->
    <div class="offcanvas-mobile-menu" id="mobile-menu-overlay">
        <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger">
            <span class="menu-close"></span>
        </a>
        <div class="offcanvas-wrapper">
            <div class="offcanvas-inner-content">
                <div class="offcanvas-mobile-search-area">
                    <form action="#">
                        <input type="search" placeholder="Search ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="index.html">Homepage One</a></li>
                                <li><a href="index-2.html">Homepage Two</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="service.html">Service</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="service.html">Service Page</a></li>
                                <li><a href="service-details.html">Service Details Left Sidebar</a></li>
                                <li><a href="service-details-right-sidebar.html">Service Details Right Sidebar</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu-mobile">
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Project</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="project.html">Project Page</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item-has-children">
                                            <a href="#">Submenu Level Two</a>
                                            <ul class="sub-menu-mobile">
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info__list">
                                <li><i class="fa fa-phone"></i> 01225 265 847</li>
                                <li><i class="fa fa-clock-o"></i> 9.00 am - 11.00 pm</li>
                                <li><i class="fa fa-user"></i> <a href="login-register.html">Login / Register</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of offcanvas mobile menu  ====================