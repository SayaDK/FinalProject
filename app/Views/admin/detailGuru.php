<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p class="lead">Detail Biodata Guru</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<img src="<?php base_url() ?>/assets/img/profil_guru/<?= $identitas['foto']; ?>" alt="" style="height: 8cm; width: 6cm;">
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<table style="margin-bottom: 30px;">
						<thead>
							<h3>Data Pribadi</h3>
						</thead>
						<tr>
							<td>NIP </td>
							<td>:</td>
							<td><?= $identitas['NIP']; ?></td>
						</tr>
						<tr>
							<td>Nama </td>
							<td>:</td>
							<td><?= $identitas['Nama']; ?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin </td>
							<td>:</td>
							<td><?= $identitas['jenis_kelamin']; ?></td>
						</tr>
						<tr>
							<td>Mata Pelajaran </td>
							<td>:</td>
							<td><?= $identitas['Nama_mapel']; ?></td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td>:</td>
							<td><?= $identitas['Alamat']; ?></td>
						</tr>
						<tr>
							<td>Mulai Mengajar </td>
							<td>:</td>
							<td><?= $identitas['tgl_masuk']; ?></td>
						</tr>
					</table>
				</div>
			</div>

		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- Javascript -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="../assets/vendor/chartist/js/chartist.min.js"></script>
<script src="../assets/scripts/klorofil-common.js"></script>
<?= $this->endSection('content'); ?>