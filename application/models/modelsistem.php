<?php
defined('BASEPATH') or exit('No direct script access allowed');

    Class modelsistem extends CI_Model{


// SISWA
    // SIMPAN DATA SISWA
    public function simpan_db(){    


        $data = array(
            'id_siswa' => '',
            'nama_siswa' => $this->input->post('namaa'),
            'kelas' => $this->input->post('klss'),
            'no_absen' => $this->input->post('noabsen'),
            'username' => $this->input->post('userr'),
            'password' => ($this->input->post('pass')),
            'telepon' => $this->input->post('telp'),
        );

        $this->db->insert('siswa', $data);
        header("Location:".base_url().'Homepage/loginn');
    }

    public function get_siswa()
    {
        $data = $this->db->get('siswa');
        return $data->result();
    }
    public function count_siswa()
    {
        $data = $this->db->get('siswa');
        return $data->num_rows();
    }

    public function view_siswa(){
		return $this->db->get('siswa')->result();
    }

    public function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }




// CRUD DATA KUNJUNGAN
    public function view_kunjung(){
		return $this->db->get('kunjungan')->result();
    }

    public function get_kunjungan()
    {
        $data = $this->db->get('kunjungan');
        return $data->result();
    }
    public function count_kunjungan()
    {
        $data = $this->db->get('kunjungan');
        return $data->num_rows();
    }


    public function simpan_kunjung(){    

        $data = array(
            'id_kunjung' => '',
            'nama_siswa' => $this->input->post('nama'),
            'kelas' => $this->input->post('klss'),
            'no_absen' => $this->input->post('noabsen'),
            'tgl_kunjungan' => $this->input->post('tgl'),
            'keperluan' => ($this->input->post('keper')),
            'keterangan' => $this->input->post('ket'),
        );

        $this->db->insert('kunjungan', $data);
        header("Location:".base_url().'Homepage/data_kunjungan');
    }

    public function edit_data($table,$where)
    {
       return $this->db->get_where($table,$where);
    }

    public function edit_kunjungan()
    {
    $data=array(
        'nama_siswa' => $this->input->post('nama'),
        'kelas' => $this->input->post('kls'),
        'no_absen' => $this->input->post('noabsen'),
        'tgl_kunjungan' => $this->input->post('tgl'),
        'keperluan' => ($this->input->post('keper')),
        'keterangan' => $this->input->post('ket'),
    );
    $id = $this->input->post('id_kunjung');
    $this->db->set($data);
    $this->db->where('id_kunjung',$id);
    $this->db->update('kunjungan');
    header("Location:" . base_url('Homepage/data_kunjungan'));
    }

    public function hapus_datakunjung($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


// GURU

public function simpan_db_guru(){    

    $data = array(
        'id_guru' => '',
        'Nik' => $this->input->post('nikk'),
        'nama' => $this->input->post('namaa'),
        'username' => $this->input->post('userr'),
        'password' => ($this->input->post('pass')),
        'telepon' => $this->input->post('telp'),
    );

    $this->db->insert('guru', $data);
    header("Location:".base_url().'Homepage/login_guru');
}

public function view_guru(){
    return $this->db->get('guru')->result();
}

public function get_guru()
{
    $data = $this->db->get('guru');
    return $data->result();
}

public function count_guru()
{
    $data = $this->db->get('guru');
    return $data->num_rows();
}

public function cek_loginn($table,$where){
    return $this->db->get_where($table,$where);
}

public function tanggapan()
{
$data=array(
    'nama_siswa' => $this->input->post('nama'),
    'kelas' => $this->input->post('kls'),
    'no_absen' => $this->input->post('noabsen'),
    'tgl_kunjungan' => $this->input->post('tgl'),
    'keperluan' => $this->input->post('keper'),
    'keterangan' => $this->input->post('ket'),
    'status' => $this->input->post('sta'),
);
$id = $this->input->post('id_kunjung');
$this->db->set($data);
$this->db->where('id_kunjung',$id);
$this->db->update('kunjungan');
header("Location:" . base_url('Homepage/dt_kunjung_diguru'));
}


// SATPAM
public function view_satpam(){
    return $this->db->get('satpam')->result();
}

public function get_satpam()
{
    $data = $this->db->get('satpam');
    return $data->result();
}

public function count_satpam()
{
    $data = $this->db->get('satpam');
    return $data->num_rows();
}

public function cek_login_satpam($table,$where){
    return $this->db->get_where($table,$where);
}

public function simpan_db_satpam(){    

    $data = array(
        'id_satpam' => '',
        'Nik' => $this->input->post('nikk'),
        'nama' => $this->input->post('namaa'),
        'username' => $this->input->post('userr'),
        'password' => ($this->input->post('pass')),
        'telepon' => $this->input->post('telp'),
    );

    $this->db->insert('satpam', $data);
    header("Location:".base_url().'Homepage/login_satpam');
}

public function get_nama_keyword($keyword)
{
    $this->db->select('*');
    $this->db->from('kunjungan');
    $this->db->like('nama_siswa',$keyword);
    $this->db->or_like('kelas',$keyword);
    $this->db->or_like('tgl_kunjungan',$keyword);
    return $this->db->get()->result();
}

}    
?>