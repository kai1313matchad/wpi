<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
                for ($i=0; $i<$countbanner; $i++)
                {
                    if($i<1)
                    {
                        echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"></li>';
                    }            
                    else
                    {
                        echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
                    }

                }
            ?>            
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
                for ($i=0; $i<count($banner); $i++)
                { 
                    if($i<1) {
                    ?>                        
                        <div class="item active">
                            <img src="<?php echo base_url().'assets/uploads/banner/'.$banner[$i]->path_banner ?>" class="img-responsive">
                        </div>                   
            <?php    }
                    else { ?>
                        <div class="item">
                            <img src="<?php echo base_url().'assets/uploads/banner/'.$banner[$i]->path_banner ?>" class="img-responsive">
                        </div> 
            <?php    }
                }
            ?>            
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><strong>Who We Are</strong></h2>
                    <hr class="light">
                    <p class="text-faded text-justify">				
    					PT. Wijaya Persada Indonesia is a contractor services company in Surabaya. Working on such services as steel construction, civil works, warehouse construction, home construction, home renovation, painting services, and all types of building construction. The company has experience handling many projects in the field of construction that we have done since 2004, then in 2015 we inaugurated PT. Wijaya Persada Indonesia precisely on February 20th 2015 as a company that handles the field of general contractor, trading, and suppliers. Our mission and vision is to be a company that provides services of good quality, reliable and give satisfaction to our customer.
					</p>
                    <a href="<?php echo base_url() ?>C_dashboard/about" class="page-scroll btn btn-primary btn-xl sr-button">About Us</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                    <strong>
                        Project Construction, Renovation, and Decoration
                    </strong>
                    </h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-xs-12">
                <div class="vid-bd">
                    <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                        <iframe style="width: 100%; height: 100%; position: absolute; top: 0; left: 0;" src="https://www.youtube.com/embed/LG6QSGgvefY"></iframe>
                    <!-- </div> -->
                </div>
            </div>            
        </div>                
    </section>
	
	<section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <?php
                $lnk = "";
                for($i=0 ; $i<count($products) ; $i++)
                {
                    $s = $i+1;
                    if($i == 0 or $i == 3)
                    { if($products[$i]->kategori_product=="JPO (Jembatan Penyebrangan Orang)")
                        {$lnk="gallery_jpo";}
                      if($products[$i]->kategori_product=="Pos Security")
                        {$lnk="gallery_pos";} 
                      if($products[$i]->kategori_product=="Shelter Bus")
                        {$lnk="gallery_selter";}
                      if($products[$i]->kategori_product=="Pekerjaan Sipil")
                        {$lnk="gallery_sipil";}
                      if($products[$i]->kategori_product=="Konstruksi Baja")
                        {$lnk="gallery_baja";}
                      if($products[$i]->kategori_product=="Konstruksi Gudang")
                        {$lnk="gallery_gudang";}
                      if($products[$i]->kategori_product=="Konstruksi Rumah")
                        {$lnk="gallery_k_rumah";}
                      if($products[$i]->kategori_product=="Renovasi Rumah")
                        {$lnk="gallery_r_rumah";}
                      if($products[$i]->kategori_product=="Pengecatan Rumah")
                        {$lnk="gallery_c_rumah";}?>
                        <div class="row no-gutter">
                            <div class="col-lg-4">
                                <!-- <a href="#portfolioModal<?php echo $s ?>" class="portfolio-link portfolio-box" data-toggle="modal"> -->
                                <a href="<?php echo base_url() ?>C_dashboard/<?php echo $lnk ?>" class="portfolio-link portfolio-box">
                                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $products[$i]->imgpath_product ?>" class="img-responsive img-product" alt="">
                                    <div class="portfolio-box-caption">
                                        <div class="portfolio-box-caption-content">
                                            <div class="project-name">
                                            <?php echo $products[$i]->kategori_product ?>
                                            <br>
                                            <?php echo $products[$i]->nama_product ?>
                                        </div>
                                        </div>                                
                                    </div>
                                </a>
                            </div>                            
                <?php
                    }
                    elseif ($i > 0 and $i < 2) 
                    { if($products[$i]->kategori_product=="JPO (Jembatan Penyebrangan Orang)")
                        {$lnk="gallery_jpo";}
                      if($products[$i]->kategori_product=="Pos Security")
                        {$lnk="gallery_pos";} 
                      if($products[$i]->kategori_product=="Shelter Bus")
                        {$lnk="gallery_selter";}
                      if($products[$i]->kategori_product=="Pekerjaan Sipil")
                        {$lnk="gallery_sipil";}
                      if($products[$i]->kategori_product=="Konstruksi Baja")
                        {$lnk="gallery_baja";}
                      if($products[$i]->kategori_product=="Konstruksi Gudang")
                        {$lnk="gallery_gudang";}
                      if($products[$i]->kategori_product=="Konstruksi Rumah")
                        {$lnk="gallery_k_rumah";}
                      if($products[$i]->kategori_product=="Renovasi Rumah")
                        {$lnk="gallery_r_rumah";}
                      if($products[$i]->kategori_product=="Pengecatan Rumah")
                        {$lnk="gallery_c_rumah";}?>                
                            <div class="col-lg-4">
                                <!-- <a href="#portfolioModal<?php echo $s ?>" class="portfolio-link portfolio-box" data-toggle="modal"> -->
                                <a href="<?php echo base_url() ?>C_dashboard/<?php echo $lnk ?>" class="portfolio-link portfolio-box">
                                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $products[$i]->imgpath_product ?>" class="img-responsive img-product" alt="">
                                    <div class="portfolio-box-caption">
                                        <div class="portfolio-box-caption-content">
                                            <div class="project-name">
                                            <?php echo $products[$i]->kategori_product ?>
                                            <br>
                                            <?php echo $products[$i]->nama_product ?>
                                        </div>
                                        </div>                                
                                    </div>
                                </a>
                            </div>                        
                <?php
                    } 
                    elseif($i == 2 or $i == 5)
                    { if($products[$i]->kategori_product=="JPO (Jembatan Penyebrangan Orang)")
                        {$lnk="gallery_jpo";}
                      if($products[$i]->kategori_product=="Pos Security")
                        {$lnk="gallery_pos";} 
                      if($products[$i]->kategori_product=="Shelter Bus")
                        {$lnk="gallery_selter";}
                      if($products[$i]->kategori_product=="Pekerjaan Sipil")
                        {$lnk="gallery_sipil";}
                      if($products[$i]->kategori_product=="Konstruksi Baja")
                        {$lnk="gallery_baja";}
                      if($products[$i]->kategori_product=="Konstruksi Gudang")
                        {$lnk="gallery_gudang";}
                      if($products[$i]->kategori_product=="Konstruksi Rumah")
                        {$lnk="gallery_k_rumah";}
                      if($products[$i]->kategori_product=="Renovasi Rumah")
                        {$lnk="gallery_r_rumah";}
                      if($products[$i]->kategori_product=="Pengecatan Rumah")
                        {$lnk="gallery_c_rumah";}?>
                            <div class="col-lg-4">
                                <!-- <a href="#portfolioModal<?php echo $s ?>" class="portfolio-link portfolio-box" data-toggle="modal"> -->
                                <a href="<?php echo base_url() ?>C_dashboard/<?php echo $lnk ?>" class="portfolio-link portfolio-box">
                                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $products[$i]->imgpath_product ?>" class="img-responsive img-product"  alt="">
                                    <div class="portfolio-box-caption">
                                        <div class="portfolio-box-caption-content">
                                            <div class="project-name">
                                            <?php echo $products[$i]->kategori_product ?>
                                            <br>
                                            <?php echo $products[$i]->nama_product ?>
                                        </div>
                                        </div>                                
                                    </div>
                                </a>
                            </div>                            
                        </div>
                <?php
                    }
                    else
                    { if($products[$i]->kategori_product=="JPO (Jembatan Penyebrangan Orang)")
                        {$lnk="gallery_jpo";}
                      if($products[$i]->kategori_product=="Pos Security")
                        {$lnk="gallery_pos";} 
                      if($products[$i]->kategori_product=="Shelter Bus")
                        {$lnk="gallery_selter";}
                      if($products[$i]->kategori_product=="Pekerjaan Sipil")
                        {$lnk="gallery_sipil";}
                      if($products[$i]->kategori_product=="Konstruksi Baja")
                        {$lnk="gallery_baja";}
                      if($products[$i]->kategori_product=="Konstruksi Gudang")
                        {$lnk="gallery_gudang";}
                      if($products[$i]->kategori_product=="Konstruksi Rumah")
                        {$lnk="gallery_k_rumah";}
                      if($products[$i]->kategori_product=="Renovasi Rumah")
                        {$lnk="gallery_r_rumah";}
                      if($products[$i]->kategori_product=="Pengecatan Rumah")
                        {$lnk="gallery_c_rumah";}?>
                            <div class="col-lg-4">
                                <!-- <a href="#portfolioModal<?php echo $s ?>" class="portfolio-link portfolio-box" data-toggle="modal"> -->
                                <a href="<?php echo base_url() ?>C_dashboard/<?php echo $lnk ?>" class="portfolio-link portfolio-box">
                                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $products[$i]->imgpath_product ?>" class="img-responsive img-product" alt="">
                                    <div class="portfolio-box-caption">
                                        <div class="portfolio-box-caption-content">
                                            <div class="project-name">
                                            <?php echo $products[$i]->kategori_product ?>
                                            <br>
                                            <?php echo $products[$i]->nama_product ?>
                                        </div>
                                        </div>                                
                                    </div>
                                </a>
                            </div>                            
                <?php
                    }
                }
            ?>
        </div>
    </section>

    <aside class="bg-dark aside2 text-center">        
        <h2>Our Latest Work</h2>        
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Locations And Contacts</h2>
                    <hr class="primary">
					<div class="maps-bd">
						<iframe style="width: 100%; height: 430px !important;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.3900465890656!2d112.72947782916577!3d-7.29077566940912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb9252c1b2c7%3A0xc90b76159728f361!2sJl.+Lesti+No.42%2C+Darmo%2C+Wonokromo%2C+Kota+SBY%2C+Jawa+Timur+60241%2C+Indonesia!5e0!3m2!1sen!2s!4v1481705088372" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
						</iframe>
					</div>
                    <br>
                    <p>
                        Please fill in the contact form below to contact us via email. All incoming email will be reply within 48 hours. Thank you for contacting PT. Wijaya Persada Indonesia as a general contractor service company in Surabaya
                    </p>
                </div>
            </div>			
			<div class="row">
				<div class="col-lg-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-building text-primary sr-icons"></i>
                        <h3>Head Office</h3>
                        <p class="text-muted">
							Jl. Lesti No. 42<br>
							Surabaya 60241<br>
							East Java - Indonesia<br>
							<i class="fa fa-phone"></i>&nbspPhone&nbsp (62-31)5678 346<br>
							<i class="fa fa-fax"></i>&nbspFax&nbsp&nbsp&nbsp (62-31)568 0646<br>
							</p><p class="text-muted text-justify">
							<i class="fa fa-envelope"></i>&nbsp Email&nbsp : admin@wiperindonesia.com<br>
						</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-building text-primary sr-icons"></i>
                        <h3>Branch Office</h3>
                        <p class="text-muted">
                            Raya Balikpapan Street No. 19A<br>
                            Cideng, Central Jakarta 10160 <br>
                            Jakarta - Indonesia<br>
                            <i class="fa fa-phone"></i>&nbspPhone&nbsp (62-31)3512 775<br>
                            <i class="fa fa-fax"></i>&nbspFax&nbsp&nbsp&nbsp (62-31)3512 775<br>
                            </p><p class="text-muted text-justify">
                            <i class="fa fa-envelope"></i>&nbsp Email&nbsp :
                            admin@wiperindonesia.com<br>
                        </p>
                    </div>
                </div>
				<div class="col-lg-4 text-left">
                    <form action="<?php base_url() ?>C_dashboard/send_email" method="post" class="form-email">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Full name">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input id="email" type="text" class="form-control" name="sender" placeholder="Email">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                            <input id="company" type="text" class="form-control" name="company" placeholder="Company Name">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                            <input id="address" type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                            <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone / Mobile">
                        </div>
                        <div class="form-email-msg">
                            <div class="form-group">
                                <label for="comment">Message :</label>
                                <textarea class="form-control" rows="5" id="comment" name="msg" >
                                </textarea>
                            </div>
                            <div class="email text-center">
                                <button type="submit" class="btn btn-primary btn-md">Send</button>
                            </div>
                        </div>                        
                    </form>
                </div>
			</div>
        </div>
    </section>
	
	<aside class="bg-dark aside2">
        
    </aside>
	
	<section id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Latest News</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <?php
                for ($i=0 ; $i < count($newsdata) ; $i++)
                { 
                    if($i == 0 or $i == 4)
                    {
                        echo '<div class="row">';
                        echo '<div class="col-lg-3 text-center"> <div class="service-box">';
                        echo '<img class="img-responsive sr-icons" src="'; echo base_url(); echo'assets/uploads/news/'.$newsdata[$i]->img_news.'">';
                        echo '<h3>'; echo $newsdata[$i]->judul_news;'</h3>';
                        echo '<hr class="dark">';
                        echo '<p class="text-muted">'; echo $newsdata[$i]->kutip_news; '</p>';
                        echo '<a href="'; echo base_url(); echo'C_dashboard/news_read/'; echo $newsdata[$i]->id_news; echo'" class="btn btn-primary btn-xl sr-button">Read More</a>';
                        echo '</div></div>';       
                    }
                    elseif($i > 0 and $i < 3 )
                    {
                        echo '<div class="col-lg-3 text-center"> <div class="service-box">';
                        echo '<img class="img-responsive sr-icons" src="'; echo base_url(); echo'assets/uploads/news/'.$newsdata[$i]->img_news.'">';
                        echo '<h3>'; echo $newsdata[$i]->judul_news;'</h3>';
                        echo '<hr class="dark">';
                        echo '<p class="text-muted">'; echo $newsdata[$i]->kutip_news; '</p>';
                        echo '<a href="'; echo base_url(); echo'C_dashboard/news_read/'; echo $newsdata[$i]->id_news; echo'" class="btn btn-primary btn-xl sr-button">Read More</a>';
                        echo '</div></div>';                        
                    }
                    elseif($i == 3 or $i == 7)
                    {                        
                        echo '<div class="col-lg-3 text-center"> <div class="service-box">';
                        echo '<img class="img-responsive sr-icons" src="'; echo base_url(); echo'assets/uploads/news/'.$newsdata[$i]->img_news.'">';
                        echo '<h3>'; echo $newsdata[$i]->judul_news;'</h3>';
                        echo '<hr class="dark">';
                        echo '<p class="text-muted">'; echo $newsdata[$i]->kutip_news; '</p>';
                        echo '<a href="'; echo base_url(); echo'C_dashboard/news_read/'; echo $newsdata[$i]->id_news; echo'" class="btn btn-primary btn-xl sr-button">Read More</a>';
                        echo '</div></div>';
                        echo '</div>';
                    }
                    else
                    {
                        echo '<div class="col-lg-3 text-center"> <div class="service-box">';
                        echo '<img class="img-responsive sr-icons" src="'; echo base_url(); echo'assets/uploads/news/'.$newsdata[$i]->img_news.'">';
                        echo '<h3>'; echo $newsdata[$i]->judul_news;'</h3>';
                        echo '<hr class="dark">';
                        echo '<p class="text-muted">'; echo $newsdata[$i]->kutip_news; '</p>';
                        echo '<a href="'; echo base_url(); echo'C_dashboard/news_read/'; echo $newsdata[$i]->id_news; echo'" class="btn btn-primary btn-xl sr-button">Read More</a>';
                        echo '</div></div>';                        
                    }
                }
            ?>            
        </div><br>        
    </section>
	
	<aside class="bg-dark aside2">
        <div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 text-center">
					<a href="<?php echo base_url() ?>C_dashboard/news_list" class="page-scroll btn btn-primary btn-xl sr-button">Next News Here!</a>
				</div>
			</div>
		</div>
    </aside>

	<section class="bg-white1" id="career">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h2 class="section-heading">Find Your Purpose Join Us</h2>
                    <hr class="dark">
                    <p class="">
                        At Wiperindonesia, we believe life is too short to spend everyday just to fulfill the ordinary daily work. We are looking for people who want to create a real positive impact and build a meaningful infrastructure for Indonesia and the world.
                    </p>
                    <h2 class="section-heading">Our Spirit</h2>
                    <hr class="dark">
                    <p class="">
                        At Wiperindonesia, we believe that developing into a better human being is a never-ending journey that can only be achieved with the sincerity to share like a manager, and the desire to always learn like an apprentice employee.
                    </p>
                    <!-- <div class="col-sm-8 col-sm-offset-2"> -->
                        <a href="<?php echo base_url() ?>C_dashboard/career_list" class="page-scroll btn btn-primary btn-xl sr-button">Career Opportunity</a>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark aside2">
        
    </aside>

    <section id="clients" class="bg-white2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-heading">Our Respective Clients</h2>
                    <hr class="dark">                    
                </div>
            </div>            
            <div class="row">
                <div class="carousel slide multi-item-carousel" id="theCarousel">
                    <div class="carousel-inner">
                        <?php
                        for($i=0;$i<count($client);$i++)
                        {
                            if($i<1)
                            { ?>
                                <div class="item active">
                                    <div class="col-xs-4">
                                        <img src="<?php echo base_url() ?>assets/uploads/clients/<?php echo $client[$i]->path ?>" class="img-responsive img-carou" >
                                    </div>
                                </div>
                        <?php
                            }
                            else
                            { ?>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <img src="<?php echo base_url() ?>assets/uploads/clients/<?php echo $client[$i]->path ?>" class="img-responsive img-carou" >
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <a class="left carousel-control" href="#theCarousel" data-slide="prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                    </a>
                    <a class="right carousel-control" href="#theCarousel" data-slide="next">
                        <i class="glyphicon glyphicon-chevron-right"></i>  
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--aside class="bg-dark aside2">
        
    </aside>
    <section class="bg-white2">
        <div class="container">
            <div class="row no-gutter">
                <div class="col-lg-12">
                    <div class="carousel slide multi-item-carousel" id="theCarousel" >
                        <div class="carousel-inner">                        
                            <div class="item active">
                                <div class="col-lg-4">
                                    <a href="#1">
                                        <img src="http://placehold.it/300/f44336/000000" class="img-responsive img-carou">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-4">
                                    <a href="#1">
                                        <img src="http://placehold.it/300/9c27b0/000000" class="img-responsive img-carou">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-4">
                                    <a href="#1">
                                        <img src="http://placehold.it/300/000000/000000" class="img-responsive img-carou">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-4">
                                    <a href="#1">
                                        <img src="http://placehold.it/300/8bc34a/000000" class="img-responsive img-carou">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#theCarousel" data-slide="prev">
                            <i class="glyphicon glyphicon-chevron-left"> 
                            </i>
                        </a>
                        <a class="right carousel-control" href="#theCarousel" data-slide="next">
                            <i class="glyphicon glyphicon-chevron-right"></i>  
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section-->