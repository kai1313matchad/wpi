<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>C_admin">WIPER Indonesia</a>
            </div>
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url()?>C_admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#banner"><i class="fa fa-fw fa-image"></i> Slide Banner <i class="fa fa-fw fa-caret-down"></i></a>
                        <!--<a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>-->
                        <ul id="banner" class="collapse">
                            <li>
                                <a href="<?php echo base_url()?>C_admin/menu_ganti_banner">Slide Banner</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>C_admin/menu_tambah_banner">Tambah Banner</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#product"><i class="fa fa-fw fa-suitcase"></i> Products <i class="fa fa-fw fa-caret-down"></i></a>
                        <!--<a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>-->
                        <ul id="product" class="collapse">
                            <li>
                                <a href="<?php echo base_url()?>C_admin/menu_data_product">Data Product</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>C_admin/menu_tambah_product">Tambah Product</a>
                            </li>
                        </ul>
                    </li>
                    <li>
						<a href="javascript:;" data-toggle="collapse" data-target="#news"><i class="fa fa-fw fa-newspaper-o"></i> News <i class="fa fa-fw fa-caret-down"></i></a>
                        <!--<a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>-->
						<ul id="news" class="collapse">
                            <li>
                                <a href="<?php echo base_url()?>C_admin/menu_data_news">Data Artikel</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>C_admin/menu_tambah_news">Tambah Artikel</a>
                            </li>
                        </ul>
                    </li>
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#jobs"><i class="fa fa-fw fa-list-alt"></i> Jobs <i class="fa fa-fw fa-caret-down"></i></a>
                        <!--<a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>-->
						<ul id="jobs" class="collapse">
                            <li>
                                <a href="<?php echo base_url()?>C_admin/menu_data_jobs">Data Lowongan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>C_admin/menu_tambah_jobs">Tambah Lowongan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#clients"><i class="fa fa-fw fa-handshake-o"></i> Clients <i class="fa fa-fw fa-caret-down"></i></a>
                        <!--<a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>-->
                        <ul id="clients" class="collapse">
                            <li>
                                <a href="<?php echo base_url()?>C_admin/menu_data_clients">Data Clients</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>C_admin/menu_tambah_clients">Tambah Clients</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>C_admin/menu_data_pelamar"><i class="fa fa-fw fa-vcard-o"></i> Data Pelamar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>C_admin/menu_data_account"><i class="fa fa-fw fa-user-circle"></i> Data Account</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>C_admin/logout"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>