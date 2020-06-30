<?php defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ppdb_model', 'ppdb');
        $this->load->library('Validate');
    }
    public function index()
    {
        $data['sesi'] = $this->session->userdata('sesi');
        $sesi = $data['sesi'];
        $database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_siswa')->row_array();
        $data['photo'] = $database['photo'];
        $data['namaLengkap'] = $database['nama_lengkap'];

        $data['title'] = "Dashboard";
        $this->load->view('user/header', $data);
        $this->load->view('user/navbar', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/footer');
    }

    public function data_diri()
    {
        $data['sesi'] = $this->session->userdata('sesi');
        $sesi = $data['sesi'];
        $database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_siswa')->row_array();
        $data['photo'] = $database['photo'];
        $data['namaLengkap'] = $database['nama_lengkap'];
        $data['title'] = "Profile";
        $this->load->view('user/header');
        $this->load->view('user/navbar');
        $this->load->view('user/sidebar');
        $this->load->view('user/profile');
        $this->load->view('user/footer');
    }

    public function pendaftaran()
    {
        $data['sesi'] = $this->session->userdata('sesi');
        $sesi = $data['sesi'];
        $data['dataJoin'][] = $this->ppdb->joinTableSiswa($sesi['username'])->row_array();
        foreach ($data['dataJoin'] as $dp) {
            $data['namaLengkap'] = $dp['nama_lengkap'];
            $data['nol'] = "0";
            $alamat = $dp['alamat'];
            $pecah = explode("-", $alamat);
            $data['alamat'] = $pecah[0];
            $data['rt'] = $pecah[1];
            $data['rw'] = $pecah[2];
            $data['desa'] = $pecah[3];
            $data['kec'] = $pecah[4];
            $data['kab'] = $pecah[5];
            $data['status'] = $dp['status'];
            $data['namaLengkap'] = $dp['nama_lengkap'];
            $data['photo'] = $dp['photo'];
        }
        $data['title'] = "Data Pendaftaran";
        $this->load->view('user/header', $data);
        $this->load->view('user/navbar', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('user/data_pendaftaran', $data);
        $this->load->view('user/footer');
    }

    public function pembayaran()
    {
        $data['sesi'] = $this->session->userdata('sesi');
        $sesi = $data['sesi'];
        $database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_siswa')->row_array();
        $data['photo'] = $database['photo'];
        $data['namaLengkap'] = $database['nama_lengkap'];
        $data['title'] = "Data Pembayaran";
        $this->load->view('user/header', $data);
        $this->load->view('user/navbar', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('user/pembayaran', $data);
        $this->load->view('user/footer');
    }

    public function cetak()
    {
        $mpdf = new \Mpdf\Mpdf();

        // $data['judul'] = "Data Pensiun";
        $mpdf->addPage('L');
        // $html = $this->load->view('pengajuan/cetak_sk', $data, TRUE);
        $html = "hai";
        $mpdf->WriteHtml($html);
        $mpdf->Output();
    }
    public function logout()
    {
        $this->session->unset_userdata('sesi');
        redirect('auth_user/dashboard');
    }
}
