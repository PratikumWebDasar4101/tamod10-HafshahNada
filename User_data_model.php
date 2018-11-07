<?php 
require_once 'Koneksi.php';
class User_data_model{
	private $kon;

	function __construct()
	{
		$koneksi = new Koneksi();
		$this->kon = $koneksi->conn();
	}

	public function hapus_user($id)
	{
		$query = "DELETE FROM `data_user` WHERE id = '$id'";
		$query_success = mysqli_query($this->kon, $query);
		return $query_success;
	}
    public function data_user($nama_depan,$nama_belakang,$nim,$kelas,$data_hobby,$data_genre_film,$data_tempat_wisata,$tanggal_lahir)
	{
		$quqery="INSERT INTO `data_user`(
			`nama_depan`,
			`nama_belakang`,
			`nim`,
			`kelas`,
			`hobi`,
			`genre_film`,
			`tempat_wisata`,
			`tanggal_lahir`
		) VALUES (
			'$nama_depan',
			'$nama_belakang',
			'$nim',
			'$kelas',
			'$data_hobby',
			'$data_genre_film',
			'$data_tempat_wisata',
			'$tanggal_lahir'
		)";
		$query_success = mysqli_query($this->kon, $query);
		return $query_success;
	}
}
?>