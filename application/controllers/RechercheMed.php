<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RechercheMed extends CI_Controller {


	public function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        $typemed = $this->input->POST('typemed');
		$ville = $this->input->POST('ville');
       
        $this->load->model('Modele');
	    $results = $this->Modele->listeMed($typemed,$ville);
		//$this->load->view('Acceuil',compact('results'));
        
		$this->load->view('entete');
		$this->load->view('rechercheMed',compact('results'));
        $this->load->view('pieds');
	}
}
