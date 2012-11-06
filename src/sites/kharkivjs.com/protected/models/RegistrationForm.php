<?php

/**
 * RegistrationForm class.
 * RegistrationForm is the data structure for keeping
 * registration of partner.
 */

class RegistrationForm extends CActiveRecord {
    public $name;
    public $company;
    public $position;
    public $email;
    public $confirmation;
    public $approved;
    public $verifyCode;
    
    public function rules(){
        return array(
            array('name, company, position, email','required'),
            array('email', 'email'),
            array('email', 'unique'),
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
            
        );
    }
    public function attributeLabels()
	{
		return array(
            'name'=> 'Your Name',
			'verifyCode'=>'Verification Code',
		);
	}
    public function tableName()
    {
        return 'member';
    }
}

?>
