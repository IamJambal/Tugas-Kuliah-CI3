<?php
class M_Mahasiswa extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('tb_mahasiswa')->result_array();

    }
    public function input_data($data){
        $this->db->insert('tb_mahasiswa', $data);

    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function GetMahasiswaById($id){
        return $this->db->get_where('tb_mahasiswa', ['id' => $id]) ->row_array();
    }
    public function UbahDataMahasiswa(){
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "jurusan" => $this->input->post('jurusan', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_mahasiswa', $data);
    }
    public function detail_data($id = NULL){
        $query = $this->db->get_where('tb_mahasiswa', array('id => $id'))->row();
        return $query;
    }
}?>