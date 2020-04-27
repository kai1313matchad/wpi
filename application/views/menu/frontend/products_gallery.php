<!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="<?php echo base_url() ?>assets/img/backgrounds/architecture-building-city.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Galeri Produk</h1>
                        <!-- <ul class="page-breadcrumb-links">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li>Gallery Product</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="project-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-item-wrapper space__bottom--m40">
                        <div class="row">
                            <?php
                            foreach ($projects as $proj) {
                            ?>
                            <div class="col-lg-4 col-md-6 col-12 space__bottom--40">
                                <div class="single-project-wrapper single-project-wrapper--reduced-abs" id="<?=$proj->kategori_product?>">
                                    <a class="single-project-item p-0" href="<?=base_url()?>C_dashboard/detail_product/<?=$proj->id_product?>">
                                        <img src="<?php echo base_url() ?>assets/uploads/product/<?=$proj->imgpath_product?>" class="img-fluid" alt="">
                                        <span class="single-project-title"><?=$proj->nama_product?></span>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row space__top--50">
                <div class="col">
                    <?=$pagination?>
                    <!-- <ul class="page-pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Next</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>