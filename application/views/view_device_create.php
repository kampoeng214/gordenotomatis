				<div class="container-fluid">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<ol style="background-color: #00001e; color: white" class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					    <li class="breadcrumb-item active" aria-current="page">device / Tambah</li>
					 </ol>
					<div class="panel panel-headline">
  						<div class="row" style="margin: 10px">
  							<div class="col-lg-4"></div>
  							<div class="col-lg-4">  						
  								<h1 class="text-center">Create device</h1>
  							</div>
  						</div>

						<div class="panel-body">

							<!-- Form Device -->
							<form action="<?php echo base_url() ?>device/create" method="post">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama device</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_device" aria-describedby="emailHelp" placeholder="Masukan Nama device">
							  </div>
							  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
							</form>
							<!-- End Form Device -->
						</div>
					</div>
				</div>