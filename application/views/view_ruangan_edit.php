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
							<?php foreach ($data_ruangan_user->result() as $row):?>
							<!-- Form Device -->
							<form action="<?php echo base_url() ?>Ruangan/edit/<?php echo $row->id_ruangan ?>" method="post">
							  <div class="form-group">
							  	<input type="hidden" name="id_ruangan" value="<?php echo $row->id_ruangan ?>">
							    <label for="exampleInputEmail1">Nama Ruangan</label>
							    <input value="<?php echo $row->nama_ruangan ?>" type="text" class="form-control" id="exampleInputEmail1" name="nama_ruangan" aria-describedby="emailHelp" placeholder="Masukan Nama Ruangan">
							  </div>
							  <?php endforeach; ?>
							  <button name="submit" type="submit" class="btn btn-primary">Submit</button>

							</form>
							<!-- End Form Device -->
						</div>
					</div>
				</div>