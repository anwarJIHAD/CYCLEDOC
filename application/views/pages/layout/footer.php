<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
	<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
		<div class="mb-2 mb-md-0">
			©
			<script>
				document.write(new Date().getFullYear());
			</script>
			, made with ❤️ by
			<a href="#" target="#" class="footer-link fw-medium">Cycledoc</a>
		</div>

	</div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url('assets/template/') ?>assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/hammer/hammer.js"></script>
<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/i18n/i18n.js"></script>
<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="<?= base_url('assets/template/') ?>assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/chartjs/chartjs.js"></script>
<!-- <script src="<?= base_url('assets/template/') ?>assets/vendor/libs/dropzone/dropzone.js"></script> -->
<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

<!-- Main JS -->
<script src="<?= base_url('assets/template/') ?>assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url('assets/template/') ?>assets/js/dashboards-analytics.js"></script>
<script src="<?= base_url('assets/template/') ?>assets/js/app-ecommerce-dashboard.js"></script>
<script src="<?= base_url('assets/template/') ?>assets/js/charts-chartjs.js"></script>
<!-- <script src="<?= base_url('assets/template/') ?>assets/js/forms-file-upload.js"></script> -->

<!-- <script src="<?= base_url('assets/template/') ?>assets/js/tables-datatables-advanced.js"></script> -->
<!-- <script src="<?= base_url('assets/template/') ?>assets/js/maps-leaflet.js"></script> -->



<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoiam9jaG9pMDcwNyIsImEiOiJjajczMWZrcTkwNHo2MzNvNGIzOHI3MW85In0.GSHlVF_HltDmEvomI2m_CA';
	var map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/mapbox/streets-v11',
		center: [106.816666, -6.200000], // Koordinat pusat di Indonesia (Jakarta)
		zoom: 12
	});
</script>


<!-- input drag -->
<script>
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('fileInput');
        const filePreview = document.getElementById('filePreview');
        const uploadForm = document.getElementById('uploadForm');

        // Klik untuk memilih file
        dropzone.addEventListener('click', () => {
            fileInput.click();
        });

        // Drag over event
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('dragover');
        });

        // Drag leave event
        dropzone.addEventListener('dragleave', (e) => {
            e.preventDefault();
            dropzone.classList.remove('dragover');
        });

        // Drop event
        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('dragover');
            const files = e.dataTransfer.files;
            if (files.length) {
                validateAndPreviewFile(files[0]);
            }
        });

        // Change event when file is selected using file input
        fileInput.addEventListener('change', (e) => {
            const files = e.target.files;
            if (files.length) {
                validateAndPreviewFile(files[0]);
            }
        });

        function validateAndPreviewFile(file) {
            const allowedExtensions = /(\.xls|\.xlsx|\.csv)$/i;
            if (!allowedExtensions.exec(file.name)) {
                alert('Invalid file type! Please upload an Excel file.');
                fileInput.value = '';
                filePreview.innerHTML = '';
                return;
            }

            showFilePreview(file);
        }

        function showFilePreview(file) {
            filePreview.innerHTML = '';
            const fileType = file.type;

            let icon = '';
            if (fileType.includes('spreadsheet') || fileType.includes('excel')) {
                icon = 'https://img.icons8.com/color/48/000000/ms-excel.png'; // Excel icon
            } else if (fileType.includes('csv')) {
                icon = 'https://img.icons8.com/color/48/000000/csv.png'; // CSV icon
            } else {
                icon = 'https://img.icons8.com/color/48/000000/document.png'; // Default document icon
            }
			
            filePreview.innerHTML = `<img src="${icon}" alt="File Icon"><span>${file.name}</span>`;
        }

        // Handle form submit
        uploadForm.addEventListener('submit', (e) => {
            if (!fileInput.files.length) {
                e.preventDefault();
                alert('Please select a file before submitting.');
            }
        });
    </script>
</body>

</html>
