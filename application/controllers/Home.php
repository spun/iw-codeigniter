<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("Mascotas_m", '', TRUE);
	}


	public function index()
	{

		// contenedor de datos
		$data["titulo"] = "Bienvenido a mi primer CI";

		$data['mascotas'] = $this->Mascotas_m->get_all();

		$this->load->view('home/index', $data);
	}
}
