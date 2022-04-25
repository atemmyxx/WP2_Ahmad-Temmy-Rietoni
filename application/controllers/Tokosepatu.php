<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class tokosepatu extends CI_Controller
 {
     public function __construct(){
        parent::__construct();
     }
     public function index()
     {
         $this->load->view('view-form-tokosepatu');
     }
     public function cetak()
     {
         $this->load->model(['ModelSepatu']);
         $data = [
             'nama' => $this->input->post('nama'),
             'no' => $this->input->post('no'),
             'merk' => $this->input->post('merk'),
             'ukuran' => $this->input->post('ukuran'),
             'harga' => $this->ModelSepatu->getHarga($this->input->post('merk'))
         ];
         $this->load->view('datatokosepatu', $data);
     }
 }



?>