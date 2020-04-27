<!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="<?php echo base_url() ?>assets/img/backgrounds/photo-of-two-people-shakehands.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Klien</h1>
                        <!-- <ul class="page-breadcrumb-links">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li>Client</li>
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
                            foreach ($client as $klien) {
                            ?>
                            <div class="col-lg-4 col-md-6 col-12 space__bottom--40">
                                <div class="single-project-wrapper single-project-wrapper--reduced-abs">
                                    <a class="single-project-item p-0" href="#">
                                        <img src="<?php echo base_url() ?>assets/uploads/clients/<?=$klien->path?>" class="img-fluid" alt="">
                                        <span class="single-project-title"><?=$klien->nama?></span>
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
                   
                </div>
            </div>
        </div>
    </div>