<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Menu
                            <small>Edit Product</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
					<?php extract($dat) ?>
					<form method="post" action="<?=base_url()?>C_admin/edit_product" enctype="multipart/form-data">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Edit Product</h3>
							</div>
							<div class="panel-body">
								<div class="row">
								<?php echo validation_errors(); ?>
								<?php if(@$msg<>"") echo @$msg; ?>
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
		                        	<div class="col-lg-10 col-lg-offset-2">
		                        		<div>
		                        			<img src="<?php echo base_url().'assets/uploads/product/'.$imgpath_product ?>" style="max-width: 500px;" class="img-thumbnail img-responsive">
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
									<div class="col-lg-8 col-lg-offset-2">
										<label>Ukuran Gambar Minimal : Lebar 650px Tinggi 252px || Maksimal : Lebar 2000px Tinggi 2000px</label><br>
										<label style="color:red ;">Ukuran File Maks : 3MB</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2">
										<label>Kategori Product</label>
									</div>
									<div class="col-lg-4">
										<select name="ktg" id="status" class="form-control input-md select2">
											<option value="JPO (Jembatan Penyebrangan Orang)" <?php if ($kategori_product == "JPO (Jembatan Penyebrangan Orang)") { echo 'selected'; } ?>>
												JPO (Jembatan Penyebrangan Orang)
											</option>
											<option value="Pos Security" <?php if ($kategori_product == "Pos Security") { echo 'selected'; } ?>>
												Pos Security
											</option>											
											<option value="Shelter Bus" <?php if ($kategori_product == "Shelter Bus") { echo 'selected'; } ?>>
												Shelter Bus
											</option>
											<option value="Pekerjaan Sipil" <?php if ($kategori_product == "Pekerjaan Sipil") { echo 'selected'; } ?>>
												Pekerjaan Sipil
											</option>
											<option value="Konstruksi Baja" <?php if ($kategori_product == "Konstruksi Baja") { echo 'selected'; } ?>>
												Konstruksi Baja
											</option>
											<option value="Konstruksi Gudang" <?php if ($kategori_product == "Konstruksi Gudang") { echo 'selected'; } ?>>
												Konstruksi Gudang
											</option>
											<option value="Konstruksi Rumah" <?php if ($kategori_product == "Konstruksi Rumah") { echo 'selected'; } ?>>
												Konstruksi Rumah
											</option>
											<option value="Renovasi Rumah" <?php if ($kategori_product == "Renovasi Rumah") { echo 'selected'; } ?>>
												Renovasi Rumah
											</option>
											<option value="Pengecatan Rumah" <?php if ($kategori_product == "Pengecatan Rumah") { echo 'selected'; } ?>>
												Pengecatan Rumah
											</option>
										</select>
									</div>
								</div><br/>
								<div class="row">
									<div class="col-lg-2">
										<label>Nama Product</label>
									</div>
									<div class="col-lg-4">
										<div class="input-group">
											<span class="input-group-addon" type="button"><i class="glyphicon glyphicon-pencil"></i></span>
											<input id="judul" type="text" class="form-control" name="nama" value="<?php echo $nama_product; ?>" >
										</div><br>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2">
										<label>Keterangan Product</label>
									</div>
									<div class="col-lg-10">
										<div class="form-group">
											<textarea id="isi" name="ket" class="form-control" rows="5" style="resize: vertical;"  >
												<?php echo $ket_product; ?>							
											</textarea>
										</div>
									</div>
								</div>								
								<div class="row">
									<div class="col-lg-2 col-lg-offset-10 text-right">
										<input type="hidden" name="id" value="<?php echo $id_product; ?>">
										<input type="hidden" name="path" value="<?php echo $imgpath_product; ?>">
										<button class="btn btn-primary" type="submit">
											Save Product
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