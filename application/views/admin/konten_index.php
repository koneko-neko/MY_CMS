<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Konten</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form Action="<?= base_url('admin/konten/simpan')?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control" name="judul" required>
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select name="id_kategori" class="form-control">
							<?php $no=1; foreach($kategori as $aa) { ?>
							<option value="<?= $aa['id_kategori']?>"><?= $aa['nama_kategori']?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" class="form-control" cols="30" rows="10" required></textarea>
					</div>
					<div class="form-group">
						<label>Tambahkan Link</label>
						<textarea name="link" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Foto</label>
						<input type="file" class="form-control" name="foto" accept="image/png, image/jpeg" required>
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
			<h4 class="card-title">Konten</h4>
			<button type="button" class="btn btn-primary" m-2 data-bs-toggle="modal"
				data-bs-target="#staticBackdrop">Tambah Konten</button>
			<div class=" table-responsive pt-3">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Judul</th>
							<th class="text-center">Kategori Konten</th>
							<th class="text-center">tanggal</th>
							<th class="text-center">Kreator</th>
							<th class="text-center">Link Konten</th>
							<th class="text-center">Foto</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($konten as $aa) { ?>
						<tr>
							<td class="text-center"><?= $no; ?></td>
							<td class="text-center"><?= $aa['judul']?></td>
							<td class="text-center"><?= $aa['nama_kategori']?></td>
							<td class="text-center"><?= $aa['tanggal']?></td>
							<td class="text-center"><?= $aa['username']?></td>
							<td class="text-center"><a href="<?= $aa['link']?>">Lihat Link</a></td>
							<td class="text-center">
								<a href="<?= base_url('assets/upload/konten/'.$aa['foto'])?>">
									<img src="<?= base_url('assets/upload/konten/'.$aa['foto'])?>">
								</a>
							</td>
							<td class="text-center">
								<button class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#konten<?= $no; ?>">
									<i class="ti-pencil"></i>
								</button>
								<div class="modal fade" id="konten<?= $no; ?>" data-bs-backdrop="static"
									data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
									aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="ModelEdit">Perbarui Konten
													<?= $aa['judul']?></h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form Action="<?= base_url('admin/konten/update')?>" method="post"
													enctype="multipart/form-data">
													<input type="hidden" name="nama_foto" value="<?= $aa['foto']?>">
													<div class="form-group">
														<h4 style="text-align:left;">Judul</h4>
														<input type="text" class="form-control" name="judul"
															value="<?= $aa['judul']?>">
													</div>
													<div class="form-group">
														<h4 style="text-align:left;">Kategori Konten</h4>
														<select name="id_kategori" class="form-control">
															<?php foreach($kategori as $uu) { ?>
															<option
																<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected";}?>
																value="<?= $uu['id_kategori']?>">
																<?= $uu['nama_kategori']?>
															</option>
															<?php } ?>
														</select>
													</div>
													<div class="form-group">
														<h4 style="text-align:left;">Keterangan</h4>
														<textarea name="keterangan" class="form-control" cols="30"
															rows="10"><?= $aa['keterangan']?></textarea>
													</div>
													<div class="form-group">
														<h4 style="text-align:left;">Link Konten</h4>
														<textarea name="link" class="form-control"><?= $aa['link']?></textarea>
													</div>
													<div class="form-group">
														<h4 style="text-align:left;">Foto</h4>
														<input type="file" class="form-control" name="foto"
															accept="image/png, image/jpeg">
													</div>
													<div class="modal-footer">
														<button type="submit" class="btn btn-primary">Simpan</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<a class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"
									href="<?php echo site_url('admin/konten/delete_data/'.$aa['foto']);?>">
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
