<?php
class Mahasiswa extends CI_Controller
{
    public function index(){
		$title['title'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data();
		$this->load->view('template/header', $title);
		$this->load->view('template/sidebar', $title);
		$this->load->view('mahasiswa', $data);
		$this->load->view('template/footer');
    }
	public function tambah_aksi(){
		$data =
		[
			'nama'     		=> $this->input->post('nama'),
			'nim'     		=> $this->input->post('nim'),
			'tgl_lahir'     => $this->input->post('tgl_lahir'),
			'jurusan'     	=> $this->input->post('jurusan'),
			'alamat'     	=> $this->input->post('alamat'),
			'email'    		=> $this->input->post('email'),
			'no_telp'     	=> $this->input->post('no_telp')
		];
		$this->m_mahasiswa->input_data($data, 'tb_mahasiswa');
		$this->session->set_flashdata('message', '<div 
		class="alert alert-primary alert-dismissible fade show text-center" role="alert">
		<strong>Data Berhasil Ditambah!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  		<span aria-hidden="true">&times;</span>
			</button>
	  	</div>');
		redirect('mahasiswa/index');
	}
	public function hapus($id){
		$where = ['id' => $id];
		$this->m_mahasiswa->hapus_data($where, 'tb_mahasiswa');
		$this->session->set_flashdata('message', '<div 
		class="alert alert-danger alert-dismissible fade show text-center" role="alert">
		<strong>Data Berhasil Dihapus!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  		<span aria-hidden="true">&times;</span>
			</button>
	  	</div>');
		redirect('mahasiswa/index');
	}
	public function edit($id){
		$data['mahasiswa'] = $this->m_mahasiswa->GetMahasiswaById($id);
		$data['jurusan'] = ['Pilih Jurusan', 'Bisnis', 'Desain Grafis', 'Komputer Akuntansi', 'Sistem Informatika', 'Sistem Komputer', 'Teknik Informatika'];
		$this->form_validation->set_rules('nama', 'Nama', 'Required');
		$this->form_validation->set_rules('nim', 'Nim', 'Required');
		$this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'Required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'Required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'Required');
		$this->form_validation->set_rules('email', 'Email', 'Required');
		$this->form_validation->set_rules('no_telp', 'No_telp', 'Required');
		if($this->form_validation->run() == false){
			$title['title'] = 'Edit Mahasiswa';
			$this->load->view('template/header', $title);
			$this->load->view('template/sidebar', $title);
			$this->load->view('edit', $data);
			$this->load->view('template/footer');
		}else{
			$this->m_mahasiswa->UbahDataMahasiswa();
			$this->session->set_flashdata('message', '<div 
			class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>Data Berhasil Diedit!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
				</button>
			  </div>');
			redirect('mahasiswa/index');
		}
	}
	public function detail($id){
		$title['title'] = 'Detail Mahasiswa';
		$detail = $this->m_mahasiswa->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template/header', $title);
		$this->load->view('template/sidebar', $title);
		$this->load->view('detail', $data);
		$this->load->view('template/footer');
	}
}
?>