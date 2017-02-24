<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		//Home Page
		$data['title'] = 'Bincom Online Test';
		$data['heading'] = 'Bincom Online Test';
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function question($question_id)
	{
		//Question Selection
		$this->load->model('homes_model');

		switch($question_id){

			case 1:
				$data['title'] = 'Question 1';
				$data['heading'] = 'Bincom: Question 1 Solution';
				$data['polling_units'] = $this->homes_model->get_pu();
				$this->load->view('header', $data);
				$this->load->view('ques1', $data);
				$this->load->view('footer');
			break;

			case 2:
				$data['title'] = 'Question 2';
				$data['heading'] = 'Bincom: Question 2 Solution';
				$data['lga'] = $this->homes_model->get_lga();
				$this->load->view('header', $data);
				$this->load->view('ques2', $data);
				$this->load->view('footer');
			break;

			case 3:
				$data['title'] = 'Question 3';
				$data['heading'] = 'Bincom: Question 3 Solution';
				//$data['lga'] = $this->homes_model->get_lga();
				$this->load->view('header', $data);
				$this->load->view('ques3', $data);
				$this->load->view('footer');
			break;

			default:
		}
	}

	public function pu($pu_id)
	{
		//Get polling unit by id
		$this->load->model('homes_model');

		$data['title'] = 'Question 1';
		$data['heading'] = 'Bincom: Question 1 Solution';
		$data['pu'] = $this->homes_model->get_pu($pu_id);
		$data['polling_unit'] = $this->homes_model->get_pu_result($pu_id);

		$this->load->view('header', $data);
		$this->load->view('pu', $data);
		$this->load->view('footer');

	}

	public function lga($lga_id)
	{
		//Get LGA polling unit sum
		$this->load->model('homes_model');

		$data['title'] = 'Question 2';
		$data['heading'] = 'Bincom: Question 2 Solution';
		$data['lg'] = $this->homes_model->get_lga($lga_id);
		$lga = $this->homes_model->get_lga_pu($lga_id);

		//Store sum of each LGA polling unit result
		$lga_pu_total = array();
		foreach($lga as $lg)
		{
			$pu_name = $lg['polling_unit_name'];
			$pu_id = $lg['uniqueid'];
			$pu_total = $this->homes_model->get_lga_pu_total($pu_id);
			$pu_total = $pu_total[0]['party_score'];
			$lga_pu_total[$pu_name] = $pu_total;
		}

		$data['lg_pu_total'] = $lga_pu_total;
		$this->load->view('header', $data);
		$this->load->view('lga', $data);
		$this->load->view('footer');

	}
}
