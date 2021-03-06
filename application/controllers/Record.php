<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Record extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index(){
		$this->mViewData['data'] = $this->user_model->get_all_billing_info();
		$this->render("list");
	}


	public function delete_data($id)
	{
		$data = $this->user_model->delete_record($id);
		if($data){
			$this->mViewData['data'] = $this->user_model->get_all_billing_info();
			$this->render("list");
		}
	}
}
