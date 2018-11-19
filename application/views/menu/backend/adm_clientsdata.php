<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Menu
                            <small>Clients Data</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Clients</h3>
							</div>
							<div class="panel-body">						
								<div class="row">
									<form action="<?php echo base_url() ?>C_admin/srch_data_clients" method="post" >
										<div class="col-lg-6 col-lg-offset-6 text-right">
											<div class="input-group">
												<input type="text" name="cari" class="form-control" placeholder="Cari Berdasarkan Nama" />
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
			                            if ($error == true) {
			                            ?>
			                            <div class="alert alert-danger alert-dismissible" role="alert">
			                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
			                                <strong><?=$error?></strong>
			                            </div>
			                        <?php } ?>
			                        <?php
			                            if (@$this->input->get('sts') == "del_sukses") {
			                        ?>
			                            <div class="alert alert-success alert-dismissible" role="alert">
			                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
			                                <strong>Data berhasil di hapus!</strong>
			                            </div>
			                        <?php } ?>
			                        <?php
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
															<th class="text-center">Nama Clients</th>
															<th class="text-center">Caption</th>
															<th class="text-center">Gambar</th>
															<th class="text-center">Actions</th>
														</tr>
													</thead>
													<tbody>
														<?php for ($i = 0; $i < count($listdata); ++$i) { ?>
														<tr> 
															<td class="text-center"><?php echo ($page+$i+1); ?></td>
															<td><?php echo ucfirst($listdata[$i]->nama); ?></td>
															<td><?php echo $listdata[$i]->caption; ?></td>
															<td class="text-center">
																<img src="<?php echo base_url().'assets/uploads/clients/'.$listdata[$i]->path ?>" style="max-width: 500px;" class="img-thumbnail img-responsive">
															</td>
															<td class="text-center">
																<?php 
																	echo anchor('C_admin/menu_edit_clients/'.$listdata[$i]->id_client,'<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button>',array('onclick'=>"return confirm('Are You Sure To Edit This Data ?')")); 
									                            ?>
									                            <?php
									                            	echo anchor('C_admin/delete_clients/'.$listdata[$i]->id_client.'/'.$listdata[$i]->path,'<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>',array('onclick'=>"return confirm('Are You Sure To Delete This Data ?')")); 
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