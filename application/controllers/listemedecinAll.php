<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listemedecinAll extends CI_Controller {


	public function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        
       
        $this->load->model('Modele');
	    $results = $this->Modele->listmedecinAll();
		$resultTDs = $this->Modele->listtypeMed();
        
		$this->load->view('entete');
		$this->load->view('listMedall',compact('results','resultTDs'));
        $this->load->view('pieds');
	}
}
