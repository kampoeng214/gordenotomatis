				<div class="container-fluid">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<ol style="background-color: #00001e; color: white" class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Ruangan / Tambah</li>
					 </ol>
					<div class="panel panel-headline">
  						<div class="row" style="margin: 10px">
  							<div class="col-lg-4"></div>
  							<div class="col-lg-4">  						
  								<h1 class="text-center">Create Ruangan Device</h1>
  							</div>
  						</div>

						<div class="panel-body">

							<!-- Form Device -->
							<form action="<?php echo base_url() ?>ruangan_device/create" method="post">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Device</label>
							    <select class="form-control" id="exampleInputEmail1" name="nama_device">
							      <?php foreach ($data_device->result() as $key => $value): ?>
							      <option value="<?php echo $value->id_device ?>"><?php echo $value->nama_device ?></option>
							  	  <?php endforeach ?>
							    </select>
							  </div>
							  <div class="form-group">
							    <label for="exampleFormControlSelect1">Nama Ruangan</label>
							    <select class="form-control" id="exampleFormControlSelect1" name="nama_ruangan">
							      <?php foreach ($data_ruangan->result() as $key => $value): ?>
							      <option value="<?php echo $value->id_ruangan ?>"><?php echo $value->nama_ruangan ?></option>
							  	  <?php endforeach ?>
							    </select>
							  </div>
							  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
							</form>
							
							<!-- End Form Device -->
						</div>
					</div>
				</div>