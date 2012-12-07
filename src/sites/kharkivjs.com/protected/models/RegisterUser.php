<?php

/**
 * RegistrationForm class.
 * RegistrationForm is the data structure for keeping
 * registration of partner.
 */

class RegisterUser extends CActiveRecord {
    public $id;
    public $name;
    public $company;
    public $position;
    public $email;
    public $confirmation;
    public $approved;
    public $verifyCode;
    
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function rules(){
        return array(
            array('name, company, position, email','required'),
            array('email', 'email'),
            array('email', 'unique'),
//            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),
            
        );
    }
    public function attributeLabels()
	{
		return array(
            'name'=> 'Your Name',
			'verifyCode' => 'Verification Code',
        );
    }

    public function tableName() {
        return 'member';
    }
    public function primaryKey() {
        
        return 'id';

    }
    
    
    public function sendInformationMessage($controller)
    {
        $message = new YiiMailMessage();

        $message->setBody($controller->renderPartial(Yii::app()->params['information']['message_view'], array(), true), 'text/html');
        $message->subject = Yii::app()->params['information']['subject'];
        $message->addTo($this->email);
        $message->from = Yii::app()->params['adminEmail'];
        Yii::app()->mail->send($message);
    }
    
    public function sendConfirmationMessage($controller)
    {
        $message = new YiiMailMessage();
        $key = md5($this->email . md5($this->position . $this->company) . $this->company . $this->email);

        $message->setBody($controller->renderPartial(Yii::app()->params['confirmation']['message_view'], array('key' => $key), true), 'text/html');
        $message->subject = Yii::app()->params['confirmation']['subject'];
        $message->addTo($this->email);
        $message->from = Yii::app()->params['adminEmail'];
        Yii::app()->mail->send($message);
    }
    
    public function approveConfirmation(){
        $this->confirmation = true;
    }
    
    public function findAll($condition = '', $params = array()) {
        return parent::findAll($condition, $params);
    }
    public function findByPk($pk, $condition = '', $params = array()) {
        return parent::findByPk($pk, $condition, $params);
    }
    

}

?>
