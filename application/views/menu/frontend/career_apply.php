 <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="<?php echo base_url() ?>assets/img/backgrounds/sign-pen-business-document.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Apply Career</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li>Apply Career</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->

<style type="text/css">
	.radio-inline+.radio-inline {
    	margin-left: 30px;
	}
	.radio-inline {
		position: relative;
	    display: inline-block;
	    padding-left: 20px;
	    margin-bottom: 0;
	    font-weight: 400;
	    vertical-align: middle;
	    cursor: pointer;
	}
	label {
	    display: inline-block;
	    max-width: 100%;
	    margin-bottom: 5px;
	    font-weight: 700;
	}
	
	label {
      padding: 0px 3em 0px 8px;
    }
    
	.custom-select {
		width: 100%;
    	height: 50px;
    	padding: 5px 20px;
    	border: 1px solid #EEEEEE;
    	border-radius: none !important;
	}
	.btn-send {
		background-color: rgba(1, 48, 166, 0.9) !important;
	}
	.btn-send:hover {
		color: #fff !important;
    	background-color: #007bff !important;
    	border-color: #007bff !important;
	}

	.wrapper-class{
		position: relative;
		display: inline;
		vertical-align: middle;
	    cursor: pointer;
	    margin-bottom: 0;
	    margin-top: 12px;
	}
	.wrapper-class input[type="radio"] {
  		width: 15px !important;
	}
	.wrapper-class input[type="radio"] {
		box-sizing: border-box;
    	padding: 0;
	}
	.wrapper-class input[type="radio"] {
		position: absolute;
		margin-left: -20px;
	}
	.wrapper-class input[type="radio"] {
		width: 100%;
	    height: 20px;
	    margin: 4px 0 0;
    	line-height: normal;
	}
	.wrapper-class label {
  		display: inline;
  		margin-left: 15px !important;
  	}
</style>

    <!--====================  contact area ====================-->
    <div class="conact-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="contact-information">
                        <h4 class="space__bottom--30">Contact Information</h4>
                        <ul>
                            <li>
                                <span class="icon"><i class="fa fa-map-marker"></i></span>
                                <span class="text"><span>Stock Building, 125 Main Street 1st Lane, San Francisco, USA</span></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-phone"></i></span>
                                <span class="text"><a href="#">(001) 24568 365 987)</a><a href="#">(001) 65897 569 784)</a></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-envelope-open"></i></span>
                                <span class="text"><a href="#">info@example.com</a><a href="#">www.example.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="contact-form">
                        <h4 class="space__bottom--30">Identitas Calon Karyawan</h4>
                        <form id="contact-form" action="<?php echo base_url() ?>C_dashboard/career_send" method="post" enctype="multipart/form-data">

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

                            <div class="row row-10">
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input name="nama" type="text" placeholder="Your Name">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input name="email" type="email" placeholder="Your Email">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input name="no_tlp" type="text" placeholder="No Telp">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input name="alamat" type="text" placeholder="alamat">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input type="number" min="17" name="umur" id="umur" value="17">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	
									<div class="row">
										<div class="col-md-6">
											<div class="wrapper-class">
												<input type="radio" name="gender" id="inlineRadio1" value="0" checked="true"> 
											   <label>Pria</label>	
											</div>
										</div>
										<div class="col-md-6">
											<div class="wrapper-class">
												<input type="radio" name="gender" id="inlineRadio2" value="1">
											   <label>Wanita</label>	
											</div>
										</div>
									</div>
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20 ">
                                	<div class="row">
										<div class="col-md-6">
											<div class="wrapper-class">
												<input type="radio" name="sts_nikah" id="inlineRadio1" value="0" checked="true">
												<label>Single</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="wrapper-class">
												<input type="radio" name="sts_nikah" id="inlineRadio2" value="1">
												<label>Menikah</label>
											</div>
										</div>
									</div>
                                </div>
                               
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<select class="form-control custom-select" name="pend_akhir">
                                		<option>Pendidikan</option>
                                		<option value="SMA">SMA</option>
										<option value="D1">D1</option>
										<option value="D2">D2</option>
										<option value="D3">D3</option>
										<option value="D4">D4</option>
										<option value="S1">S1</option>
										<option value="S2">S2</option>
                                	</select>
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input name="instansi" type="text" placeholder="Nama Instansi">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input name="jurusan" type="text" placeholder="Jurusan">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input type="number" min="1990" name="thn_masuk" size="17" id="tahunmasuk" value="1990">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input type="number" min="1990" name="thn_lulus" size="17" id="tahunmasuk" value="1990">
                                </div>
                              
                            </div>
                    
                        <h4 class="space__bottom--30">Pengalaman Bekerja</h4>
                      
                            <div class="row row-10">
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input name="perusahaan" type="text" placeholder="Nama Perusahaan Terakhir">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input name="jabatan" type="text" placeholder="Jabatan">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input type="number" min="1990" name="thn_mulai" size="17" id="thn_mulai" value="1990">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input type="number" min="1990" name="thn_akhir" size="17" id="thn_akhir" value="1990">
                                </div>
                                 <div class="col-md-6 col-12 space__bottom--20">
                                	<input name="alasan" type="text" placeholder="Alasan Pindah">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                	<input name="cv" type="file">
                                	<p style="color: red;">
										<small>Upload .pdf / .zip(CV,transkrip nilai, ijasah, sertifikat, dll) </small>
									</p>
                                </div>
                                <div class="col-12">
                                	<input type="hidden" name="id_job" value="<?php echo $id_job; ?>">
									<input type="hidden" name="judul" value="<?php echo $judul_job; ?>">
                                	<button type="submit" class="btn-send">Send</button>
                                	<button type="reset">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--====================  End of contact area  ====================-->



