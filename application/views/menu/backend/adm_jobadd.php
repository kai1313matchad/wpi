<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Menu
                            <small>Add Career</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Tambah Lowongan</h3>
							</div>
							<div class="panel-body">
							<?php echo validation_errors(); ?>
							<?php if(@$msg<>"") echo @$msg; ?>
								<form action="<?php echo base_url() ?>C_admin/add_jobs" method="post">
									<div class="row">
										<div class="col-lg-2">
											<label>Judul Lowongan</label>
										</div>
										<div class="col-lg-4">
											<div class="input-group">
												<span class="input-group-addon" type="button"><i class="glyphicon glyphicon-pencil"></i></span>
												<input id="judul" type="text" class="form-control" name="judul" placeholder="Judul Lowongan">
											</div><br>										
										</div>
									</div>
									<div class="row">
										<div class="col-lg-2">
											<label>Penempatan</label>
										</div>
										<div class="col-lg-4">										
											<div class="input-group">
												<span class="input-group-addon" type="button"><i class="glyphicon glyphicon-pencil"></i></span>
												<input id="judul" type="text" class="form-control" name="tempat" placeholder="Penempatan Kerja">
											</div><br>
										</div>
									</div>								
									<div class="row">									
										<div class="col-lg-2">
											<label>Tanggal</label>
										</div>
										<div class='col-lg-4'>
											<div class="form-group">
												<div class='input-group date' id='datetimepicker1'>		
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
													<input type='text' class="form-control" name="tglstart" placeholder="Tanggal Awal" />
												</div>
											</div>
										</div>
										<div class='col-lg-4'>
											<div class="form-group">
												<div class='input-group date' id='datetimepicker2'>												
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
													<input type='text' class="form-control" name="tglend" placeholder="Tanggal Selesai" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-2">
											<label>Job Description</label>
										</div>
										<div class="col-lg-10">
											<div class="form-group">
												<textarea id="desc" name="desc" class="form-control" rows="5" style="resize: vertical;" placeholder="Isi" ></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-2">
											<label>Informasi</label>
										</div>
										<div class="col-lg-10">
											<div class="form-group">
												<textarea id="info" name="info" class="form-control" rows="5" style="resize: vertical;" placeholder="Isi" ></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 text-right">
											<button class="btn btn-primary" type="submit">
												Save Career
											</button>
										</div>
									</div>
								</form>
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
    <!-- tinymceplug -->
    <script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
	<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
	<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
	<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/plugins/wordcount/plugin.js"></script>
	<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
    <!-- /tinymceplug -->