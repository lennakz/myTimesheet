<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		
//		Default code for demo/demo or admin/admin		
//		$users=array(
//			// username => password
//			'demo'=>'demo',
//			'admin'=>'admin',
//		);
//		if(!isset($users[$this->username]))
//			$this->errorCode=self::ERROR_USERNAME_INVALID;
//		elseif($users[$this->username]!==$this->password)
//			$this->errorCode=self::ERROR_PASSWORD_INVALID;
//		else
//			$this->errorCode=self::ERROR_NONE;
//		return !$this->errorCode;
		
		// CUserIndentity stores entered username and password in $this->username and $this->password
		$user = User::model()->findByAttributes(array('username'=>$this->username));
		
		if ($user===null) 
		{ 
			// No user found!
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		} 
		else if ($user->password !== $this->password )
		{	
			// Invalid password!
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else 
		{ 
			// Okay!
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}