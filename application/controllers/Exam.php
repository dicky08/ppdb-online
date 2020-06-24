<?php defined('BASEPATH') or exit('No direct script access allowed');

class Exam extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Exam_model', 'ujian');
		$sesi = $this->session->userdata('sesi');
		if ($sesi === null) {
			redirect('login');
		}
	}
	public function index()
	{
		// Nanti disini di cek ketika user telah mengerjakan soal 
		// akan masuk ke database hasilnya dan ketika user ingin 
		// kembali mnegejrakan soal sudah tidak bisa.
		$sesi = $this->session->userdata('sesi');
		$hasil_ujian = $this->db->get_where('ujian_sementara', ['username' => $sesi['username']])->row_array();
		if ($hasil_ujian) {
			echo "<script>alert('Anda sudah mengikuti ujian!')</script>";
			$data['sesi'] = $this->session->userdata('sesi');
			$data['username'] = $hasil_ujian['username'];
			$data['score'] = $hasil_ujian['score'];
			$data['judulAwal'] = "Hasil Ujian";
			$this->load->view('templates/header', $data);
			$this->load->view('exam/jawaban', $data);
		} else {
			$dataRand = "SELECT * FROM tbl_soal ORDER BY RAND()";
			$data['soal_ujian'] = $this->db->query($dataRand)->result_array();
			$data['jumlah']		= $this->db->get('tbl_soal')->num_rows();
			$data['judulAwal'] = "Soal Ujian";
			$this->load->view('templates/header', $data);
			$this->load->view('exam/soalUjianAwal');
		}
	}


	public function jawaban()
	{


		$data['jumlah'] = $this->ujian->getAll('tbl_soal')->num_rows();
		$benar = 0;
		$salah = 0;
		$kosong = 0;

		$pilihan = $this->input->post('pilihan');
		$jumlah  = $this->input->post('jumlah');
		$id_soal = $this->input->post('id');
		for ($i = 0; $i < $jumlah; $i++) {
			$nomor = $id_soal[$i];
			if (empty($pilihan[$nomor])) {
				$kosong++;
			} else {
				$jawaban = $pilihan[$nomor];
				$database = $this->ujian->getJawaban('tbl_soal', $nomor, $jawaban);
				// $database = "SELECT * FROM tbl_soal WHERE id_soal='$nomor' AND kunci='$jawaban'";
				// $result  = $this->db->query($database)->num_rows();
				if ($database) {
					# code...
					$benar++;
				} else {
					$salah++;
				}
			}
		}
		$data['judulAwal'] = "Hasil Ujian";
		$data['score'] = 100 / $jumlah * $benar;
		$hasil = '';
		if ($data['score'] < 70) {
			$hasil = "tidak lulus";
		} else {

			$hasil = "lulus";
		}
		$data['sesi'] = $this->session->userdata('sesi');
		$dataUjian = [
			'username' => $data['sesi']['username'],
			'score' => $data['score'],
			'keterangan' => $hasil
		];
		$this->db->insert('ujian_sementara', $dataUjian);
		$this->load->view('templates/header', $data);
		$this->load->view('exam/jawaban', $data);
	}
}
