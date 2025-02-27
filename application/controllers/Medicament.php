<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicament extends CI_Controller {

	public function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        $nomMedicament = $this->input->POST('rm');
       
		
        $this->load->model('Modele');
	    $resultats = $this->Modele->listmedica($nomMedicament);
		$this->load->view('vuemedicament',compact('resultats'));
        
		// $this->load->view('entete');
		//$this->load->view('rechercheMed',compact('resultats'));
        //$this->load->view('pieds');
	}
}
