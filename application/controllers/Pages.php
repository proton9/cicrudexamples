<?php

class Pages extends CI_Controller {
	public function __construct(){
		parent::__construct();	
		$this->load->model('training_model');
	}

	public function insertEmp(){
		//create a model for this insert and load it here
			$emp_name = $this->input->post('ename');
			$emp_city = $this->input->post('ecity');
			$emp_dep = $this->input->post('edep');
			$emp_age = $this->input->post('eage');
			$emp_sex = $this->input->post('esex');
						
			//echo "does this work";
			//echo $emp_name ." <br> ". $emp_age ." <br> ". $emp_city . "<br>  ". $emp_dep;
			$this->training_model->set_emp($emp_name,$emp_age, $emp_city,$emp_dep,$emp_sex);
			$this->employees();	



	}

	public function employees (){
	
		// if (APPPATH.'pages/employees.php'){
			#parent::__construct();
			$data['cities'] = $this->training_model->get_city();
			$data['departments'] = $this->training_model->get_department();
	

			$this->load->view('templates/header');
			$data['emps'] = $this->training_model->get_emps();
			$this->load->view('pages/datatable');
			//$this->load->view('pages/employees',$data);
			$data['cities'] = $this->training_model->get_city();
			$data['departments'] = $this->training_model->get_department();
			$this->load->view('pages/addemp',$data);
			$this->load->view('templates/footer');
		


		// } else{
	
		#if (!file_exists(APPPATH.'pages/'.$page.'.php'))
	#	{
	#	show_404();
	#	}
		
		#$data['title']=ucfirst($page);
		
			// $this->load->view('templates/header');
			// $this->load->view('pages/'.$page);
			// $this->load->view('templates/footer');
		
		// }
	
	}
	public function getEmp(){
		$data['emps'] = $this->training_model->get_emps();

		
		//echo json_encode($emplist);
		//echo "<br> <br> <br>";
		//$earr=array(
		//	'data' =>$data
		//);
		//echo json_encode($earr);

	}
	public function empjson(){

		$emplist['data']=$this->training_model->get_emps();
		
		echo json_encode($emplist);
	


	}
	 
	public function dt(){
		$this->load->view('pages/datatable');
	}

	public function home(){
		$this->load->view('templates/header');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}
	public function about(){
		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}
}

?>

