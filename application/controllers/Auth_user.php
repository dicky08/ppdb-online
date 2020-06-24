<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		$this->load->library('Validate');
	}

	public function index()
	{
		$this->load->view('auth/header');
		$this->load->view('auth/register');
		$this->load->view('auth/footer');
	}

	public function dashboard()
	{
		$sesi = $this->session->userdata('sesi');
		if ($sesi !== null) {
			redirect('exam');
		}
		$data['judulAwal'] = "PPDB ONLINE";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/content');
		$this->load->view('templates/footer');
	}



	public function registrasi()
	{

		$validation = Validate::validasi();

		$this->form_validation->set_rules('username', 'Username', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('full_name', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]', $validation, TRUE);
		$this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]', $validation, TRUE);
		if ($this->form_validation->run() === false) {

			$this->load->view('auth/header');
			$this->load->view('auth/register');
			$this->load->view('auth/footer');
		} else {
			$username = $this->input->post('username');
			$fullName = $this->input->post('full_name');
			$password = $this->input->post('password1');
			$cekUsername = $this->db->get_where('user', ['username' => $username])->row_array();
			if ($cekUsername) {
				# code...
				echo "<script>alert('Username sudah terdaftar!')</script>";
				redirect('daftar-akun', 'refresh');
				exit;
			}
			$dataRegistrasi = [
				'username'  => htmlspecialchars(strip_tags($username, TRUE)),
				'full_name' => htmlspecialchars(strip_tags($fullName, TRUE)),
				'password'  => password_hash($password, PASSWORD_DEFAULT),
				'picture'   => 'default.jpg'
			];
			$this->user->insert_data($dataRegistrasi, 'user');
			echo "<script>alert('Selamat anda berhasil registrasi. Silahkan Login!')</script>";
			redirect('login', 'refresh');
		}
	}

	public function login()
	{
		$sesi = $this->session->userdata('sesi');
		if ($sesi !== null) {
			redirect('exam');
		}

		$validation = Validate::validasi();

		$this->form_validation->set_rules('username', 'Username', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]', $validation, TRUE);
		if ($this->form_validation->run() === false) {
			$this->load->view('auth/header');
			$this->load->view('auth/login');
			$this->load->view('auth/footer');
		} else {
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password1');
			$remember 		= $this->input->post('r');
			$databaseUser 	= $this->db->get_where('user', ['username' => $username])->row_array();



			// CEK USER APAKAH SUDAH TERDAFTAR
			if ($databaseUser) {
				// CEK PASSWORD SESUAI ATAU TIDAK
				$uname 			= $databaseUser['username'];
				$pass 			= $databaseUser['password'];
				if (password_verify($password, $pass)) {
					$dataSession = [
						'username' => $uname,
						'full_name' => $databaseUser['full_name']
					];

					$this->session->set_userdata('sesi', $dataSession);
					date_default_timezone_set('asia/jakarta');
					if ($remember !== null) {
						# code...
						setcookie('nama', $uname, time() + 60);
					}
					echo "<script>alert('Login berhasil!')</script>";
					redirect('exam', 'refresh');
					// redirect('user', 'refresh');
				} else {
					echo "<script>alert('Login gagal!')</script>";
					redirect('login', 'refresh');
				}
			} else {
				echo "<script>alert('Username belum terdaftar!')</script>";
				redirect('login', 'refresh');
			}
		}
	}

	public function requestAjax()
	{
		$username = $_POST['username'];
		$database = $this->db->get_where('user', ['username' => $username])->row_array();
		echo json_encode($database);
	}

	public function logout()
	{
		$this->session->unset_userdata('sesi');
		delete_cookie('nama');
		redirect('auth_user/dashboard');
	}
	// public function register()
	// {
	// 	$username = $this->input->post('username');
	// 	$fullName = $this->input->post('full_name');
	// 	$pass1 = $this->input->post('password1');
	// 	$pass2 = $this->input->post('password2');
	// 	$database = $this->db->get_where('user', ['username' => $username]);
	// 	if (isset($_POST['daftar'])) {
	// 		// CEK JIKA DATA KOSONG
	// 		if (empty($username) || empty($fullName) || empty($pass1) || empty($pass2)) {
	// 			echo "<script>alert('Data tidak boleh kosong')</script>";
	// 		} elseif ($database) {
	// 			# Cek username apakah sudah terdaftar
	// 			echo "<script>alert('Data sudah terdaftar!')</script>";
	// 		} elseif (($pass1) !== ($pass2)) {
	// 			// CEK APAKAH PASSWORD TIDAK SAMA
	// 			echo "<script>alert('Password tidak sama!')</script>";
	// 		} else {
	// 			# Jika data berhasil
	// 			$data = [
	// 				'username'  => htmlspecialchars(strip_tags($username), TRUE),
	// 				'full_name' => htmlspecialchars(strip_tags($fullName), TRUE),
	// 				'password'  => password_hash($pass1, PASSWORD_DEFAULT)
	// 			];
	// 			$this->user->insert_data($data, 'user');
	// 			echo "<script>alert('Berhasil daftar')</script>";
	// 			redirect('user', 'refresh');
	// 		}
	// 	}
	// 	$this->load->view('auth/header');
	// 	$this->load->view('auth/register');
	// }

	// public function login()
	// {
	// 	$username = $this->input->post('username_login');
	// 	$pass = $this->input->post('password');

	// 	if (isset($_POST['login'])) {
	// 		if (empty($username) || empty($pass)) {
	// 			# Jika Data Kosong
	// 			echo "<script>alert('Data tidak boleh kosong')</script>";
	// 		}
	// 		$userDatabase = $this->db->get_where('user', ['username' => $username])->row_array();
	// 		# Cek apa user terdaftar
	// 		if ($userDatabase) {
	// 			# Cek Password apa sama?
	// 			if (password_verify($pass, $userDatabase['password'])) {
	// 				echo "<script>alert('Login berhasil')</script>";
	// 				redirect('user', 'refresh');
	// 			} else {
	// 				# Jika login gagal
	// 				echo "<script>alert('Login gagal')</script>";
	// 				redirect('auth_user', 'refresh');
	// 			}
	// 		} else {
	// 			# Jika data belum terdaftar
	// 			echo "<script>alert('Data belum terdaftar!')</script>";
	// 			redirect('auth_user', 'refresh');
	// 		}
	// 	}
	// 	$this->load->view('auth/akun');
	// }
}
