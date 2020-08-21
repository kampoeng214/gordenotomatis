				<div class="container-fluid">
					<!-- OVERVIEW -->
					<ol style="background-color: #00001e; color: white" class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">DASHBOARD</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Ruangan Pengguna</li>
					 </ol>
					<div class="panel panel-headline">
  						<div class="row" style="margin: 10px">
  							<div class="col-lg-4" style="margin-top: 3%">
  								<a href="<?php echo base_url() ?>ruangan_user/create" class="btn btn-success">Tambah</a>
  							</div>
  							<div class="col-lg-4">  						
  								<h1 class="text-center">Management Ruangan Pengguna</h1>
  							</div>
  						</div>

						<div class="panel-body">

							<!-- Tabel Monitoring -->
							<div class="table-responsive-lg">
								<table class="table">
								  <thead style="background-color: #00001e; color: white" class="thead-dark">
								    <tr>
								      <th scope="col">NO</th>
								      <th scope="col">Nama User</th>
								      <th scope="col">Nama Ruangan</th>
								      <th width="20%" scope="col" colspan="3"class="text-center" >Action</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php $no = 1; foreach ($data_ruangan_user->result() as $row):?>
								    <tr>
								      <th scope="row"><?php echo $no ?></th>
								      <td><?php echo $row->nama_user ?></td>
								      <td><?php echo $row->nama_ruangan ?></td>
								      <!-- <td><a href="<?php echo base_url() ?>ruangan/show/<?php echo $row->id ?>" class="btn btn-info">Lihat</a></td> -->
								      <td><a href="<?php echo base_url() ?>ruangan_user/edit/<?php echo $row->id ?>" class="btn btn-warning">Ubah</a></td>
								      <td><a href="<?php echo base_url() ?>ruangan_user/delete/<?php echo $row->id ?>" class="btn btn-danger">Hapus</a></td>
								    </tr>
								<?php $no++; endforeach; ?>
								  </tbody>
								</table>
							</div>
							<!-- End Monitoring -->
						</div>
					</div>
				</div>