  <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="<?php echo base_url() ?>assets/img/backgrounds/people-sitting-on-chairs-beside-their-desks-in-an-office.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Karir</h1>
                        <!-- <ul class="page-breadcrumb-links">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li>Career</li>
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
                <div class="col-lg-8 col-12 order-1 order-lg-2">
                    <div class="row">
                        <?php
                        foreach ($listdata as $job) {
                        ?>
                        <div class="col-sm-12 col-12">
                            <div class="blog-post-slider__single-slide blog-post-slider__single-slide--grid-view career-list" style="">
                                
                                <div class="blog-post-slider__content">
                                    <h3 class="post-title">
                                        <a href="<?=$base_url()?>career_details/<?=$job->id_job?>"><?= $job->judul_job ; ?></a>
                                    </h3>
                                    <p class="post-excerpt"><?= strip_tags(word_limiter($job->desc_job, 7)) ?></p>
                                    <a href="<?=$base_url()?>career_details/<?=$job->id_job?>" class="see-more-link">SEE MORE DETAIL</a>
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
                <div class="col-lg-4 col-12 order-2 order-lg-1 space__top__md--50 space__top__lm--50">
                    
                    <div class="sidebar">
                        <h3 class="sidebar-title">Cari Tujuan Anda Bergabung</h3>
                        <p>Di Wiperindonesia, kami percaya hidup ini terlalu singkat untuk dihabiskan setiap hari hanya untuk memenuhi pekerjaan sehari-hari biasa. Kami mencari orang-orang yang ingin menciptakan dampak positif nyata dan membangun infrastruktur yang bermakna untuk Indonesia dan dunia.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of blog area  ====================-->