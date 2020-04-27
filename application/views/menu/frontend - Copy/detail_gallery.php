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

    <section class="bg-white" id="news">
        <div class="container">       
            <div class="row">
            	<?php
					for($i=0 ; $i<count($listdata) ; $i++)
					{ 
				?>
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="section-heading text-center"><?php echo $listdata[$i]->nama_product ; ?></h2>
                    <hr class="light">                    
					<div class="row-clearfix">
						<div class="row">							
							<img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $listdata[$i]->imgpath_product; ?>" class="img-responsive" width="100%" height="100%">
						</div>
						<div class="row">							
							<?php echo $listdata[$i]->ket_product ; ?>
						</div>						
					</div>
                </div>
                <?php
					}
				?>
            </div>
            <div class="row text-center">
            	<?php echo $pagination; ?>
            </div>
            <div class="row text-center">
            	<a href="<?php echo base_url() ?>C_dashboard/products_gallery" type="button" class="btn btn-primary">
                	<<< Back To Gallery
                </a>
            </div>
        </div>
    </section>