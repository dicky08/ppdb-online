// class User extends CI_Controller
// {
// protected $sesi;
// public function __construct()
// {
// parent::__construct();
// $this->sesi = $this->session->userdata('sesi');
// }

// public function index()
// {

// if (isset($_COOKIE['nama'])) {
// $nama = $_COOKIE['nama'];
// $database = $this->db->get_where('user', ['username' => $nama])->row_array();
// $uname = $database['username'];
// $fullName = $database['full_name'];
// if ($nama === $database['username']) {
// $dataSession = [
// 'username' => $uname,
// 'full_name' => $fullName
// ];
// $this->session->set_userdata('sesi', $dataSession);
// var_dump($dataSession);
// }
// }
// if ($this->sesi === null) {
// redirect('auth_user/dashboard');
// }

// $this->load->view('templates_all/header');
// $this->load->view('templates_all/navbar');
// $this->load->view('templates_all/sidebar');
// $this->load->view('templates_all/content');
// $this->load->view('templates_all/footer');
// }


// public function dashboard()
// {
// }
// }
