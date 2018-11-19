<section class="bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1 class="section-heading">NEWS</h1>
                    <hr class="light">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white" id="news">
        <div class="container">
        <?php extract($news) ?>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="section-heading text-center"><?php echo $judul_news; ?></h2>
                    <hr class="light">                    
					<div class="row-clearfix">
						<div class="row">							
							<img src="<?php echo base_url().'assets/uploads/news/'.$img_news ?>" class="img-responsive" alt="gedung" width="100%" height="100%">
						</div>
						<div class="row">
							<!--p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</p-->
							<?php echo $isi_news; ?>
						</div>
						<div class="row">
							<p><strong>Share : </strong></p>
							<ul class="list-inline">
								<li>
								<a href="https://www.facebook.com/sharer.php?s=100&amp;p[url]=<?php echo current_url() ?>" target="_blank" class="btn-social2 btn-outline2"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
								</li>
								<li>
								<a href="https://twitter.com/share?source=sharethiscom&text=<?php echo current_url() ?>" target="_blank" class="btn-social2 btn-outline2"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>