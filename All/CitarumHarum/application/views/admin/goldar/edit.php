<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/templates/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/templates/navbar.php") ?>
	<div id="wrapper">


		<div id="content-wrapper">

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?= site_url('home') ?>"><i class="fas fa-arrow-left"></i>
							Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/goldar/edit') ?>" method="post" enctype="multipart/form-data">

							<div class="form-row">
								<div class="form-group col-md-8">
									<label for="nik">NIK*</label>
									<input class="form-control <?= form_error('nik') ? 'is-invalid':'' ?>"
									 type="number" name="nik" min="0" placeholder="" autofocus=""autocomplete="off" value="<?= $goldar->nik ?>"/>
									<div class="invalid-feedback">
									<?= form_error('nik') ?>
									</div>
								</div>
							</div>

							<div class="form-row">
							  <div class="form-group col-md-4">
									<label for="nama">Nama*</label>
									<input class="form-control <?= form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="" autofocus=""autocomplete="off" value="<?= $goldar->nama ?>"/>
									<div class="invalid-feedback">
										<?= form_error('nama') ?>
									</div>
							  </div>

							  <div class="form-group col-md-4">
									<label for="tanggal_lahir">Tanggal Lahir*</label>
									<input class="form-control <?= form_error('tanggal_lahir') ? 'is-invalid':'' ?>"
									 type="text" name="tanggal_lahir" min="0" placeholder="" autocomplete="off" value="<?= $goldar->tanggal_lahir ?>" />
									<div class="invalid-feedback">
										<?= form_error('tanggal_lahir') ?>
									</div>
							  </div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-4">
									<div>
										<label>Jenis Kelamin*</label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" required value="Laki-laki" <?=($goldar->jenis_kelamin == 'Laki-laki' ? ' checked' : ''); ?>>
									  <label class="form-check-label" for="jenis_kelamin">Laki-laki</label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" <?=($goldar->jenis_kelamin == 'Perempuan' ? ' checked' : ''); ?>>
									  <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
									</div>
								</div>
							</div>


							  <div class="form-row">
								  <div class="form-group col-md-4">
										<label for="golongan_darah">Gol. Darah*</label>
										<input class="form-control"
									 type="text" name="golongan_darah" placeholder="" autofocus=""autocomplete="off" value="<?= $goldar->golongan_darah ?>"/>
								  </div>
								  <div class="form-group col-md-1">
								  <label for="rt">RT*</label>
								  <input class="form-control <?= form_error('rt') ? 'is-invalid':'' ?>"
								   type="number" name="rt" min="0" placeholder="" autocomplete="off" value="<?= $goldar->rt ?>"/>
								  <div class="invalid-feedback">
								  	<?= form_error('rt') ?>
								  </div>
								  </div>
								  <div class="form-group col-md-1">
								  <label for="rw">RW*</label>
								  <input class="form-control <?= form_error('rw') ? 'is-invalid':'' ?>"
								   type="number" name="rw" min="0" placeholder="" autocomplete="off" value="<?= $goldar->rw ?>" />
								  <div class="invalid-feedback">
								  	<?= form_error('rw') ?>
								  </div>
								  </div>

							</div>	

							<!-- <div class="form-row">
								<div class="form-group col-md-1">
								<label for="rt">RT*</label>
								<input class="form-control <?= form_error('rt') ? 'is-invalid':'' ?>"
								 type="number" name="rt" min="0" placeholder="" autocomplete="off" value="<?= $goldar->rt ?>"/>
								<div class="invalid-feedback">
									<?= form_error('rt') ?>
								</div>
								</div>

								<div class="form-group col-md-1">
								<label for="rw">RW*</label>
								<input class="form-control <?= form_error('rw') ? 'is-invalid':'' ?>"
								 type="number" name="rw" min="0" placeholder="" autocomplete="off" value="<?= $goldar->rw ?>" />
								<div class="invalid-feedback">
									<?= form_error('rw') ?>
								</div>
								</div>

								<div class="form-group col-md-2">
									<label for="kontak">No. Handphone*</label>
									<input class="form-control <?= form_error('kontak') ? 'is-invalid':'' ?>"
									 type="number" name="kontak" min="0" placeholder="Contoh : 08123456789" autocomplete="off" value="<?= $goldar->kontak ?>"/>
									<div class="invalid-feedback">
										<?= form_error('kontak') ?>
									</div>
								</div>

							</div> -->

							<input class="btn btn-primary" type="submit" name="simpan" value="Simpan" />
						</form>

					</div>

					<!-- <div class="card-footer small text-muted">
						* required fields
					</div> -->


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				
			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/templates/scrolltop.php") ?>

		<?php $this->load->view("admin/templates/js.php") ?>

</body>

</html