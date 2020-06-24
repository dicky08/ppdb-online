<?php defined('BASEPATH') or exit('No direct script access allowed');

class Exam_model extends CI_Model
{
	function getJawaban($table, $nomor, $jawaban)
	{
		$this->db->SELECT('*')
			->FROM($table)
			->WHERE("id_soal='$nomor' AND kunci='$jawaban'");
		return $this->db->get()->num_rows();
	}

	function getAll($table)
	{
		return $this->db->get($table);
	}
}
