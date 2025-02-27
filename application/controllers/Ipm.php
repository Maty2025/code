<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ipm extends CI_Controller {


	public function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        $nomIpm = $this->input->POST('sa');
    
        $this->load->model('Modele');


	    $resultats = $this->Modele->listipm($nomIpm);
		
		$this->load->view('vueipm',compact('resultats'));
       
	}
}
