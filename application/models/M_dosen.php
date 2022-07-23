<?php
class M_Dosen extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('tb_dosen')->result_array();

    }
}
?>