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
		$user = Utenti::model()->findByAttributes(array('Email'=>$this->username, 'Password'=>$this->password ));
		if($user)
		{
			Yii::app()->user->setState('username',$user->Nome);
			Yii::app()->user->setState('PRO',$user->Pro);
			Yii::app()->user->setState('ID',$user->ID);
			Yii::app()->user->setState('returnUrl',"/");
			$this->errorCode = 0;
		}
		else $this->errorCode = self :: USERNAME_PASSWORD_INVALID;
	}
}