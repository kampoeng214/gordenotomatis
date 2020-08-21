				<div class="container-fluid">
					<!-- OVERVIEW -->
					<ol style="background-color: #00001e; color: white" class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">DASHBOARD</a></li>
					    <li class="breadcrumb-item active" aria-current="page">User</li>
					 </ol>
					<div class="panel panel-headline">
  						<div class="row" style="margin: 10px">
  							<div class="col-lg-4" style="margin-top: 3%">
  								<a href="<?php echo base_url()?>user/create" class="btn btn-success">Tambah</a>
  							</div>
  							<div class="col-lg-4">  						
  								<h1 class="text-center">User</h1>
  							</div>
  						</div>

						<div class="panel-body">

							<!-- Tabel Monitoring -->
							<div class="table-responsive-lg">
								<table class="table">
								  <thead style="background-color: #00001e; color: white" class="thead-dark">
								    <tr>
								      <th scope="col">NO</th>
								      <th scope="col">Nama Pengguna</th>
								      <th scope="col">Username</th>
								      <th scope="col">Level</th>
								      <th width="30%" scope="col" colspan="3"class="text-center" >Action</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php $no = 1; foreach ($data->result() as $row):?>
								    <tr>
								      <th scope="row"><?php echo $no ?></th>
								      <td><?php echo $row->nama_user ?></td>
								      <td><?php echo $row->username ?></td>
								      <td><?php echo $row->role?></td>
								      <td><a href="<?php echo base_url(); ?>user/show/<?php echo $row->id_user ?>" class="btn btn-info">Lihat</a></td>
								      <td><a href="<?php echo base_url(); ?>user/edit/<?php echo $row->id_user ?>" class="btn btn-warning">Ubah</a></td>
								      <td><a href="<?php echo base_url(); ?>user/delete/<?php echo $row->id_user ?>" class="btn btn-danger">Hapus</a></td>
								    </tr>
								<?php $no++; endforeach; ?>
								  </tbody>
								</table>
							</div>
							<!-- End Monitoring -->
						</div>
					</div>
				</div>