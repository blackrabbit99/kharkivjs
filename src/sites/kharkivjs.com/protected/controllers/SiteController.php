<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
    
    public function actionRegistration(){
        $model = new RegisterUser();
        
        
        if(isset($_POST['RegisterUser']))
        {
            $model->attributes=$_POST['RegisterUser'];
            
            $status = false;
                
            if($model->validate()){    
                $status = $model->save();              
                
                if($status){
                    Yii::app()->request->redirect("/thank-you-for-registration");
                }
            }
            
            
        }
        if(!$status){
            $this->render('registration', array( 'model' => $model));                
        }
        
        
        
            
    }

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
    
    public function actionRegistred_members()
	{
		if(!Yii::app()->user->isGuest){
            
            $criteria = new CDbCriteria;
            $members_table = new RegisterUser();
            $members = array();
            
            if($_POST["RegisterUser"]){
                
                $action = $_POST['action'];
                
                $ids = $_POST["RegisterUser"]['id'];
                foreach( $ids as $key => $value ){
                    if( $value == 1 ){
                        
                        $member = RegisterUser::model()->findByPk($key);
                        $retCode = true;
                        
                        if( $action == "approve" ){
                            
                            $member->approved = 'approved';
                            
                        }
                        else if( $action == "unapprove" ){
                            
                           $member->approved = 'unapproved';
                           
                           
                        } else if( $action == "request" ){
                            $member->sendConfirmationMessage($this);
                            
                        }
                        
                        $retCode = $member->update();
                        
                    }
                }
                
            }
            else if($_POST["Search"]){           

                
                $condition_str = " 1 ";
                $params = array();

                $condition['name'] = $_POST["name"];
                $condition['company'] = $_POST["company"];
                $condition['position'] = $_POST["position"];  

                $i = 0;
                foreach ($condition as $key => $value) {
                    if ($value != "") {

                        $condition_str .= " and " . $key . " like " . ":" . $key;
                        $params[":" . $key] = "%" . $value . "%";

                        if ($i != count($condition))
                            $i++;
                    }
                }
                $condition_str .= " and 1";
                $criteria->condition = $condition_str;
                $criteria->params = $params;

            
            }
            
            $members = $members_table->findAll($criteria);                
            $this->render('registred_members', array('members' => $members));
            //registred_members
            
            
        }
        else{
            $this->redirect('\login');
        }
         
	}
    public function actionConfirmParticipation(){
        
         $key = $_GET['key'];
         
         $member = RegisterUser::model()->find(" md5( CONCAT(email , md5( CONCAT(position ,company)), company , email)) == :md5_key", array(":md5_key" => $key));
         
         echo "<pre>";
         print_r($member);
         echo "</pre>";
         
         $this->render('thank-you-for-confirmation', array('key' => $key));
         
    }
    
    
}