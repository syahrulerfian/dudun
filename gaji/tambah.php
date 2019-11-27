<!DOCTYPE html>
	<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	</head>
	<body>
			<!-- Header -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light" >
	  <a class="navbar-brand" href="#">Pengajihan</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="#"> <span class="sr-only"></span></a>
		  </li>
	 
		  </li>
	
	
		</ul>
		
	  </div>
	</nav>
	
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="padding:20px">
						<div class="card">
							<div class="card-header"><center><b>Gaji Anda !!!</b></center></div>

							<form action="proses.php?aksi=tambah" method="post">

		                        	<div class="form-group">
									<label><b>Nama </b></label>
									<select name="karyawan_id" class="form-control" required>
                                    <?php
                                    include '../database.php';
                                    $gaji = new Penggajihan();
                                    $no = 1;
                                    foreach ($gaji->index() as $data) {
                                    ?>  
    								<option value="<?php echo $data['karyawan_id'];?>"><?php echo $data['karyawan_nama']; }?></option>
    							
									</select>
									<br><br>
									<div class="card-body">
									<div class="form-group">
									<label><b>Gaji Pokok </b></label>
									<input type="text" name="gaji_pokok" class="form-control">
									<br><br>
									</div>
									<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit" name="simpan">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			 
			<!-- End Content-->
	
			<!-- footer -->
			<footer>
				<center><b>&copy; Copyright</b></center>
	
			</footer>
			<!--  End Footer-->
	
			<!-- Js -->
			<script  src="assets/js/jquery-3.4.1.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.js"></script>
	
			<!-- End Js -->
	
	</body>
	</html>