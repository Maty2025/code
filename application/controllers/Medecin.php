<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medecin extends CI_Controller {


	public function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        
       
        $this->load->model('Modele');


	    $resultats = $this->Modele->listmedecin();
		
        
		$this->load->view('vuemedecin',compact('resultats'));
       
	}
}
