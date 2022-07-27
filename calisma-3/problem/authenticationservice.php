<?php
/**
 * 
 */
class AuthenticationService
{

	private $postData;
    private $password = "827ccb0eea8a706c4c34a16891f84e7b";
    private $username = "Sena";

	function __construct($postData)
	{
		session_start();

		$this->postData = $postData;

	}

	public function check(){
    if($this->postData["username"]==$this->username&& md5($this->postData["password"])==$this->password){
    	return true ;
 
    }
    else{
    	
    	    return false;
    	    }

        
   }
   public function isLogin(){
   return isset($_SESSION["user"]);

   }
   
   public function startSession(){
   	$_SESSION["user"]=$this->username;
   }

   

}




?>

