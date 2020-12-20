<?php

class Homepage extends CI_Controller{

// MODEL
public function __construct()
{
    parent::__construct();
    $this->load->model('modelsistem');
}

// BERANDA SEBELUM LOGIN
    public function beranda(){
        $data['title'] = "SMK Taruna Bhakti";
        $this->load->view('home', $data);
    }

// SISWA
    // LOGIN SISWA
    public function loginn(){
        
        $data['title'] = "Login";
        $this->load->view('login_siswa', $data);
    }

    public function aksi_login(){

        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => $passwords
        );
        $cek = $this->modelsistem->cek_login("siswa", $where)->num_rows();
    
        if ($cek > 0) {
            $data_session = array(
                'username' => $usernames,
                'status' => 'login'
            );
     
        $this->session->set_userdata($data_session);
            if ($this->session->userdata('status') == 'login') {
                // echo "berhasil";
            header("location:" . base_url() . 'Homepage/home_siswa');
        } else{
            echo 'login gagal';
        }
        } else {
            echo 'email dan password yang anda masukan salah!';
        }
    }

// REGISTER SISWA
    public function regis_siswa()
    {
        $data['title'] = "Register";
        $data['model_siswa'] = $this->modelsistem->view_siswa();
        // $data[''] = $this->modelsistem->count_user();
        $this->load->view('register_siswa', $data);
    }
    
// PUBLIC FUNTION SISWA
    public function home_siswa(){
        $data['title'] = "DASHBOARD SISWA | SMK TARUNA BHAKTI";
        $this->load->view('dashboard_siswa',$data);
    }


    public function simpan_data(){
        $this->modelsistem->simpan_db();
        $this->load->view('login_siswa');
    }

    public function form(){
        $data['title'] = "FORM PENGISIAN";
        $data['siswa'] = $this->modelsistem->get_siswa();
        $data['c_siswa'] = $this->modelsistem->count_siswa();
        $this->load->view('siswa/form_pengisian',$data);
    }

    public function data_kunjungan(){
        $data['title'] = "SMK Taruna Bhakti";
        $data['kunjungan'] = $this->modelsistem->get_kunjungan();
        $data['c_kunjungan'] = $this->modelsistem->count_kunjungan();
        $this->load->view('siswa/table_kunjungan', $data);
    }

    // CRUD DATA KUNJUNGAN YG ADA DI SISWA
    public function simpan_kunjungan(){
        $this->modelsistem->simpan_kunjung();
        $this->load->view('siswa/table_kunjungan');
    }

    public function data()
        {
            $this->modelsistem->edit_kunjungan();
            $this->load->view('siswa/edit_kunjungan');
        }
        public function edit_kunjungan($id_kunjung)
        {
            $data['title'] = "Edit Kunjungan";
            $where=array('id_kunjung' => $id_kunjung);
            $data['kunjungan'] = $this->modelsistem->edit_data('kunjungan',$where)->result();
            $this->load->view('siswa/edit_kunjungan',$data);
        }
        public function editKunjungan()
        {
            $this->modelsistem->edit_kunjungan();
        } 

        public function hapuss($id_kunjung)
        {
            $where = array('id_kunjung' => $id_kunjung);
            $this->modelsistem->hapus_datakunjung($where, 'kunjungan');
            redirect('Homepage/data_kunjungan');
        }


// GURU
    // LOGIN GURU
    public function login_guru(){
        
        $data['title'] = "Login";
        $this->load->view('login_guru', $data);
    }

    public function aksi_loginn(){

        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => $passwords
        );
        $cek = $this->modelsistem->cek_loginn("guru", $where)->num_rows();
    
        if ($cek > 0) {
            $data_session = array(
                'username' => $usernames,
                'status' => 'login'
            );
     
        $this->session->set_userdata($data_session);
            if ($this->session->userdata('status') == 'login') {
                // echo "berhasil";
            header("location:" . base_url() . 'Homepage/home_guru');
        } else{
            echo 'login gagal';
        }
        } else {
            echo 'email dan password yang anda masukan salah!';
        }
    }

    public function regis_guru()
    {
        $data['title'] = "Register";
        $data['model_guru'] = $this->modelsistem->view_guru();
        // $data[''] = $this->modelsistem->count_user();
        $this->load->view('register_guru', $data);
    }

    // PUBLIC FUNCTION GURU
    public function home_guru()
    {
        $data['title'] = "SMK Taruna Bhakti";
        $this->load->view('dashboard_guru',$data);
    }

    public function simpan_data_guru(){
        $this->modelsistem->simpan_db_guru();
        $this->load->view('login_guru');
    }

    public function dt_kunjung_diguru(){
        $data['title'] = "SMK Taruna Bhakti";
        $data['kunjungan'] = $this->modelsistem->get_kunjungan();
        $data['c_kunjungan'] = $this->modelsistem->count_kunjungan();
        $this->load->view('guru/data_kunjungan', $data);
    }

    public function dataa()
    {
        $this->modelsistem->tanggapan();
        $this->load->view('guru/tanggapan');
    }
    public function tanggapan($id_kunjung)
    {
        $data['title'] = "Respons Kunjungan";
        $where=array('id_kunjung' => $id_kunjung);
        $data['kunjungan'] = $this->modelsistem->edit_data('kunjungan',$where)->result();
        $this->load->view('guru/tanggapan',$data);
    }
    public function tanggapan_guru()
    {
        $this->modelsistem->tanggapan();
    }


// SATPAM
    // LOGIN SATPAM
    public function login_satpam(){
            
        $data['title'] = "Login";
        $this->load->view('login_satpam', $data);
    }

    public function aksi_login_satpam(){

        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => $passwords
        );
        $cek = $this->modelsistem->cek_login_satpam("satpam", $where)->num_rows();
    
        if ($cek > 0) {
            $data_session = array(
                'username' => $usernames,
                'status' => 'login'
            );
     
        $this->session->set_userdata($data_session);
            if ($this->session->userdata('status') == 'login') {
            header("location:" . base_url() . 'Homepage/home_satpam');
        } else{
            echo 'login gagal';
        }
        } else {
            echo 'email dan password yang anda masukan salah!';
        }
    }

    public function regis_satpam()
    {
        $data['title'] = "Register";
        $data['model_satpam'] = $this->modelsistem->view_satpam();
        $this->load->view('register_satpam', $data);
    }

    public function simpan_data_satpam(){
        $this->modelsistem->simpan_db_satpam();
        $this->load->view('login_satpam');
    }

    // PUBLIC FUNCTION SATPAM
    public function home_satpam()
    {
        $data['title'] = "SMK Taruna Bhakti";
        $this->load->view('dashboard_satpam',$data);
    }
    
    public function dt_kunjung_disatpam(){
        $data['title'] = "SMK Taruna Bhakti";
        $data['kunjungan'] = $this->modelsistem->get_kunjungan();
        $data['c_kunjungan'] = $this->modelsistem->count_kunjungan();
        $this->load->view('satpam/dt_kunjungan', $data);
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['title'] = "SMK Taruna Bhakti";
        $data['kunjungan'] = $this->modelsistem->get_nama_keyword($keyword);
        $data['c_kunjungan'] = $this->modelsistem->count_kunjungan();
        $this->load->view('satpam/search', $data);
    }

    // LOGOUT
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('homepage/beranda'));
    }
  
    

}

?>