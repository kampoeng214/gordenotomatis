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
  								<h1 class="text-center">Edit user</h1>
  							</div>
  						</div>

						<div class="panel-body">
							<?php foreach ($data->result() as $row):?>
							<!-- Form user -->
							<form action="<?php echo base_url() ?>user/edit/<?php echo $row->id_user ?>" method="post">

							
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Pengguna</label>
							    <input value="<?php echo $row->nama_user ?>" type="text" class="form-control" id="exampleInputEmail1" name="nama_user" aria-describedby="emailHelp" placeholder="Masukan Nama Anda">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Username</label>
							    <input value="<?php echo $row->username ?>" type="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Anda">
							  </div>							  
							  <div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input value="<?php echo $row->password ?>" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							  </div>

							  <div class="form-group">
							    <label for="exampleInputPassword1">Level</label>
							    <select type="role" name="role" class="form-control" id="exampleInputPassword1" placeholder="role">

							    	<?php
							  			if($row->role == "admin"){
							      			echo "<option value='admin' selected>admin</option>";
							      			echo "<option value='user'>user</option>";
							      		}else{
							      			echo "<option value='user' selected>user</option>";
							      			echo "<option value='admin'>admin</option>";
							      		}
							    	?>
								</select>
							  </div>
							  <?php endforeach; ?>
							  <button name="submit" type="submit" class="btn btn-primary">Submit</button>

							</form>
							<!-- End Form user -->
						</div>
					</div>
				</div>