<!--====================  header area ====================-->
    <div class="header-area header-sticky bg-img space__inner--y40 background-repeat--x background-color--dark d-none d-lg-block" style="background-color: rgba(1, 48, 166, 0.9);">
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        <div class="header-top-info">
                            <ul>
                                <li class="email">
                                    <div class="header-image">
                                        <span class="icon"><i class="fa fa-envelope-open"></i></span>     
                                    </div>
                                    <div class="header-text">
                                        <h4><a href="#">admin@wiperindonesia.com</a></h4>
                                    </div>
                                </li>
                                <li class="phone">
                                    <div class="header-image">
                                        <span class="icon"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <div class="header-text">
                                        <h4><a href="#">(62-31)5678 346</a></h4>
                                    </div>
                                </li>
                                <li class="visit">
                                    <div class="header-image">
                                        <span class="icon"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                    <div class="header-text">
                                        <h4><a href="index.html">Jl. Lesti No. 42 Surabaya 60241, Jawa Timur</a></h4>
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
                                            <a href="<?php echo base_url() ?>">
                                                <img src="<?php echo base_url() ?>assets/img/wp.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="navigation-area d-flex justify-content-end align-items-center">
                                            
                                            <nav class="main-nav-menu">
                                                <ul class="d-flex justify-content-end">
                                                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                                                    <li><a href="<?php echo base_url() ?>about">Tentang Kami</a></li>
                                                    <li><a href="<?php echo base_url() ?>service">Servis</a></li>
                                                    <li><a href="<?php echo base_url() ?>product">Produk</a></li>
                                                    <li><a href="<?php echo base_url() ?>news">Berita</a></li>
                                                    <li><a href="<?php echo base_url() ?>career">Karir</a></li>
                                                    <li><a href="<?php echo base_url() ?>client">Klien</a></li>
                                                    <li><a href="<?php echo base_url() ?>contact">Kontak Kami</a></li>
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
                        <a href="<?php echo base_url() ?>">
                            <img src="<?php echo base_url() ?>assets/img/wp-white.png" class="img-fluid" alt="">
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
               <!--  <div class="offcanvas-mobile-search-area">
                    <form action="#">
                        <input type="search" placeholder="Search ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div> -->
                <nav class="offcanvas-navigation">
                    <ul>
                        <li><a href="<?php echo base_url() ?>">Home</a></li>
                        <li><a href="<?php echo base_url() ?>about">Tentang Kami</a></li>
                        <li><a href="<?php echo base_url() ?>service">Servis</a></li>
                        <li><a href="<?php echo base_url() ?>product">Produk</a></li>
                        <li><a href="<?php echo base_url() ?>news">Berita</a></li>
                        <li><a href="<?php echo base_url() ?>career">Karir</a></li>
                        <li><a href="<?php echo base_url() ?>client">Klien</a></li>
                        <li><a href="<?php echo base_url() ?>contact">Kontak Kami</a></li>
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
                        <a href="https://www.facebook.com/Wiper-1480173922043389/" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/wiperindo" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/wiperindonesia/" title="Instagram"><i class="fa fa-instagram"></i></a>
                       
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of offcanvas mobile menu  ====================