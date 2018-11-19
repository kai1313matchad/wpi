<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Menu
                            <small>Jobs Organizer</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Data Lowongan</h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<form action="<?php echo base_url() ?>C_admin/srch_data_jobs" method="post" >
										<div class="col-lg-6 col-lg-offset-6 text-right">
											<div class="input-group">
												<input type="text" name="cari" class="form-control" placeholder="Cari Berdasarkan Judul" />
												<div class="input-group-btn">
													<button type="submit" class="btn btn-default">
														<i class="glyphicon glyphicon-search"></i>
													</button>	
												</div>
											</div>	
										</div>							
									</form>
								</div><br>
								<div class="row">
									<div class="col-lg-12">
				                        <?php
				                            if (@$this->input->get('sts') == "del_sukses") {
				                        ?>
				                            <div class="alert alert-success alert-dismissible" role="alert">
				                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
				                                <strong>Data berhasil di delete!</strong>
				                            </div>
				                        <?php } ?>
				                        <?php
				                            $i = 1;

				                            if ($total==null) 
				                            {
				                            ?>
				                                <div class="alert alert-danger" role="alert">
				                                    <strong>No records found!</strong>
				                                </div>
				                            <?php
				                            } 
				                            else 
				                            {
				                        ?>
				                        		<div class="table-responsive">
				                        			<table class="table table-striped table-condensed table-bordered">
				                        				<thead>
				                        					<tr>
				                        						<th class="text-center">No</th>
				                        						<th class="text-center">Judul Lowongan</th>
				                        						<th class="text-center">Lokasi</th>
				                        						<th class="text-center">Tanggal Start</th>
				                        						<th class="text-center">Tanggal End</th>
				                        						<th class="text-center">Actions</th>
				                        					</tr>
				                        				</thead>
				                        				<tbody>
				                        					<?php for ($i = 0; $i < count($listdata); ++$i) { ?>
				                        					<tr>
				                        						<td class="text-center"><?php echo ($page+$i+1); ?></td>
				                        						<td><?php echo ucfirst($listdata[$i]->judul_job); ?></td>
				                        						<td class="text-center"><?php echo ucfirst($listdata[$i]->lokasi_job); ?></td>
				                        						<td class="text-center"><?php echo ucfirst($listdata[$i]->tglstart_job); ?></td>
				                        						<td class="text-center"><?php echo ucfirst($listdata[$i]->tglend_job); ?></td>
				                        						<td class="text-center">
																	<?php 
																		echo anchor('C_admin/menu_edit_jobs/'.$listdata[$i]->id_job,'<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button>',array('onclick'=>"return confirm('Are You Sure To Edit This Data ?')")); 
										                            ?>
										                            <?php
										                            	echo anchor('C_admin/delete_jobs/'.$listdata[$i]->id_job,'<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>',array('onclick'=>"return confirm('Are You Sure To Delete This Data ?')")); 
										                            ?>	
																</td>
				                        					</tr>
				                        					<?php } ?>
				                        				</tbody>
				                        			</table>
				                        			<?php echo $pagination; ?>
				                        		</div>
				                        <?php 
			                        	} ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->