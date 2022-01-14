	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<a class="btn btn-primary" href="logout.php">Keluar</a>
				</div>
			</div>
		</div>
	</div>
	
</body>
	<!-- Asset -->
	<script src="asset/vendor/jquery-3.5.1/jquery-3.5.1.min.js"></script>
	<script src="asset/vendor/bootstrap-4.5.3/js/bootstrap.min.js"></script>
	<script src="asset/vendor/datatables-b4/datatables.min.js"></script>

	<script src="asset/js/demo.js"></script>
	<script src="asset/js/main.js"></script>

	<!-- Mengambil data dari data paket -->
	<script type="text/javascript">
		$(document).on('click', '.pilih-paket', function (e) {
			document.getElementById("kd_paket").value = $(this).attr('data-kdpaket');
			document.getElementById("harga").value = $(this).attr('data-harga');
			$('#modalPaket').modal('hide');
		});

		$(function () {
			$('#dataTables').dataTable();
		});
	</script>

	<!-- Mengambil data dari data konsumen -->
	<script type="text/javascript">
		$(document).on('click', '.pilih-pelanggan', function (e) {
			document.getElementById("id_pelanggan").value = $(this).attr('data-pelanggan');
			$('#modalPelanggan').modal('hide');
		});

		$(function () {
			$('#dataTables').dataTable();
		});
	</script>

	<!-- Menghitung dan menampilkan otomatis Biaya (harga * qty)-->
	<script>
		function jumlahBiaya() {
			var harga = document.getElementById('harga').value;
			var qty = document.getElementById('qty').value;
			var result = parseInt(harga) * parseInt(qty);
			if (!isNaN(result)) {
				document.getElementById('biaya').value = result;
			}
		}
	</script>

	<!-- Menghitung dan menampilkan otomatis Kembalian (bayar - biaya)-->
	<script>
		function jumlahKembalian() {
			var bayar = document.getElementById('bayar').value;
			var biaya = document.getElementById('biaya').value;
			var result = parseInt(bayar) - parseInt(biaya);
			if (!isNaN(result)) {
				document.getElementById('kembalian').value = result;
			}
		}
	</script>	
</html>