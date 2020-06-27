<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		$this->load->model('Ppdb_model', 'ppdb');
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

	public function register()
	{
		$this->load->view('auth/header');
		$this->load->view('auth/registrasi');
		$this->load->view('auth/footer');
	}

	public function registrasi()
	{

		$validation = Validate::validasi();

		$this->form_validation->set_rules('username', 'Username', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('nik', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('nama_lengkap', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('nama_panggilan', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('tempat_lahir', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('tanggal_lahir', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('agama', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('alamat', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('rt', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('rw', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('desa', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('kec', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('kab', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('anak_ke', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('jmlh_suara_kandung', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('tinggi', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('berat', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('gol_darah', 'Full Name', 'required|trim', $validation, TRUE);
		// $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]', $validation, TRUE);
		// $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]', $validation, TRUE);
		if ($this->form_validation->run() === false) {

			$this->load->view('auth/header');
			$this->load->view('auth/register');
			$this->load->view('auth/footer');
		} else {
			if (isset($_POST['submit'])) {
				# code....
				$pathAnak = './assets/img-pendaftaran/photo_siswa/';
				$username 			= $this->input->post('username');
				$nik 				= $this->input->post('nik');
				$namaLengkap 		= $this->input->post('nama_lengkap');
				$namaPanggilan 		= $this->input->post('nama_panggilan');
				$jk 				= $this->input->post('jk');
				// $tempatLahir 		= $this->input->post('tempat_lahir');
				// $tanggalLahir 		= $this->input->post('tanggal_lahir');
				// $agama 				= $this->input->post('agama');
				// $alamat 			= $this->input->post('alamat');
				// $rt 				= $this->input->post('rt');
				// $rw 				= $this->input->post('rw');
				// $desa 				= $this->input->post('desa');
				// $kec 				= $this->input->post('kec');
				// $kab 				= $this->input->post('kab');
				// $anakKe 			= $this->input->post('anak_ke');
				// $jmlhSuaraKandung	= $this->input->post('jmlh_suara_kandung');
				// $tinggi 			= $this->input->post('tinggi');
				// $berat 				= $this->input->post('berat');
				// $gol_darah 			= $this->input->post('gol_darah');
				// $photoAnak 			= $this->ppdb->uploadFile('photo', $pathAnak);
				// $extAnak 			= $nik . $photoAnak['file_ext'];
				// $name				= $photoAnak['file_name'];
				// rename($pathAnak . $name, $pathAnak . $extAnak);


				// DATA AYAH
				$nikAyah 			= $this->input->post('nik_ayah');
				// $namaAyah 			= $this->input->post('nama_ayah');
				// $tempatLahirAyah 	= $this->input->post('tempat_lahir_ayah');
				// $tanggalLahirAyah 	= $this->input->post('tgl_lahir_ayah');
				// $pendAyah 			= $this->input->post('pend_terakhir_ayah');
				// $pekerjaanAyah 		= $this->input->post('pekerjaan_ayah');
				// $alamatAyah 		= $this->input->post('alamat_ayah');
				// $rtAyah 			= $this->input->post('rt_ayah');
				// $rwAyah 			= $this->input->post('rw_ayah');
				// $desaAyah 			= $this->input->post('desa_ayah');
				// $kecAyah 			= $this->input->post('kec_ayah');
				// $kabAyah 			= $this->input->post('kab_ayah');
				// $photoAyah 			= $this->ppdb->uploadFile('photo_ayah', $pathAnak);
				// $extAyah 			= $nikAyah . $photoAnak['file_ext'];
				// rename($pathAnak . $name, $pathAnak . $extAyah);

				// DATA IBU
				$nikIbu 		 = $this->input->post('nik_ibu');
				// $namaIbu 		 = $this->input->post('nama_ibu');
				// $tempatLahirIbu  = $this->input->post('tempat_lahir_ibu');
				// $tanggalLahirIbu = $this->input->post('tgl_lahir_ibu');
				// $pedIbu 		 = $this->input->post('pend_terakhir_ibu');
				// $pekerjaanIbu 	 = $this->input->post('pekerjaan_ibu');
				// $alamatIbu 		 = $this->input->post('alamat_ibu');
				// $rtIbu 			 = $this->input->post('rt_ibu');
				// $rwIbu 			 = $this->input->post('rw_ibu');
				// $desaIbu 		 = $this->input->post('desa_ibu');
				// $kecIbu 		 = $this->input->post('kec_ibu');
				// $kabIbu 		 = $this->input->post('kab_ibu');
				// $photoIbu 		 = $this->ppdb->uploadFile('photo_ibu', $pathAnak);
				// $extIbu 		= $nikIbu . $photoAnak['file_ext'];
				// rename($pathAnak . $name, $pathAnak . $extIbu);
				var_dump($username);
				var_dump($nik);
				var_dump($namaLengkap);
				var_dump($namaPanggilan);
				var_dump($jk);
				var_dump($nikAyah);
				var_dump($nikIbu);
				die;
				// $dataAnak = [
				// 	'nik_siswa'  			=> $nik,
				// 	'username' 				=> $username,
				// 	'nama_lengkap' 			=> $namaLengkap,
				// 	'nama_panggilan'  		=> $namaPanggilan,
				// 	'jenis_kelamin'  		=> $jk,
				// 	'tempat_lahir'  		=> $tempatLahir,
				// 	'tanggal_lahir'  		=> $tanggalLahir,
				// 	'agama'  				=> $agama,
				// 	'alamat'  				=> $alamat . " " . $rt . "/" . $rw . "-" . $desa . "-" . $kec . "-" . $kab,
				// 	'anak_ke'  				=> $anakKe,
				// 	'jmlh_saudara_kandung'  => $jmlhSuaraKandung,
				// 	'berat_badan'  			=> $berat,
				// 	'tinggi_badan'  		=> $tinggi,
				// 	'gol_darah' 			=> $gol_darah,
				// 	'photo'  				=> $extAnak,
				// 	'nik_ayah'  			=> $nikAyah,
				// 	'nik_ibu'  				=> $nikIbu
				// ];
				// $dataAyah = [
				// 	'nik_ayah'  				=> $nikAyah,
				// 	'nama_ayah' 				=> $namaAyah,
				// 	'tempat_lahir_ayah'  		=> $tempatLahirAyah,
				// 	'tanggal_lahir_ayah'  		=> $tanggalLahirAyah,
				// 	'pendidikan_terakhir_ayah'  => $pendAyah,
				// 	'pekerjaan_ayah'  			=> $pekerjaanAyah,
				// 	'alamat_ayah'  					=> $alamatAyah . " " . $rtAyah . "/" . $rwAyah . "-" . $desaAyah . "-" . $kecAyah . "-" . $kabAyah,
				// 	'photo_ayah'  				=> $extAyah,
				// 	'nik_siswa'  				=> $nik
				// ];

				// $dataIbu = [
				// 	'nik_ibu'  			 		=> $nikIbu,
				// 	'nama_ibu' 					=> $namaIbu,
				// 	'tempat_lahir_ibu'  		=> $tempatLahirIbu,
				// 	'tanggal_lahir_ibu'  		=> $tanggalLahirIbu,
				// 	'pendidikan_terakhir_ibu'   => $pedIbu,
				// 	'pekerjaan_ibu'  			=> $pekerjaanIbu,
				// 	'alamat_ibu'  				=> $alamatIbu . " " . $rtAyah . "/" . $rwAyah . "-" . $desaAyah . "-" . $kecAyah . "-" . $kabAyah,
				// 	'photo_ibu'  				=> $extIbu,
				// 	'nik_siswa'  				=> $nik
				// ];

				// $this->ppdb->insert_data($data, 'coba');

			}
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
		$database = $this->db->get_where('coba', ['coba1' => $username])->row_array();
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
