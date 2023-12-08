<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kategori</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			<form Action="<?= base_url('admin/kategori/simpan')?>" method="post">
				<div class="form-group">
					<label>Nama Kategori</label>
					<input type="text" class="form-control" name="nama_kategori" required>
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
		<h4 class="card-title">Kategori Konten</h4>
			<button type="button" class="btn btn-primary" m-2 data-bs-toggle="modal" data-bs-target="#staticBackdrop"">Tambah Kategori</button>
			<div class="table-responsive pt-3">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Nama Kategori Konten</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($kategori as $aa) { ?>
						<tr>
							<td class="text-center"><?= $no; ?></td>
							<td class="text-center"><?= $aa['nama_kategori']?></td>
							<td class="text-center">
								<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModelEdit<?= $aa['id_kategori'] ?>">
									<i class="ti-pencil"></i>
								</button>
								<div class="modal fade" id="ModelEdit<?= $aa['id_kategori'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="ModelEdit">Edit Kategori <?= $aa['nama_kategori']?></h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
											<form action="<?= base_url('admin/kategori/update')?>" method="post">
												<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori']?>">								
												<div class="form-group">
													<h4 style="text-align:left;">Nama Kategori</h4>
													<input type="text" class="form-control" name="nama_kategori" value="<?= $aa['nama_kategori']?>">
												</div>									
												<div class="modal-footer">
												    <button type="submit" class="btn btn-primary">Simpan</button>
											    </div>
											</form>
											</div>
										</div>
									</div>
								</div>
								<a class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')" href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>" >
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
