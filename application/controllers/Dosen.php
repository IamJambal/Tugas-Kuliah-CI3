<?php
class Dosen extends CI_Controller
{
    public function index(){
		$title['title'] = 'Dosen';
        $data['dosen'] = $this->m_dosen->tampil_data();
		$this->load->view('template/header', $title);
		$this->load->view('template/sidebar', $title);
		$this->load->view('dosen', $data);
		$this->load->view('template/footer');
    }
}
?>