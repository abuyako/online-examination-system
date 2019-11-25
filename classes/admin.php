<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
class Admin{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function getAdminData($data){
		$adminUser = $this->fm->validation($data['username']);
		$adminPass = $this->fm->validation($data['password']);
		$adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
		$adminPass = mysqli_real_escape_string($this->db->link, md5($adminPass));
		
		$query = "select * from admin where username = 'abuyako' and password = '12345'";
		$result = $this->db->select($query);
		if($result !=false){
			$value = $result->fetch_assoc();
			Session::init();
			Session::set("fix02",true);
			Session::init("username",$value['username']);
			Session::init("password",$value['password']);
			header("Location:index.php");
			
		}else{
			$msg = "<span class='error'>Username/Password Not Matched!!!!</span>";
			return $msg;
		}
		
	}
}
?>