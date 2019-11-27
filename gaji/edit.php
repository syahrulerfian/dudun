			<?php
	include '../database.php';
    $gaji = new Gaji();
    $karyawan = new Penggajihan();
	foreach ($gaji->edit($_GET['gaji_id']) as $data) {
        $gaji_id2 = $data['gaji_id'];
		$karyawan_id2 = $data['karyawan_id'];
        $gaji_pokok2 = $data['gaji_pokok'];
        $karyawan_nama2 = $data['karyawan_nama'];
		
		

    }

	?>

    <!DOCTYPE html>
	<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	</head>
	<body>
			<!-- Header -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light" >
	  <a class="navbar-brand" href="#">Penggajihan</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="#">Syahrul Erfian<span class="sr-only"></span></a>
		  </li>
	 
		  </li>
	
	
		</ul>
		
	  </div>
	</nav>
			<!-- End Header -->
	
			<!-- Content -->

	
	
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="padding:20px">
						<div class="card">
							<div class="card-header"><center><b>GAJI ANDA !!!</b></center></div>
	
							<form action="proses.php?aksi=update" method="post">
                            <div class="form-group">
							<input type="hidden" name="gaji_id"  class="form-control" value="<?php echo $gaji_id2 ?>">
                            </div>

							<div class="card-body">
									<div class="form-group">
									<label><b>Nama Karyawan</b></label>
									<select type="text" name="karyawan_id" class="form-control" selected>

                                  <?php foreach($gaji->index() as $xx) { ?>

                                      
                                      <option value="<?php echo $xx['karyawan_id']?>" <?php if ($xx['karyawan_id'] == $karyawan_id2) echo "selected"; ?> ><?php echo $xx['karyawan_nama']?></option>
                                
                                 <?php  } ?>
                                  
                                        </select>
									</div>
                                    <div class="card-body">
                                    <div class="form-group">
									<label><b>Gaji Pokok </b></label>
									<input type="text" name="gaji_pokok" class="form-control" value="<?php echo $gaji_pokok2 ?>">
									<br><br>
									</div>
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