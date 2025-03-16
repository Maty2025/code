<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicament extends CI_Controller {

	public function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        $nomMedicament = $this->input->POST('libelle_medicament');
		//$ville = $this->input->POST('ville');
       
        $this->load->model('Modele');
	    $resultats = $this->Modele->Recherchemedicos($nomMedicament);
		//$this->load->view('Acceuil',compact('resultats'));
        
		//$this->load->view('entete');
		$this->load->view('rechercheMed',compact('resultats'));
        //$this->load->view('pieds');
	}
}
