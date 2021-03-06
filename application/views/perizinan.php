<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Perizinan</h2>
					<h5 class="text-white op-7 mb-2">Asrama Mahasiswa Universitas Trunojoyo Madura</h5>
				</div>
				<!-- <div class="ml-md-auto py-2 py-md-0">
					<a href="#" class="btn btn-white btn-border btn-round mr-2">+ Penjualan</a>
					<a href="#" class="btn btn-secondary btn-round">Piutang</a>
				</div> -->
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row mt--2">
			<div class="col-sm-12">
				<div class="card card-profile">
					<div class="card-header" style="background-image: url('<?= base_url() ?>assets/img/examples/example3.jpeg')">
						<div class="profile-picture">
							<div class="avatar avatar-xl">
							<img src="<?= base_url() ?>assets/img/logo.png" alt="..." class="avatar-img rounded-circle">
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="user-profile text-center">
							<div class="name">Perizinan</div>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-plus"></i>
								Tambah Data
							</button>
							<button class="btn btn-warning btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-print "></i>
								Export
							</button>
						</div>
						<div class="card-footer">

							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
								<strong>Data Berhasil di Tambah</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="edit-alert" role="alert">
								<strong>Data Berhasil di Ubah</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="delete-alert" role="alert">
								<strong>Data Berhasil di Hapus</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div style="display: none;" class="alert alert-success alert-dismissible fade show" id="match-alert" role="alert">
								<strong>Password Tidak Sama</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="table-responsive">
								<table id="myTable" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Tanggal Izin</th>
											<th>Jam Izin</th>
											<th>Tanggal Kembali</th>
											<th>Jam Kembali</th>
											<th>Keterangan</th>
											<th style="width: 10%">AKSI</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Nina</td>
											<td>14/10/2020</td>
											<td>14.15</td>
											<td>16/10/2020</td>
											<td>15.00</td>
											<td>Pulang</td>
											<td>
												<div class="form-button-action">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
														<i class="fa fa-edit"></i>
													</button>
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
														<i class="fa fa-times"></i>
													</button>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Tambah Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Data</span>
					<span class="fw-light">
						Perizinan
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="username">Nama</label>
								<input list="list_username" id="username" name="username" class="form-control" required>
								<datalist id="list_username">

								</datalist>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="tgl_izin">Tanggal Izin</label>
								<input type="date" class="form-control" id="tgl_izin">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="jam_izin">Jam Izin</label>
								<input type="time" class="form-control" id="jam_izin">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="tgl_kembali">Tanggal Kembali</label>
								<input type="date" class="form-control" id="tgl_kembali">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="jam_kembali">Jam Kembali</label>
								<input type="time" class="form-control" id="jam_kembali">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="keterangan">Keterangan</label>
								<input type="type" class="form-control" id="keterangan" placeholder="keterangan">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd">
				<button onclick="tambah()" id="tambah_button" type="button" class="btn btn-primary">Tambah</button>
				<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
			</div>
		</div>
	</div>
</div>

<!--Ubah Modal -->
<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Data</span>
					<span class="fw-light">
						Perizinan
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_username">Username</label>
								<input id="ubah_username" type="text" class="form-control"  placeholder="Username" readonly required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_tgl_izin">Tanggal Izin</label>
								<input type="date" class="form-control" id="ubah_tgl_izin">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_jam_izin">Jam Izin</label>
								<input type="time" class="form-control" id="ubah_jam_izin">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_tgl_kembali">Tanggal Kembali</label>
								<input type="date" class="form-control" id="ubah_tgl_kembali">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="ubah_jam_kembali">Jam Kembali</label>
								<input type="time" class="form-control" id="ubah_jam_kembali">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="ubah_keterangan">Keterangan</label>
								<input type="type" class="form-control" id="ubah_keterangan" placeholder="keterangan">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer no-bd" id="ubahModal_tombol">
				<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
			</div>
		</div>
	</div>
</div>

