<?php 

include 'koneksi.php';

function lihat($query){
	global $konek;

	// analogi teknik yang digunakan yaitu ambil baju satu kemudian tambhkan baju satu lagi disampingnya kemudian tambah lagi baju disampingny

	$hasil=mysqli_query($konek,$query);
	$penampung_array=[];
	// digunakan untuk membuat array kosong sebagai penampung nantinya

	while ($tambah=mysqli_fetch_assoc($hasil)) {
		
		$penampung_array[]=$tambah;

	}
	return $penampung_array;

}
 ?>