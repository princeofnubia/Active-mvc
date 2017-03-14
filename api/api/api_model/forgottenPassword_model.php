<?php

class ForgottenPassword_model extends Api_model{
	const NO_MAIL_EXIST = 31;
	protected $table = 'User';
	protected $fillable = ["email","password","createdBy","userType","userRelatesTo","status"];
	public function __construct(){
		parent::__construct();
	}

	public function verifyEmail($email){
		$user = self::where('email', $email)->first();
		if ($user) {
			return $user['email'];
		}
		else{
		   throw new Exception("",self::NO_MAIL_EXIST);
		}												
	}

}