<!--Hapus Modal -->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Hapus Data </span>
					<span class="fw-light">
						Perizinan
					</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Apakah anda ingin mengapus data ? </br> <span style="color: red;">*Data yang telah dihapus tidak dapat dikembalikan lagi</span></p>
			</div>
			<div class="modal-footer no-bd" id="hapusModal_tombol">
				<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		// $("#success-alert").hide();
		$("#tambah_button").click(function showAlert() {
			$("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
				$("#success-alert").slideUp(500);
			});
		});

		//datatabel
		ambil_data();
		get_username();
	});

	function get_username() {
		$.ajax({
			type: 'POST',
			url: '<?= site_url() ?>perizinan_control/get_username',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				var html = '';
				for (var i = 0; i < data.length; i++) {
					html += '<option value="' + data[i].id_pengguna + ' | ' + data[i].username + ' | ' + data[i].jurusan + '"></option>';
				}
				$("#list_username").html(html);
			}
		});
	}

	function tambah() {
		if (document.getElementById("tgl_izin").value == "") {
			document.getElementById("tgl_izin").focus();
		}
		if (document.getElementById("jam_izin").value == "") {
			document.getElementById("jam_izin").focus();
		}
		if (document.getElementById("tgl_kembali").value == "") {
			document.getElementById("tgl_kembali").focus();
		}
		if (document.getElementById("jam_kembali").value == "") {
			document.getElementById("jam_kembali").focus();
		}
		if (document.getElementById("keterangan").value == "") {
			document.getElementById("keterangan").focus();
		}
		if (document.getElementById("username").value == "") {
			document.getElementById("username").focus();
		}
		if (document.getElementById("username").value != "" && document.getElementById("tgl_izin").value != "" && document.getElementById("jam_izin").value != "" &&
			document.getElementById("tgl_kembali").value != "" && document.getElementById("jam_kembali").value != "" && document.getElementById("keterangan").value != "") {
			// console.log("sukses");
			var pengguna = document.getElementById("username").value.split(' | ');
			$.ajax({
				type: 'POST',
				data: 'tabel="pengguna"' + '&id=' + pengguna[0] +
					'&tgl_izin=' + document.getElementById("tgl_izin").value + 
					'&jam_izin=' + document.getElementById("jam_izin").value + 
					'&tgl_kembali=' + document.getElementById("tgl_kembali").value + 
					'&jam_kembali=' + document.getElementById("jam_kembali").value + 
					'&keterangan=' + document.getElementById("keterangan").value,
				url: '<?= site_url("perizinan_control/tambah_data") ?>',
				dataType: 'json',
				success: function(data) {
					console.log(data);
					document.getElementById("username").value = "";
					document.getElementById("tgl_izin").value = "";
					document.getElementById("jam_izin").value = "";
					document.getElementById("tgl_kembali").value = "";
					document.getElementById("jam_kembali").value = "";
					document.getElementById("keterangan").value = "";

					ambil_data();

					$('#addRowModal').modal('hide');
				}
			});
		}
		// console.log(document.getElementById("kode").value);
	}

	function ambil_data() {
		$('#myTable').DataTable({
			destroy: true,
			"ajax": {
				"url": "<?php echo site_url("perizinan_control/tampil") ?>",
				"dataSrc": ""
			},
			"columns": [{
					"data": "username"
				},
				
				{
					"data": "tgl_izin"
				},
				{
					"data": "jam_izin"
				},
				{
					"data": "tgl_kembali"
				},
				{
					"data": "jam_kembali"
				},
				{
					"data": "keterangan"
				},
				
				{
					"data": "id_perizinan",
					"render": function(data, type, row) {
						// Tampilkan kolom aksi
						var html = '<div class="form-button-action">' +
							'<button onclick="ubah_list(' + data + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">' +
							'<i class="fa fa-edit"></i>' +
							'</button>' + '<button onclick="hapus_list(' + data + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">' +
							'<i class="fa fa-times"></i>' +
							'</button>' +
							'</div>';

						return html
					}

				}
			]
		});
	}

	function ubah_list(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>perizinan_control/ubah_list',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				for (var i = 0; i < data.length; i++) {
					document.getElementById("ubah_username").value = data[i].username;
					document.getElementById("ubah_tgl_izin").value = data[i].tgl_izin;
					document.getElementById("ubah_jam_izin").value = data[i].jam_izin;
					document.getElementById("ubah_tgl_kembali").value = data[i].tgl_kembali;
					document.getElementById("ubah_jam_kembali").value = data[i].jam_kembali;
					document.getElementById("ubah_keterangan").value = data[i].keterangan;

					var html = '<button onclick="ubah(' + id + ')" id="ubah_button" type="button" data-dismiss="modal" class="btn btn-primary">Ubah</button>';
					$("#ubahModal_tombol").html(html);

					$("#ubah_button").click(function showAlert() {
						$("#edit-alert").fadeTo(2000, 500).slideUp(500, function() {
							$("#edit-alert").slideUp(500);
						});
					});

					$('#ubahModal').modal('show');
				}
			}
		});
	}

	function ubah(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id + '&tgl_izin=' + document.getElementById("ubah_tgl_izin").value +
				'&jam_izin=' + document.getElementById("ubah_jam_izin").value +
				'&tgl_kembali=' + document.getElementById("ubah_tgl_kembali").value +
				'&jam_kembali=' + document.getElementById("ubah_jam_kembali").value +
				'&keterangan=' + document.getElementById("ubah_keterangan").value,
			url: '<?= base_url() ?>perizinan_control/ubah',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('#ubahModal').modal('hide');

				ambil_data();
			}
		});
	}


	function hapus_list(id) {
		var html = '<button onclick="hapus(' + id + ')" id="hapus_button" type="button" data-dismiss="modal" class="btn btn-danger">Hapus</button>';
		$("#hapusModal_tombol").html(html);

		$("#hapus_button").click(function showAlert() {
			$("#delete-alert").fadeTo(2000, 500).slideUp(500, function() {
				$("#delete-alert").slideUp(500);
			});
		});

		$('#hapusModal').modal('show');
	}

	function hapus(id) {
		$.ajax({
			type: 'POST',
			data: 'id=' + id,
			url: '<?= base_url() ?>perizinan_control/hapus',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('#hapusModal').modal('hide');

				ambil_data();
			}
		});
	}
</script>