				<div class="container-fluid">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<ol style="background-color: #00001e; color: white" class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Monitoring</li>
					 </ol>
					<div class="panel panel-headline">
  						<div class="row" style="margin: 10px">
  							<div class="col-lg-4"></div>
  							<div class="col-lg-4">  						
  								<h1 class="text-center">Monitoring Gorden</h1>
  							</div>
  							<div class="col-lg-2 right" style="margin: 10px;background-color: #00001e; color: white">
  								<div class="row">
  									<p class="text-center">Light Control</p>
  									<div class="col-lg-5">
  										<button class="btn btn-success" onclick="btnOpen()">Open All</button>
  										<script type="text/javascript">				
											function btnOpen() {
												console.log('11');
												var url = "<?php echo base_url() ?>api/get"; 
												$.ajax({
												    url: url,
												    type: "POST",
												    success: function(data) {
												        alert('Success!');
												    }

												});
											}
										</script>
  									</div>
  									<div class="col-lg-6">
  										<button class="btn btn-danger" onclick="btnClose()">Close All</button>
  										<script type="text/javascript">				
											function btnClose() {
												console.log('11');
												var url = "<?php echo base_url() ?>api/close_all"; 
												$.ajax({
												    url: url,
												    type: "POST",
												    success: function(data) {
												        alert('Success!');
												    }

												});
											}
										</script>
  									</div>
  								</div>
  							</div>
  						</div>

						<div class="panel-body">

							<!-- Tabel Monitoring -->
								<table class="table">
								  <thead style="background-color: #00001e; color: white" class="thead-dark">
								    <tr>
								      <th scope="col">NO</th>
								      <th scope="col">Nama Pengguna</th>
								      <th scope="col">Ruangan</th>
								      <th scope="col">Gorden</th>
								      <th scope="col">Status</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php $no = 1; foreach ($data_monitoring->result() as $row):?>
								    <tr>
								      <th scope="row"><?php echo $no++ ?></th>
								      <td><?php echo $row->nama_user ?></td>
								      <td><?php echo $row->nama_ruangan ?></td>
								      <td><?php echo $row->nama_device ?></td>
								      <td><?php echo $row->status ?></td>
								    </tr>
								<?php endforeach; ?>
								  </tbody>
								</table>
							<!-- End Monitoring -->
						</div>
					</div>
				</div>