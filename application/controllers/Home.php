<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		//$this->load->view('home');
	
		//$this->load->view('f_panel/giris');
		//$this->load->view('f_panel/arac');
		
		//$this->load->view('f_panel/ekle'); 
		//$this->load->view('f_panel/kira_durum'); 
		//$this->load->view('f_panel/kira_fiyat'); 
		//$this->load->view('f_panel/bildirim'); 
		//$this->load->view('f_panel/bildirim_detay'); 
		
		$this->load->view('f_panel/muhasebe'); 
		
		$this->load->view('f_panel/footer'); 
		
	}
}
