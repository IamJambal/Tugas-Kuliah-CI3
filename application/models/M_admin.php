<?php
class M_Admin extends CI_Model
{
    public function count_mhs(){
        $sql = "SELECT count(nama) as nama FROM tb_mahasiswa";
        $result = $this->db->query($sql);
        return $result->row()->nama;
    }
    public function count_dsn(){
        $sql = "SELECT count(nama_d) as nama_d FROM tb_dosen";
        $result = $this->db->query($sql);
        return $result->row()->nama_d;
    }

}
?>