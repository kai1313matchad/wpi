<section class="bg2" id="career">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1 class="section-heading">CAREER</h1>
                    <hr class="light">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
    <?php extract($career) ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="section-heading">Position : <?php echo $judul_job; ?></h2>
                    <hr class="light">                    
					<div class="row-clearfix">
						<div class="row">
							<div class="col-lg-2">
								<p class="text-left">
									Title
								</p>
							</div>
							<div class="col-lg-10">
								<p class="text-left">
									<?php echo $judul_job; ?>
								</p>
								<hr class="black">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
								<p class="text-left">
									Start Date
								</p>
							</div>
							<div class="col-lg-10">
								<p class="text-left">
									<?php echo $tglstart_job; ?>
								</p>
								<hr class="black">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
								<p class="text-left">
									End Date
								</p>
							</div>
							<div class="col-lg-10">
								<p class="text-left">
									<?php echo $tglend_job; ?>
								</p>
								<hr class="black">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
								<p class="text-left">
									Location
								</p>
							</div>
							<div class="col-lg-10">
								<p class="text-left">
									<?php echo $lokasi_job; ?>
								</p>
								<hr class="black">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
								<p class="text-left">
									Job Description
								</p>
							</div>
							<div class="col-lg-10">
								<!--p class="text-left">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								</p-->
								<?php echo $desc_job; ?>
								<hr class="black">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
								<p class="text-left">
									Information
								</p>
							</div>
							<div class="col-lg-10">
								<!--p class="text-left">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								</p-->
								<?php echo $info_job; ?>
								<hr class="black">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-lg-offset-2">
								<p class="text-left">
									<a href="<?php echo base_url() ?>C_dashboard/career_list"> 
										<<< Back To Career
									</a>
								</p>								
							</div>
							<div class="col-lg-4 col-lg-offset-2">
								<p class="text-right">
                    				<?php
                    					echo anchor('C_dashboard/career_apply/'.$id_job,'Career Apply >>>');
                    				?>
                    			</p>
							</div>						
						</div>
						<div class="row">
							<div class="col-lg-4 col-lg-offset-2">
								<strong>Share : </strong>
								<ul class="list-inline">
									<li>
										<a href="https://www.facebook.com/sharer.php?s=100&amp;p[url]=<?php echo current_url() ?>" target="_blank" class="btn-social2 btn-outline2">
											<i class="fa fa-facebook-square" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/share?source=sharethiscom&text=<?php echo current_url() ?>" target="_blank" class="btn-social2 btn-outline2">
											<i class="fa fa-twitter-square" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
                </div>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<h2 class="section-heading">About Us</h2>
							<p>
								Berawal dari pengalaman menangani project – project bidang konstruksi yang sudah kami kerjakan sejak tahun 2004 maka ditahun 2015 ini kami meresmikan PT. Wijaya Persada Indonesia pada tanggal 20 Februari 2015 sebagai perusahaan yang menangani bidang general contractor, trading, dan supplier. Didasari dengan keinginan dan tekad yang kuat untuk membuka usaha kontraktor dimana saat ini dengan melihat perkembangan project-project property yang semakin bertumbuh di Indonesia maka dalam hal ini kami dari jajaran manajemen yakin dan mampu mengambil peluang – peluang tersebut. 
							</p>
						</div>
					</div>
				</div>
            </div>            		
        </div>
    </section>