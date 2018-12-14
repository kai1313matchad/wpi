<style>
    .box{
        width:250px;
        height:250px;
        background: none;
        display: inline-block;
        margin-left: 10px;
    }
</style>
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
    <div class="container-fluid">  
        <div class="row">
            <h2 class="section-heading text-center"><?php echo $listdata[count($listdata)-1]->kategori_product ; ?></h2>
        	<?php
                $s = 0;
				for($i=0 ; $i<count($listdata) ; $i++)
				{ $s = $i+1;
            ?>    
                <div class="box">    
                    <div class="col-lg-8 col-lg-offset-2">
                        <!-- <h2 class="section-heading text-center"><?php //echo $listdata[$i]->nama_product ; ?></h2> -->
                        <hr class="light">                    
    					<div class="row-clearfix">
    						<div class="row">					
                                <a href="<?php echo base_url()?>#portfolioModal<?php echo $s ?>" class="portfolio-link portfolio-box" data-toggle="modal">	
    							     <img src="<?php echo base_url() ?>assets/uploads/product/<?php echo $listdata[$i]->imgpath_product; ?>" class="img-responsive" width="100%" height="100%">
                                </a>
    						</div>
    						<div class="row">							
    							<?php echo $listdata[$i]->ket_product ; ?>
                                <a href="<?php echo base_url()?>#portfolioModal<?php echo $s ?>" class="btn btn-primary" data-toggle="modal">Read More</a>
    						</div>						
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
            <a href="<?php echo base_url() ?>" type="button" class="btn btn-primary">
                <<< Back To Home
            </a>
        </div>
    </div>
</section>

    