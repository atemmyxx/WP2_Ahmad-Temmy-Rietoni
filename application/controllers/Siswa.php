
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Siswa extends CI_Controller {
 
	public function index()
	{
		$this->load->view('view-form-siswa');
    }
    public function cetak()
	{
        $this->form_validation->set_rules('nama','Nama','required|min_length[3]',
        [
            'required' => 'nama harus diisi!',       
        ]);
		$this->form_validation->set_rules('nis','NIS','required|min_length[8]', 
        [
            'required' => 'nis harus diisi!'
        ]);
        $this->form_validation->set_rules('kelas','Kelas','required|max_length[2]',
        [
            'required' => 'kelas harus diisi!'
        ]);
        $this->form_validation->set_rules('tgllahir','Tanggal Lahir','required',
        [
            'required' => 'tanggal lahir harus diisi!'
        ]);
        $this->form_validation->set_rules('tmplahir','Tempat Lahir','required|min_length[2]',
        [
            'required' => 'tempat lahir harus diisi!'
        ]);
        $this->form_validation->set_rules('alamat','Alamat','required|min_length[8]',
        [
            'required' => 'alamat harus diisi!'
        ]);
    

		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',
        [
            'required' => 'jenis kelamin harus diisi!'
        ]);
		$this->form_validation->set_rules('agama','Agama','required',
        [
            'required' => 'agama harus diisi!'
        ]);
	
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