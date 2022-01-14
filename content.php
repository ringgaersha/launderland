<?php 
  switch (@$_GET['page']) {

		// Pelanggan
    case 'Pelanggan':
			include 'page/pelanggan/pelanggan.php';
			break;
		case 'TambahPelanggan':
			include 'page/pelanggan/tambahpelanggan.php';
			break;
		case 'EditPelanggan':
			include 'page/pelanggan/editpelanggan.php';
			break;
		case 'HapusPelanggan':
			include 'page/pelanggan/hapuspelanggan.php';
			break;

		// Paket
		case 'Paket':
			include 'page/paket/paket.php';
			break;
		case 'TambahPaket':
			include 'page/paket/tambahpaket.php';
			break;
		case 'EditPaket':
			include 'page/paket/editpaket.php';
			break;
		case 'HapusPaket':
			include 'page/paket/hapuspaket.php';
			break;

		// Karyawan
		case 'Karyawan':
			include 'page/karyawan/karyawan.php';
			break;
		case 'TambahKaryawan':
			include 'page/karyawan/tambahkaryawan.php';
			break;
		case 'EditKaryawan':
			include 'page/karyawan/editkaryawan.php';
			break;
		case 'PengaturanKaryawan':
			include 'page/karyawan/pengaturankaryawan.php';
			break;
		case 'HapusKaryawan':
			include 'page/karyawan/hapuskaryawan.php';
			break;

		// Transaksi
		case 'Transaksi':
			include 'page/transaksi/transaksi.php';
			break;
		case 'TambahTransaksi':
			include 'page/transaksi/tambahtransaksi.php';
			break;
		case 'EditTransaksi':
			include 'page/transaksi/edittransaksi.php';
			break;
		case 'HapusTransaksi':
			include 'page/transaksi/hapustransaksi.php';
			break;			

		// User
		case 'Profil':
			include 'page/user/profil.php';
			break;
		case 'EditProfil':
			include 'page/user/editprofil.php';
			break;
		case 'UbahPassword':
			include 'page/user/ubahpassword.php';
			break;	

    default :
      include 'page/home.php';
      break;
  }
?>