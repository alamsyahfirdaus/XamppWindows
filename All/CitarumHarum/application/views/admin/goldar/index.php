<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/templates/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/templates/navbar.php") ?>
	<div id="wrapper">
	
		<?php $this->load->view("admin/templates/sidebar.php") ?>

		<div id="content-wrapper">
			
			<div class="container-fluid">


				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= site_url('home/insert') ?>"><i class="fas fa-user-plus"></i></i> Tambah Data</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>NIK</th>
										<th>Nama</th>
										<th>Tanggal Lahir</th>
										<th>Jenis Kelamin</th>
										<th>Gol. Darah</th>
										<th>RT</th>
										<th>RW</th>
										<!-- <th>Kontak</th> -->
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($goldar as $row): ?>
									<tr>
										<td>
											<?= $row->nik ?>
										</td>
										<td >
											<?= $row->nama ?>
										</td>
										<td>
											<?= $row->tanggal_lahir ?>
										</td>
										<td>
											<?= $row->jenis_kelamin ?>
										</td>
										<td>
											<?= $row->golongan_darah ?>	
										</td>
										<td>
											<?= $row->rt ?>
										</td>
										<td>
											<?= $row->rw ?>
										</td>
										<!-- <td>
											<?= $row->kontak ?>	
										</td> -->
										<td>
											<a href="<?= site_url('home/edit/'.$row
											->nik) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
											<a onclick="deleteConfirm('<?= site_url('home/delete/'.$row
											->nik) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Delete</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->


		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/templates/scrolltop.php") ?>
	<?php $this->load->view("admin/templates/modal.php") ?>

	<?php $this->load->view("admin/templates/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>

</body>

</html

