
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Siswa extends CI_Controller {
 
	public function index()
	{
		$this->load->view('view-form-siswa');
    }
    public function cetak()
	{
        $this->form_validation->set_rules('nama','Nama','required|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('nis','NIS','required');
        $this->form_validation->set_rules('kelas','Kelas','required');
        $this->form_validation->set_rules('tgllahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('tmplahir','Tempat Lahir','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('agama','Agama','required');
	
        if ($this->form_validation->run()==true)
        {
            $data['nama'] = $this->input->post('nama');
            $data['nis'] = $this->input->post('nis');
            $data['kelas'] = $this->input->post('kelas');
            $data['tgllahir'] = $this->input->post('tgllahir');
            $data['tmplahir'] = $this->input->post('tmplahir');
            $data['alamat'] = $this->input->post('alamat');
            $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
            $data['agama'] = $this->input->post('agama');

            $this->load->view('datasiswa',$data);
        } else{
            $this->load->view('view-form-siswa');
        }

    }

}