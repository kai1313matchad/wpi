 <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="<?php echo base_url() ?>assets/img/backgrounds/man-using-stylus-pen-for-touching-the-digital-tablet.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Berita</h1>
                       <!--  <ul class="page-breadcrumb-links">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li>News</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  blog area ====================-->
    <div class="blog-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <?php 
                        foreach ($newsdata as $news) {
                        ?>
                        
                        <div class="col-sm-6 col-12">
                            <div class="blog-post-slider__single-slide blog-post-slider__single-slide--grid-view">
                                <div class="blog-post-slider__image space__bottom--30">
                                    <a href="<?=base_url()?>C_dashboard/news_read/<?=$news->id_news?>"><img src="<?php echo base_url() ?>assets/uploads/news/<?=$news->img_news?>" class="img-fluid" alt=""></a>
                                </div>
                                <div class="blog-post-slider__content">
                                    <h3 class="post-title">
                                        <a href="<?=base_url()?>C_dashboard/news_read/<?=$news->id_news?>"><?=$news->judul_news?></a>
                                    </h3>
                                    <p class="post-excerpt"><?= strip_tags(word_limiter($news->kutip_news, 15)) ?></p>
                                    <a href="<?=base_url()?>C_dashboard/news_read/<?=$news->id_news?>" class="see-more-link">READ MORE</a>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        
                    </div>
                    <div class="row ">
                        <div class="col">
                            <?php echo $pagination; ?>
                        </div>
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
    <!--====================  End of blog area  ====================-->