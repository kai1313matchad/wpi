<section class="bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1 class="section-heading">Gallery Product</h1>
                    <hr class="light">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">        
        <div class="row no-gutter">
            <div class="col-lg-4">
                <!--a href="<?php echo base_url() ?>C_dashboard/detail_gallery/<?php echo $jpo['id_product']?>" class="portfolio-link portfolio-box" -->
                <a href="<?php echo base_url() ?>C_dashboard/gallery_jpo" class="portfolio-link portfolio-box" >
                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $jpo['imgpath_product'] ?>" class="img-responsive img-product" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-name">
                                <?php echo $jpo['kategori_product'] ?>
                                <br>
                                <?php echo $jpo['nama_product'] ?>
                            </div>
                        </div>                                
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="<?php echo base_url() ?>C_dashboard/gallery_pos" class="portfolio-link portfolio-box" >
                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $pos['imgpath_product'] ?>" class="img-responsive img-product" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-name">
                                <?php echo $pos['kategori_product'] ?>
                                <br>
                                <?php echo $pos['nama_product'] ?>
                            </div>
                        </div>                                
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="<?php echo base_url() ?>C_dashboard/gallery_shelter" class="portfolio-link portfolio-box" >
                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $shelter['imgpath_product'] ?>" class="img-responsive img-product" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-name">
                                <?php echo $shelter['kategori_product'] ?>
                                <br>
                                <?php echo $shelter['nama_product'] ?>
                            </div>
                        </div>                                
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="<?php echo base_url() ?>C_dashboard/gallery_sipil" class="portfolio-link portfolio-box" >
                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $sipil['imgpath_product'] ?>" class="img-responsive img-product" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-name">
                                <?php echo $sipil['kategori_product'] ?>
                                <br>
                                <?php echo $sipil['nama_product'] ?>
                            </div>
                        </div>                                
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="<?php echo base_url() ?>C_dashboard/gallery_baja" class="portfolio-link portfolio-box" >
                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $baja['imgpath_product'] ?>" class="img-responsive img-product" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-name">
                                <?php echo $baja['kategori_product'] ?>
                                <br>
                                <?php echo $baja['nama_product'] ?>
                            </div>
                        </div>                                
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="<?php echo base_url() ?>C_dashboard/gallery_gudang" class="portfolio-link portfolio-box" >
                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $gudang['imgpath_product'] ?>" class="img-responsive img-product" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-name">
                                <?php echo $gudang['kategori_product'] ?>
                                <br>
                                <?php echo $gudang['nama_product'] ?>
                            </div>
                        </div>                                
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="<?php echo base_url() ?>C_dashboard/gallery_k_rumah" class="portfolio-link portfolio-box" >
                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $rumah['imgpath_product'] ?>" class="img-responsive img-product" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-name">
                                <?php echo $rumah['kategori_product'] ?>
                                <br>
                                <?php echo $rumah['nama_product'] ?>
                            </div>
                        </div>                                
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="<?php echo base_url() ?>C_dashboard/gallery_r_rumah" class="portfolio-link portfolio-box" >
                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $renov['imgpath_product'] ?>" class="img-responsive img-product" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-name">
                                <?php echo $renov['kategori_product'] ?>
                                <br>
                                <?php echo $renov['nama_product'] ?>
                            </div>
                        </div>                                
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="<?php echo base_url() ?>C_dashboard/gallery_c_rumah" class="portfolio-link portfolio-box" >
                    <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $cat['imgpath_product'] ?>" class="img-responsive img-product" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-name">
                                <?php echo $cat['kategori_product'] ?>
                                <br>
                                <?php echo $cat['nama_product'] ?>
                            </div>
                        </div>                                
                    </div>
                </a>
            </div>
        </div>
    </section>