<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');  
		$this->load->view('f_panel/home');
		$this->load->view('f_panel/footer'); 	
	}	
	
	public function arac()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		$this->load->view('f_panel/arac');
		$this->load->view('f_panel/footer');
	}
	
	public function ekle()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		$this->load->view('f_panel/ekle');
		$this->load->view('f_panel/footer');
	}
	
	public function kira_durum()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		$this->load->view('f_panel/kira_durum');
		$this->load->view('f_panel/footer');
	}
	
	public function kira_fiyat()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		$this->load->view('f_panel/kira_fiyat');
		$this->load->view('f_panel/footer');
	}
	
	public function bildirim()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		$this->load->view('f_panel/bildirim');
		$this->load->view('f_panel/footer');
	}
	
	public function bildirim_detay()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		$this->load->view('f_panel/bildirim_detay');
		$this->load->view('f_panel/footer');
	}
	
	public function muhasebe()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		$this->load->view('f_panel/muhasebe');
		$this->load->view('f_panel/footer');
	}
	
	public function musteriler()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		$this->load->view('f_panel/musteriler');
		$this->load->view('f_panel/footer');
	}
	
	public function musteri_detay()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		$this->load->view('f_panel/musteri_detay');
		$this->load->view('f_panel/footer');
	}
	public function firma()
	{
		$this->session_control();
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/p_nav');
		$this->load->view('f_panel/firma');
		$this->load->view('f_panel/footer');
	}
	
	
	
	
	/*  ----------- Kullanıcı Giriş ve Çıkış Sayfaları  -------- */
	public function giris()
	{
		$this->load->helper("form");
		$this->load->view('f_panel/header');
		$this->load->view('f_panel/giris');
		$this->load->view('f_panel/footer');
	}
	
	public function cikis()
	{
		$this->session->sess_destroy();
		redirect(home);
	}
	
	/*  ----------- Kullanıcı Giriş ve Çıkış Sayfaları  Sonu  -------- */
	
	/* ------------------------------------------------------  Kullanıcı GİRİŞİ ------------------------------------------- */

	public function login_control()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		if($this->form_validation->run())
		{
			$veri = array(
				'mail' => $this->input->post("mail"),
				'login' => 1
			);
			$this->session->set_userdata($veri);
			redirect('home');
		}else{
			redirect('home/giris');
		}	
	}
	public function username_check()
	{
		$this->load->model("users");
		$email = $this->input->post('email');
		$password = md5($this->input->post("password"));	
		if($this->users->login('kurum','mail','sifre',$email,$password))
		{
			return true;
		}else{
			return false;
		}	
	}
	public function session_control()
	{
		if(!$this->session->userdata("login"))
		{
			redirect('home/giris');
		}
	}
	/* ------------------------------------------------------  Kullanıcı GİRİŞİ Sonu ------------------------------------ */

	
	
}