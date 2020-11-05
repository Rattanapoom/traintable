<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_train extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
	}

	
	public function index()
	{
		$result['ct'] = $this->menu_model->showtrain();
		$this->load->view('index',$result);
	}

	public function insert(){
			$data = array(
				'train_id' => $this->input->post("train_id"),
				's_station' => $this->input->post("s_station"),
				's_out'=> $this->input->post("s_out"),
				'h_in'=> $this->input->post("h_in"),
				'h_out'=> $this->input->post("h_out"),
				'f_station'=> $this->input->post("f_station"),
				'f_in'=> $this->input->post("f_in"),
				'type'=> $this->input->post("type")
			);
			// $this->Menu->menu_insert($data);
				$this->menu_model->newtrain($data);
				$this->load->view('index');
				// $this->load->view('view_insert_successwithmenulink');
		}
		public function formadd()
	{
		$this->load->view('addta');
	}

	}
