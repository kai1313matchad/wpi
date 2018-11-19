<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Menu
                            <small>Account Setting</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Ganti Data Account</h3>
							</div>
							<div class="panel-body">								
								<div class="row">
									<div class="col-lg-12">
									<?php extract($usrdata) ?>
									<?php echo validation_errors(); ?>
									<?php if(@$msg<>"") echo @$msg; ?>
				                       <form action="<?php echo base_url() ?>C_admin/chg_password" method="post" >
				                       		<div class="row">
												<div class="col-lg-2">
													<label>Username</label>
												</div>
												<div class="col-lg-4">
													<div class="input-group">
														<span class="input-group-addon" type="button"><i class="glyphicon glyphicon-pencil"></i></span>
														<input id="username" type="text" class="form-control" name="username" value="<?php echo $username ; ?>" readonly>
													</div><br>					
												</div>
											</div>
											<div class="row">
												<div class="col-lg-2">
													<label>Password</label>
												</div>
												<div class="col-lg-4">
													<div class="input-group">
														<span class="input-group-addon" type="button"><i class="glyphicon glyphicon-pencil"></i></span>
														<input id="password" type="password" class="form-control" name="password">
													</div><br>					
												</div>
											</div>
											<div class="row">
												<div class="col-lg-10 col-lg-offset-2 text-left">
													<button class="btn btn-primary" type="submit">
														Save
													</button>
												</div>
											</div>
				                       </form>
									</div>
								</div><br>
								<div class="row">
									<div class="col-lg-12">
										<form action="<?php echo base_url() ?>C_admin/chg_mail_contact" method="post">
											<div class="row">
												<div class="col-lg-2">
													<label>Email Contact Us</label>
												</div>
												<div class="col-lg-4">
													<div class="input-group">
														<span class="input-group-addon" type="button"><i class="glyphicon glyphicon-pencil"></i></span>
														<input id="username" type="text" class="form-control" name="user_contact" value="<?php echo $mail ; ?>">
													</div><br>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-2">
													<label>Password</label>
												</div>
												<div class="col-lg-4">
													<div class="input-group">
														<span class="input-group-addon" type="button"><i class="glyphicon glyphicon-pencil"></i></span>
														<input id="password" type="password" class="form-control" name="pass_contact">
													</div><br>					
												</div>
											</div>
											<div class="row">
												<div class="col-lg-10 col-lg-offset-2 text-left">
													<button class="btn btn-primary" type="submit">
														Save
													</button>
												</div>
											</div>											
										</form>
									</div>
								</div><br>
								<div class="row">
									<div class="col-lg-12">
										<form action="<?php echo base_url() ?>C_admin/chg_mail_hc" method="post">
											<div class="row">
												<div class="col-lg-2">
													<label>Email Contact Us</label>
												</div>
												<div class="col-lg-4">
													<div class="input-group">
														<span class="input-group-addon" type="button"><i class="glyphicon glyphicon-pencil"></i></span>
														<input id="username" type="text" class="form-control" name="user_hc" value="<?php echo $hc_mail ; ?>">
													</div><br>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-2">
													<label>Password</label>
												</div>
												<div class="col-lg-4">
													<div class="input-group">
														<span class="input-group-addon" type="button"><i class="glyphicon glyphicon-pencil"></i></span>
														<input id="password" type="pass_contact" class="form-control" name="pass_hc">
													</div><br>					
												</div>
											</div>
											<div class="row">
												<div class="col-lg-10 col-lg-offset-2 text-left">
													<button class="btn btn-primary" type="submit">
														Save
													</button>
												</div>
											</div>											
										</form>
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