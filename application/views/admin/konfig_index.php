<div id="hilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Konfigurasi</h4><hr>
			<form Action="<?= base_url('admin/konfigurasi/update')?>" method="post">
				<div class="form-group">
					<label>Judul Website</label>
					<input type="text" name="judul" class="form-control" value="<?= $konfig->judul_website; ?>">
				</div>
				<div class="form-group">					
					<label>Profile</label>
					<div class="input-group">
						<input type="text" class="form-control" name="profil_website" value="<?= $konfig->profil_website; ?>">
						<div class="input-group-append">
						<button class="btn btn-sm btn-facebook" type="button">
							<i class="ti-user"></i>
						</button>
						</div>
					</div>
				</div>
				<div class="form-group">					
					<label>Instagram</label>
					<div class="input-group">
						<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>">
						<div class="input-group-append">
						<button class="btn btn-sm btn-facebook" type="button">
							<i class="ti-instagram"></i>
						</button>
						</div>
					</div>
				</div>
				<div class="form-group">					
					<label>Facebook</label>
					<div class="input-group">
						<input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>">
						<div class="input-group-append">
						<button class="btn btn-sm btn-facebook" type="button">
							<i class="ti-facebook"></i>
						</button>
						</div>
					</div>
				</div>
				<div class="form-group">					
					<label>Youtube</label>
					<div class="input-group">
						<input type="text" class="form-control" name="youtube" value="<?= $konfig->youtube; ?>">
						<div class="input-group-append">
						<button class="btn btn-sm btn-facebook" type="button">
							<i class="ti-youtube"></i>
						</button>
						</div>
					</div>
				</div>
				<div class="form-group">					
					<label>Linkedin</label>
					<div class="input-group">
						<input type="text" class="form-control" name="linkedin" value="<?= $konfig->linkedin; ?>">
						<div class="input-group-append">
						<button class="btn btn-sm btn-facebook" type="button">
							<i class="ti-linkedin"></i>
						</button>
						</div>
					</div>
				</div>
				<div class="form-group">					
					<label>Email</label>
					<div class="input-group">
						<input type="text" class="form-control" name="email" value="<?= $konfig->email; ?>">
						<div class="input-group-append">
						<button class="btn btn-sm btn-facebook" type="button">
							<i class="ti-email"></i>
						</button>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>">
				</div>
				<div class="form-group">					
					<label>Whatsapp</label>
					<div class="input-group">
						<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>">
						<div class="input-group-append">
						<button class="btn btn-sm btn-facebook" type="button">
							<i class="ti-mobile"></i>
						</button>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
