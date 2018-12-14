    <!-- Portfolio Modals -->
    <!-- Modal Products 1 -->
    <?php
        for($i=0 ; $i<count($listdata) ; $i++)
        {
            $s = $i+1;
    ?>
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $s ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2><?php echo $listdata[$i]->kategori_product ?></h2>
                                <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $listdata[$i]->imgpath_product ?>" class="img-responsive" alt="">
                                <?php echo $listdata[$i]->ket_product ; ?>
                                <ul class="list-inline item-details">
                                    <li>Nama Project:
                                        <strong>
                                            <a href="#"><?php echo $listdata[$i]->nama_product ; ?></a>
                                        </strong>
                                    </li>                                
                                    <li>Kategori:
                                        <strong>
                                            <a href="#"><?php echo $listdata[$i]->kategori_product ; ?></a>
                                        </strong>
                                    </li>
                                </ul>
                                <a href="<?php echo base_url() ?>C_dashboard/products_gallery" type="button" class="btn btn-primary">
                                    <i class="fa fa-file-image-o" aria-hidden="true"></i> Gallery
                                </a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        }
    ?>