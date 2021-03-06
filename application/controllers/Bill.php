<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Bill extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper(array('form', 'url'));
 		$this->load->library('form_validation');

	}

	public function index(){
		$this->render('login');
	}
	public function login(){
		$meter_num = $_POST['meter_number'];
		$phone_num = $_POST['phone'];
		$this->form_validation->set_rules('meter_number','meter_number','trim|required');
		//$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/^[0-9]{10}$/]');

		if ($this->form_validation->run() == FALSE){
			$this->mViewData['data']= $_POST;
			$this->render('login');
		}
		else{
			$data = $this->user_model->is_login($meter_num,$phone_num);
			if(!empty($data)){
				$this->genrate_pdf($data);
			}else{
				echo "error";
			}
		}
	}

       public function genrate_pdf($data){
		$result['data']= $data[0];
		$html = $this->load->view('bill_genrate',$result,true);
        
        $pdfFilePath = $data[0]['id'].'.pdf';

        //load mPDF library
		$this->load->library('m_pdf');
       	$this->m_pdf->pdf->WriteHTML($html);
		$this->m_pdf->pdf->Output(FCPATH.'assets/uploads/'.$pdfFilePath,'F');
		$this->load->view('bill_genrate',$result);

	}
}
