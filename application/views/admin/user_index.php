<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			<form Action="<?= base_url('admin/user/simpan')?>" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control " name="username" required>
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" required>
				</div>									
				<div class="form-group">
					<label>Level</label>
					<select name="level" class="form-control">
						<option value="Admin">Admin</option>
						<option value="Kontributor">Kontributor</option>
					</select>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" required>
				</div>	
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
			<div id="hilang">
				<?= $this->session->flashdata('alert')?>
			</div>
		<div class="card-body">
		<h4 class="card-title">Data Pengguna</h4>
			<button type="button" class="btn btn-primary" m-2 data-bs-toggle="modal" data-bs-target="#staticBackdrop"">Tambah</button>
			<div class="table-responsive pt-3">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Username</th>
							<th class="text-center">Nama</th>
							<th class="text-center">Level</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($user as $aa) { ?>
						<tr>
							<td class="text-center"><?= $no; ?></td>
							<td class="text-center"><?= $aa['username']?></td>	
							<td class="text-center"><?= $aa['nama']?></td>
							<td class="text-center"><?= $aa['level']?></td>
							<td class="text-center">
								<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModelEdit<?= $aa['id_user'] ?>">
									<i class="ti-pencil"></i>
								</button>
								<div class="modal fade" id="ModelEdit<?= $aa['id_user']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="ModelEdit">Edit Data</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
											<form Action="<?= base_url('admin/user/update')?>" method="post">
												<input type="hidden" name="id_user" value="<?= $aa['id_user']?>">
												<div class="form-group">	
													<h4 style="text-align:left;">Username</h4>
													<input type="text" class="form-control" name="nama" value="<?= $aa['username']?>" readonly>
												</div>									
												<div class="form-group">
													<h4 style="text-align:left;">Nama</h4>
													<input type="text" class="form-control" name="nama" value="<?= $aa['nama']?>">
												</div>									
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary">Simpan</button>
												</div>
											</form>
											</div>
										</div>
									</div>
								</div>
								<a class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')" href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']);?>" >
									<i class="ti-trash"></i>
								</a>
							</td>
						</tr>
						<?php $no++; }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
