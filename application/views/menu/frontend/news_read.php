 <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/man-using-stylus-pen-for-touching-the-digital-tablet.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Berita</h1>
                        <!-- <ul class="page-breadcrumb-links">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li>News Detail</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  blog details ====================-->
    <div class="blog-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <?php extract($news) ?>
                        <div class="blog-details col-12">
                            <div class="blog-inner">
                                <div class="media">
                                    <div class="image"><img src="<?php echo base_url().'assets/uploads/news/'.$img_news ?>" class="img-responsive" alt="gedung" width="100%" height="100%"></div>
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li>By <a href="#">admin</a></li>
                                       <!--  <li>30 October 2019</li>
                                        <li><a href="#">3 Comment</a></li> -->
                                    </ul>
                                    <h2 class="title"><?php echo $judul_news; ?></h2>
                                    <div class="desc space__bottom--30">
                                        <?php echo $isi_news; ?>
                                    </div>
                                    <!-- <ul class="tags">
                                        <li><i class="fa fa-tags"></i></li>
                                        <li><a href="#">Consulting</a></li>
                                        <li><a href="#">Planning</a></li>
                                        <li><a href="#">Renovation</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 space__top--60">
                            <div class="comment-wrapper">
                                <h3>Leave Your Comment</h3>
                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row row-10">
                                            <div class="col-md-6 col-12 space__bottom--20"><input type="text" placeholder="Your Name"></div>
                                            <div class="col-md-6 col-12 space__bottom--20"><input type="email" placeholder="Your Email"></div>
                                            <div class="col-12"><textarea placeholder="Your Message"></textarea></div>
                                            <div class="col-12"><input type="submit" value="Send Comment"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-12 space__top__md--50 space__top__lm--50">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                   <!--  <div class="sidebar">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="sidebar-list">
                            <li><a href="#">Renovation</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Concrete Supply</a></li>
                            <li><a href="#">Laminate Flooring</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Project Planning</a></li>
                        </ul>
                    </div> -->
                    <div class="sidebar">
                        <h3 class="sidebar-title">Popular Post</h3>
                        <?php 
                        foreach ($newsdata as $news) {
                        ?>

                        <div class="sidebar-blog">
                            <a href="<?=base_url()?>C_dashboard/news_read/<?=$news->id_news?>" class="image"><img src="<?php echo base_url() ?>assets/uploads/news/<?=$news->img_news?>" class="img-fluid" alt=""></a>
                            <div class="content">
                                <h5><a href="<?=base_url()?>C_dashboard/news_read/<?=$news->id_news?>"><?=$news->judul_news?></a></h5>
                                <p class="" style="font-size: 16px;"><?= strip_tags(word_limiter($news->kutip_news, 7)) ?></p>
                            </div>
                        </div>

                        <?php } ?>
                        
                       
                    </div>
                    <!-- <div class="sidebar">
                        <h3 class="sidebar-title">Popular Tags</h3>
                        <ul class="sidebar-tag">
                            <li><a href="#">Renovation</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Concrete</a></li>
                            <li><a href="#">Flooring</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Interior</a></li>
                            <li><a href="#">Planning</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of blog details  ====================-->