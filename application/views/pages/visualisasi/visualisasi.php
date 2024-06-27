<html>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
</head>
<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="py-3 mb-4"><span class="text-muted fw-light"></span> Personal Visualitation</h4>
	<div class="row">
		<!-- Basic  -->
		<div class="d-flex justify-content-center">
			<?= $this->session->flashdata('message'); ?>
			<div class="col-lg-4 col-md-6 col-sm-8 col-12">
				<div class="card mb-4">
					<h5 class="card-header text-center">Uploud Data</h5>
					<div class="card-body">
						<form id="uploadForm" action="C_Visual/upload" method="POST" enctype="multipart/form-data">
							<div class="dropzone" id="dropzone">
								Drop file Excel disini atau klik untuk upload
								<input type="file" name="myFile" id="fileInput" accept=".csv,.xls,.xlsx"
									style="display: none;">
							</div>
							<div class="d-flex justify-content-center">
								<div class="file-preview" id="filePreview"></div>
							</div>
							<div class="d-flex justify-content-center">
								<button type="submit" class="btn rounded-pill btn-primary submit-btn">Upload</button>
							</div>


						</form>

					</div>
				</div>
			</div>
		</div>

		<!-- /Basic  -->
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header d-flex align-items-center justify-content-center btn-primary"
					style=" height:63px;">
					<h5 class="card-title m-0 me-2 text-white"> History Perjalanan</h5>

				</div>
				<div class="table-responsive">

					<table class="table">
						<thead class="table-light">
							<tr>
								<th class="text-truncate">No</th>
								<th class="text-truncate">Waktu</th>
								<th class="text-truncate">Latitude</th>
								<th class="text-truncate">Langitude</th>
								<th class="text-truncate">PM25</th>
								<th class="text-truncate">Speed</th>
								<th class="text-truncate text-center">Aksi</th>
							</tr>
						</thead>
						<tr>
							<td class="text-truncate">1</td>
							<td class="text-truncate">13/06/2024 17:33
							</td>
							<td class="text-truncate">0.568593
							</td>
							<td class="text-truncate">101.426.365
							</td>
							<td class="text-truncate">1.28
							</td>
							<td class="text-truncate">14.1
							</td>
							<td class="text-truncate text-center"><button style="padding: 0; border: none; background: none;"><a
										class="btn btn-sm btn-primary text" style="color:white; font-size:10px;">
										Detail</a></button>
								<button style="padding: 0; border: none; background: none;"><a
										class="btn btn-sm btn-outline-danger text-danger"
										style=" font-size:10px;">hapus</a></button>
							</td>
						</tr>
						<tr>
							<td class="text-truncate">1</td>
							<td class="text-truncate">13/06/2024 17:36
							</td>
							<td class="text-truncate">0.568524
							</td>
							<td class="text-truncate">101.426.386
							</td>
							<td class="text-truncate">0.96

							</td>
							<td class="text-truncate">47
							</td>
							<td class="text-truncate text-center"><button style="padding: 0; border: none; background: none;"><a
										class="btn btn-sm btn-primary text" style="color:white; font-size:10px;">
										Detail</a></button>
								<button style="padding: 0; border: none; background: none;"><a
										class="btn btn-sm btn-outline-danger text-danger"
										style=" font-size:10px;">hapus</a></button>
							</td>
						</tr>
						<tr>
							<td class="text-truncate">1</td>
							<td class="text-truncate">13/06/2024 17:39
							</td>
							<td class="text-truncate">0.568146
							</td>
							<td class="text-truncate">101.426.303
							</td>
							<td class="text-truncate">1.76
							</td>
							<td class="text-truncate">48.3
							</td>
							<td class="text-truncate text-center"><button style="padding: 0; border: none; background: none;"><a
										class="btn btn-sm btn-primary text" style="color:white; font-size:10px;">
										Detail</a></button>
								<button style="padding: 0; border: none; background: none;"><a
										class="btn btn-sm btn-outline-danger text-danger"
										style=" font-size:10px;">hapus</a></button>
							</td>
						</tr>
						<tr>
							<td class="text-truncate">1</td>
							<td class="text-truncate">13/06/2024 18:18
							</td>
							<td class="text-truncate">0.568593
							</td>
							<td class="text-truncate">101.426.365
							</td>
							<td class="text-truncate">0.33
							</td>
							<td class="text-truncate">264.5
							</td>
							<td class="text-truncate text-center"><button style="padding: 0; border: none; background: none;"><a
										class="btn btn-sm btn-primary text" style="color:white; font-size:10px;">
										Detail</a></button>
								<button style="padding: 0; border: none; background: none;"><a
										class="btn btn-sm btn-outline-danger text-danger"
										style=" font-size:10px;">hapus</a></button>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>
