<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Servis_model');

	}

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/
	public function index()
	{
		$this->load->view('welcome_message');
	}

	function konfirmasi(){
		$data = array (
			'nama' => $this->input->post('nama'),
			'no_nota' => $this->input->post('no_nota')
		);
		//$id=(null!==$this->input->post('konfirmtrue'))?true:false;
		$datass = $this->Servis_model->getOne($data['no_nota']);

		if($this->input->post('konfirmtrue')==1){

			if($datass->nama_pelanggan == $data['nama'] ){
				$this->Servis_model->updateStatusOk($data['no_nota']);

				$this->session->set_flashdata(array('class'=>'success','alert'=>'Berhasil','message'=>'Konfirmasi Berhasil'));
				redirect(base_url('welcome/'));
			}else{
				$this->session->set_flashdata(array('class'=>'danger','alert'=>'Berhasil','message'=>'Data yang anda inputkan salah'));
				redirect(base_url('welcome/'));
			}
		}elseif($this->input->post('konfirmfalse')==0){
			if($datass->nama_pelanggan == $data['nama']){
				$this->Servis_model->updateStatusGagal($data['no_nota']);

				$this->session->set_flashdata(array('class'=>'success','alert'=>'Berhasil','message'=>'Servis Anda Dibatalkan'));
				redirect(base_url('welcome/'));

			}
			$this->session->set_flashdata(array('class'=>'danger','alert'=>'Berhasil','message'=>'Data yang anda inputkan salah'));
			redirect(base_url('welcome/'));
		}else{

		}
	}
}
