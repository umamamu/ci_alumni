<?php
class M_users extends CI_Model {

	public $table = 'users';

	public function cekAkun($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('active','1');

		// jalankan query
		$query = $this->db->get($this->table)->row();

		// jika query gagal maka return false
		if (!$query) return false;

		// ambil data password dari db
		$hash = $query->password;

		// jika hash tidak sama dg password maka false
		if (!password_verify($password, $hash)) return FALSE;

		// jika username dan password benar maka return data user
		return $query;
	}
}
?>