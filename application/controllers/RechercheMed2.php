<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RechercheMed2 extends CI_Controller {


	public function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        
      
        $typemed = $this->input->GET('tyid');
            echo $typemed;
       
        $this->load->model('Modele');
	    $results = $this->Modele->listeMed2($typemed);
		$resultTDs = $this->Modele->listtypeMed();
        
		$this->load->view('entete');
		$this->load->view('listMedall',compact('results','resultTDs'));
        $this->load->view('pieds');
	}
}
