<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper(array('form', 'url'));
 		$this->load->library('form_validation');

	}
	public function index(){
			
		$this->render("registration_view");

	}

	public function register(){

		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('father_name','Fathers name','trim|required');

		$this->form_validation->set_rules('address', 'Address', 'required');

		$this->form_validation->set_rules('phone', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number
		$this->form_validation->set_rules('zipcode', 'Zipcode', 'required');

		$this->form_validation->set_rules('dob', 'DOB', 'required');
		$this->form_validation->set_rules('meter_number', 'Meter Number', 'required');
		$this->form_validation->set_rules('zone_number', 'Zone Number', 'required');
		$this->form_validation->set_rules('meter_reading', 'Meter Reading', 'required');


		



		if ($this->form_validation->run() == FALSE)
		{
			$this->render("registration_view");
		}
		else
		{
	        $name = explode(' ', $_POST['name'],2);
			$_POST['first_name'] = $name[0];
			$_POST['last_name']  = $name[1];
			$_POST['inserted_date'] = now();
			$_POST['update_date'] = now();
			if($this->checkMobile($_POST['phone'])){
				$this->session->set_flashdata('error', 'Record Already exists');
				$this->mViewData['data']= $_POST;
				$this->render("registration_view");
			}else{
				unset($_POST['name']);
				$flag = $this->user_model->save_details($_POST);
				redirect('record');
			}
			
		}
	

	}

	public function checkMobile($number){
		$flag = $this->user_model->phone_exist_or_not($number);
		return $flag;
	}

	
}
?>