				<div class="container-fluid">
					<!-- OVERVIEW -->
					<ol style="background-color: #00001e; color: white" class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">DASHBOARD</a></li>
					    <li class="breadcrumb-item active" aria-current="page">History</li>
					 </ol>
					<div class="panel panel-headline">
  						<div class="row" style="margin: 10px">
  							<div class="col-lg-4" style="margin-top: 3%"></div>
  							<div class="col-lg-4">  						
  								<h1 class="text-center">History</h1>
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
								      <th scope="col">Ruangan</th>
								      <th scope="col">Device</th>
								      <th scope="col">Tanggal</th>
								      <th scope="col">Status</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php $no=1; foreach ($data_history->result() as $row):?>
								    <tr>
								      <th scope="row"><?php echo $no++ ?></th>
								      <td><?php echo $row->nama_user ?></td>
								      <td><?php echo $row->nama_ruangan ?></td>
								      <td><?php echo $row->nama_device ?></td>
								      <td><?php echo $row->tanggal ?></td>
								      <td><?php echo $row->status ?></td>
								    </tr>
								<?php endforeach; ?>
								  </tbody>
								</table>
							</div>
							<!-- End Monitoring -->
						</div>
					</div>
				</div>