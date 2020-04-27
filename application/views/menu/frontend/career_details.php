 <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/photo-of-people-near-wooden-table.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Berita</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li>Blog Post</li>
                        </ul>
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
                        <div class="blog-details col-12">
                            <div class="blog-inner">
                                <div class="media">
                                    <div class="image"><img src="assets/img/blog/blog-details-1.jpg" alt=""></div>
                                </div>
                                <div class="content">
                                <?php extract($career) ?>    
                                    <h4 class="title"><?= $judul_job; ?></h4>
                                    <div class="job-detail">
                                    	<p class="text-muted mb-0"><span class="glyphicon glyphicon-map-marker"></span>Start: <?= $tglstart_job; ?> End: <?= $tglend_job; ?></p>
                                    	<p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i><?= $lokasi_job; ?></p>
                                    </div>
                                    <div class="desc space__bottom--30">
                                        <?= $desc_job; ?>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-12 space__top__md--50 space__top__lm--50">
                    
                    <div class="sidebar">
                    	<h5 class="text-muted text-center pb-2"><i class="mdi mdi-map-marker mr-2"></i>Our Spirit</h5>
                       <div class="job-detail-location pt-4 border-top">
                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-bank text-muted"></i>
                                </div>
                                <p>At Wiperindonesia, we believe that developing into a better human being is a never-ending journey that can only be achieved with the sincerity to share like a manager, and the desire to always learn like an apprentice employee.</p>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="sidebar">
                    	<h5 class="text-muted text-center pb-2"><i class="mdi mdi-clock-outline mr-2"></i>Opening Hours</h5>
                        <div class="job-detail-time border-top pt-4">
                            <ul class="list-inline mb-0">
                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Monday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Tuesday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Wednesday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Thursday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Friday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Saturday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">6:30AM - 1PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted pb-0">
                                    <div class="float-left">Sunday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">Closed</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                	<div class="job-detail border rounded mt-4">
                        <a href="<?=base_url()?>career_apply/<?=$id_job?>" class="btn btn-primary btn-block">Apply For Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of blog details  ====================-->