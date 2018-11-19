<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Menu
                            <small>Edit Banner</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
					<form method="post" action="<?=base_url()?>C_admin/edit_banner" enctype="multipart/form-data">
						<?php extract($dat) ?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Edit Banner</h3>
							</div>
							<div class="panel-body">
								<div class="row">
								<?php
		                            if ($error == true) {
		                            ?>
		                            <div class="col-lg-12">
		                            	<div class="alert alert-danger alert-dismissible" role="alert">
			                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
			                                <strong><?=$error?></strong>
			                            </div>
		                            </div>		                            
		                        <?php } ?>
		                        <?php if(@$msg<>"") echo @$msg; ?>		                       
		                        	<div class="col-lg-10 col-lg-offset-2">
		                        		<div>
		                        			<img src="<?php echo base_url().'assets/uploads/banner/'.$path_banner ?>" style="max-width: 500px;" class="img-thumbnail img-responsive">
		                        		</div><br/>
		                        	</div> 
									<div class="col-lg-2">
										<label>Pilih Gambar</label>
									</div>
									<div class="col-lg-4">
										<div class="input-group">
					                        <label class="input-group-btn">
					                            <span class="btn btn-primary">
					                                Browse&hellip; <input type="file" style="display: none;" name="img" multiple>
					                            </span>
					                        </label>
					                        <input type="text" class="form-control" readonly>
					                    </div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-lg-offset-2">
										<label>Ukuran Gambar Optimal : Lebar 1350px Tinggi 670px</label><br>
										<label style="color:red ;">Ukuran File Maks : 3MB</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2">
										<label>Judul Banner</label>
									</div>
									<div class="col-lg-4">
										<div class="input-group">
											<span class="input-group-addon" type="button"><i class="glyphicon glyphicon-pencil"></i></span>
											<input id="judul" type="text" class="form-control" name="judul" value="<?php echo $nama_banner; ?>">
										</div><br>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2">
										<label>Keterangan Banner</label>
									</div>
									<div class="col-lg-10">
										<div class="form-group">
											<textarea id="isi" name="isi" class="form-control" rows="5" style="resize: vertical;"  ><?php echo $ket_banner; ?></textarea>
										</div>
									</div>
								</div>								
								<div class="row">
									<div class="col-lg-3 col-lg-offset-9 text-right">
										<input type="hidden" name="id" value="<?php echo $id_banner; ?>">
										<input type="hidden" name="path" value="<?php echo $path_banner; ?>">
										<button class="btn btn-primary" type="submit">
											Save Banner
										</button>
									</div>
								</div>
							</div>
						</div>
					</form>						
					</div>
				</div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Modal -->    
    <!-- /Modal -->
    <!-- tinymceplug -->
    <script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
	<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
	<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
	<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/plugins/wordcount/plugin.js"></script>
	<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
    <!-- /tinymceplug -->