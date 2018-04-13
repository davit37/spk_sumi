<?php 
if(isset($_GET['page'])){
	$page = $_GET['page'];
	switch($page){
		case 'barang_add':
			include 'page/barang_add.php';
			break;
		case 'barang_data':
			include 'page/barang_data.php';
			break;
		case 'barang_edit':
			include 'page/barang_edit.php';
			break;
		default:
			echo"Halaman Tidak Ditemukan";
			break;

	}
}
?>