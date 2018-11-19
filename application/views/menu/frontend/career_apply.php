<section class="bg2" id="career">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1 class="section-heading">APPLY CAREER</h1>
                    <hr class="light">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container">
			<div class="row">
				<form action="<?php echo base_url() ?>C_dashboard/career_send" method="post" enctype="multipart/form-data">
					<div class="col-lg-9">
					<?php extract($data_career) ?>
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
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">
									<h2 class="section-heading">
										<strong>Identitas Calon Karyawan</strong>
									</h2>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="nama">Nama Lengkap : </label><br>
										<input type="text" name="nama" size="40" id="nama">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="status">Status Pernikahan: </label><br>									
										<label class="radio-inline">
								    		<input type="radio" name="sts_nikah" value="0" checked="true">Single
									    </label>
									    <label class="radio-inline">
									    	<input type="radio" name="sts_nikah" value="1">Menikah
									    </label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="umur">Umur : </label><br>
										<input type="number" min="17" name="umur" id="umur" value="17">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="instansi">Nama Instansi : </label><br>
										<input type="text" name="instansi" size="40" id="instansi">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<label for="jeniskelamin">Jenis Kelamin : </label><br>
									<label class="radio-inline">
								    	<input type="radio" name="gender" value="0" checked="true">Pria
								    </label>
								    <label class="radio-inline">
								    	<input type="radio" name="gender" value="1">Wanita
								    </label>
									<br>
								</div>
								<div class="col-lg-6">
									<label for="jurusan">Jurusan : </label>
									<input type="text" name="jurusan" size="40" id="jurusan">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<label for="alamat">Alamat : </label><br>
									<textarea name="alamat" rows="3" style="resize: vertical;" cols="40"></textarea>
								</div>
								<div class="col-lg-6"><br>
									<label for="pendidikan">Pendidikan Terakhir : </label><br>
									<select name="pend_akhir">
										<option value="SMA">SMA</option>
										<option value="D1">D1</option>
										<option value="D2">D2</option>
										<option value="D3">D3</option>
										<option value="D4">D4</option>
										<option value="S1">S1</option>
										<option value="S2">S2</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<label for="notelp">No. Telp : </label><br>
									<input type="text" name="no_tlp" size="20" id="notelp">
								</div>
								<div class="col-lg-6">
									<label for="tahunmasuk">Tahun Masuk : </label><br>
									<input type="number" min="1990" name="thn_masuk" size="17" id="tahunmasuk" value="1990">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<label for="email">Email : </label><br>
									<input type="email" name="email" size="40" id="email">
								</div>
								<div class="col-lg-6">
									<label for="tahunlulus">Tahun Lulus : </label><br>
									<input type="number" min="1990" name="thn_lulus" size="17" id="tahunlulus" value="1990">
								</div>
							</div><br><br>
							<div class="row">
								<div class="col-lg-12">
									<h2 class="section-heading">
										<strong>Pengalaman Bekerja</strong>
									</h2>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="namaperusahaan">Nama Perusahaan Terakhir : </label>
										<input type="text" name="perusahaan" size="40" id="namaperusahaan">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="Tahunmulai">Tahun Mulai : </label><br>
										<input type="number" min="1990" name="thn_mulai" size="17" id="tahunmulai" value="1990">
									</div>
								</div>			
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="jabatan">Jabatan : </label>
										<input type="text" name="jabatan" size="40" id="jabatan">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="Tahunberakhir">Tahun Berakhir : </label><br>
										<input type="number" min="1990" name="thn_akhir" size="17" id="thnakhir" value="1990">
									</div>
								</div>
							</div>
							<div class="row">							
								<div class="col-lg-6">								
									<div class="form-group">
										<label for="alasanpindah">Alasan Pindah : </label>
										<textarea name="alasan" rows="3" style="resize: vertical;" cols="40"></textarea>
									</div><br>
								</div>							
							</div>
							<div class="row">
								<div class="col-lg-12">
									<input type="file" name="cv"><br>
									<p>
										<strong>Upload .pdf / .zip(CV,transkrip nilai, ijasah, sertifikat, dll) </strong>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<input type="hidden" name="id_job" value="<?php echo $id_job; ?>">
									<input type="hidden" name="judul" value="<?php echo $judul_job; ?>">
									<button type="submit" class="btn btn-primary btn-md">
										Send
									</button>
									<input class="btn btn-info btn-md" type="reset" value="Cancel">
								</div><br>
							</div>
							<hr class="black">
							<div class="row-clearfix">
								<div class="col-lg-12 text-left">								
									<p class="text-left">
										<a href="<?php echo base_url() ?>C_dashboard/career_list"> 
											<<< Back To Career
										</a>
									</p>						
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<h2 class="section-heading"><strong>About Us</strong></h2>
							<p class="text-justify">
							Berawal dari pengalaman menangani project – project bidang konstruksi yang sudah kami kerjakan sejak tahun 2004 maka ditahun 2015 ini kami meresmikan PT. Wijaya Persada Indonesia pada tanggal 20 Februari 2015 sebagai perusahaan yang menangani bidang general contractor, trading, dan supplier.
							Didasari dengan keinginan dan tekad yang kuat untuk membuka usaha kontraktor dimana saat ini dengan melihat perkembangan project-project property yang semakin bertumbuh di Indonesia maka dalam hal ini kami dari jajaran manajemen yakin dan mampu mengambil peluang – peluang tersebut. 
							</p>
						</div>
					</div>
				</div>
			</div>		
        </div>
    </section>