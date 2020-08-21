				<div class="container-fluid">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<ol style="background-color: #00001e; color: white" class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					    <li class="breadcrumb-item active" aria-current="page">User / Tambah</li>
					 </ol>
					<div class="panel panel-headline">
  						<div class="row" style="margin: 10px">
  							<div class="col-lg-4"></div>
  							<div class="col-lg-4">  						
  								<h1 class="text-center">Create User</h1>
  							</div>
  						</div>

						<div class="panel-body">

							<!-- Form user -->
							<form action="<?php echo base_url() ?>user/create" method="post">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Pengguna</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_user" aria-describedby="emailHelp" placeholder="Masukan Nama Anda">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Username</label>
							    <input type="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Anda">
							  </div>							  
							  <div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Level</label>
							    <select type="role" name="role" class="form-control" id="exampleInputPassword1" placeholder="role">
							    	  <option value="admin">admin</option>
									  <option value="user">user</option>
								</select>
							  </div>


							  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
							</form>
							<!-- End Form user -->
						</div>
					</div>
				</div>