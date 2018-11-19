<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Menu
                            <small>Add Product</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
					<form method="post" action="<?=base_url()?>C_admin/add_product" enctype="multipart/form-data">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Tambah Product</h3>
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
											<option value="JPO (Jembatan Penyebrangan Orang)">JPO (Jembatan Penyebrangan Orang)</option>
											<option value="Pos Security">Pos Security</option>
											<option value="Shelter Bus">Shelter Bus</option>
											<option value="Pekerjaan Sipil">Pekerjaan Sipil</option>
											<option value="Konstruksi Baja">Konstruksi Baja</option>
											<option value="Konstruksi Gudang">Konstruksi Gudang</option>
											<option value="Konstruksi Rumah">Konstruksi Rumah</option>
											<option value="Renovasi Rumah">Renovasi Rumah</option>
											<option value="Pengecatan Rumah">Pengecatan Rumah</option>
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
											<input id="judul" type="text" class="form-control" name="nama" placeholder="Nama Product">
										</div><br>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2">
										<label>Keterangan Product</label>
									</div>
									<div class="col-lg-10">
										<div class="form-group">
											<textarea id="isi" name="ket" class="form-control" rows="5" style="resize: vertical;"  ></textarea>
										</div>
									</div>
								</div>								
								<div class="row">
									<div class="col-lg-2 col-lg-offset-10 text-right">
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