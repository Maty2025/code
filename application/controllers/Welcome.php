<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        $this->load->model('Modele');
	    $resultats = $this->Modele->listmedicament();
	    
        
		$this->load->view('acceuil',compact('resultats'));

	}
}
