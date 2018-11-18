<?php
	class M_alumni extends CI_Model
	{
		function __construct()
		{
			# code...
		}

		public function getAlumni()
		{
			$table = 'alumni';
			$query = $this->db->get($table);
			return $query;
		}
	}
?>