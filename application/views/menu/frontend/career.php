<section class="bg2">
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
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="section-heading">We're Hiring!!!</h2>
                    <hr class="light">
                    <?php
                    	for ($i = 0; $i < count($listdata); ++$i)
                    	{ ?>
                    		<div class="row-clearfix">
                    			<div class="row">
                    				<div class="col-lg-2">
                    					<p class="text-left">
                    						Position
                    					</p>
                    				</div>
                    				<div class="col-lg-10">
                    					<p class="text-left">
                    						<?php echo $listdata[$i]->judul_job ; ?>
                    					</p>
                    				</div>
                    			</div>
                    			<div class="row">
                    				<div class="col-lg-12">
                    					<hr class="blue">
                    					<p class="text-right">
                    						<?php
                    							echo anchor('C_dashboard/career_details/'.$listdata[$i]->id_job,'See more Details>>>');
                    						?>
                    					</p>
                    					<hr class="blue">
                    				</div>
                    			</div>
                    		</div>
					<?php
                    	}
                    ?><br>
                    <?php echo $pagination; ?>
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