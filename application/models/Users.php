<?php 

class users extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
	
	/* 
		Örnek Kullanýlýþý ; 
		$this->load->model("users");
		
		$email = $this->input->post('email');
		$password = md5($this->input->post("password"));
				
		if($this->users->login('kurum','mail','sifre',$email,$password))
		.........
		....
		...
	*/
	public function login($tablo, $kullanici, $sifre, $post1, $post2)
	{
		$this->db->where("$kullanici", "$post1");
		$this->db->where("$sifre", "$post2"); 
		$query = $this->db->get($tablo);	
		if($query->num_rows() == 1)
		{
			return true;
		}else{
			return false;
		}
	}
}
	



?>