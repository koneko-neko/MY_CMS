<style>
    .col-lg-12 {
        display: flex;
        flex-wrap: wrap;
    }

    .card {
        flex: 0 0 calc(33.3333% - 1rem);
        margin: 0.5rem;
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .card {
            flex: 0 0 100%;
        }
	}
</style>

<div id="hilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="col-lg-14 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Konfigurasi</h4>
			<hr>
			<form action="<?= base_url('admin/caraousel/simpan')?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" class="form-control" placeholder="Judul Foto" required>
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<input type="text" name="keterangan" class="form-control" placeholder="Ketrangan Foto" required>
				</div>
				<div class="form-group">
					<label>Pilih Foto Ukuran (1:3)</label>
					<input type="file" class="form-control" name="foto">
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-lg-12 d-flex">
	<?php foreach($caraousel as $aa){ ?>
	<div class="card mr-2" style="width: 18rem;">
		<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto'])?>" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title"><?= $aa['judul']?></h5>
			<a class="btn btn-primary popup-with-move-anim px-4 mx-auto my-2" onClick="return confirm('Apakah Anda Yakin?')"
				href="<?php echo site_url('admin/caraousel/delete_data/'.$aa['foto']);?>">Hapus Foto</a>
		</div>
	</div>
	<?php } ?>
</div>
