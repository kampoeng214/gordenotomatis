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
  								<h1 class="text-center">Show device</h1>
  							</div>
  						</div>

						<div class="panel-body">
							<?php foreach ($data->result() as $row):?>
							<!-- Form Device -->
							<div class="row">
								<div class="col-3">
									<p>Nama device : <?php echo $row->nama_device ?></p>
								</div>

							</div>
							<?php endforeach; ?>

							<!-- End Form Device -->
						</div>
					</div>
				</div>