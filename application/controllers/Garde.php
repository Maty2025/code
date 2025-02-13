<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garde extends CI_Controller {


	public function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        
       
        $this->load->model('Modele');


	    $resultats = $this->Modele->listgarde();
		
        
		$this->load->view('vuegarde',compact('resultats'));
       
	}
}
