				<div class="container-fluid">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<ol style="background-color: #00001e; color: white" class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Library</li>
					 </ol>
					<div class="panel panel-headline">
  						<div class="row" style="margin: 10px">
  							<div class="col-lg-4"></div>
  							<div class="col-lg-4">  						
  								<h1 class="text-center">Edit Ruangan</h1>
  							</div>
  						</div>

						<div class="panel-body">
							<!-- Form Device -->
							<?php foreach ($data_ruangan_user->result() as $key => $data_ruangan_user): ?>
					
							<form action="<?php echo base_url() ?>ruangan_user/edit/<?php echo $data_ruangan_user->id ?>" method="post">
							  <div class="form-group">							  		
							    <label for="exampleInputEmail1">Nama Ruangan</label>
							    <select class="form-control" id="exampleInputEmail1" name="nama_ruangan">
							      <?php foreach ($data_ruangan->result() as $key => $value): ?>
							      <option value="<?php echo $value->id_ruangan ?>" <?php
							      	if($value->id_ruangan == $data_ruangan_user->id_ruangan){
							      		echo 'selected';
							      	}?>><?php echo $value->nama_ruangan ?>
							      </option>
							  	  <?php endforeach ?>
							    </select>
							  </div>
							  <div class="form-group">
							    <label for="exampleFormControlSelect1">Nama Pengguna</label>
							    <select class="form-control" id="exampleFormControlSelect1" name="nama_pengguna">
							      <?php foreach ($data_user->result() as $key => $value): ?>
							      <option value="<?php echo $value->id_user ?>" <?php if($value->id_user == $data_ruangan_user->id_user){
							      		echo 'selected';
							      	}?>><?php echo $value->nama_user; ?></option>
							  	  <?php endforeach ?>
							    </select>
							  </div>
							  <button name="submit" type="submit" class="btn btn-primary">Submit</button>

							</form>
							<?php endforeach ?>
							<!-- End Form Device -->
						</div>
					</div>
				</div>