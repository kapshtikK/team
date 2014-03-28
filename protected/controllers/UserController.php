<?php
    class UserController extends CController
    {        
        public function actionInput(){
            $userInput = new UserInput();
            
            if(isset($_POST['UserInput'])) {
                $userInput->rememberMe = isset($_POST['rememberMe']) ? $_POST['rememberMe'] : 0;                
                $userInput->attributes = $_POST['UserInput'];
                
                if($userInput->validate() && $userInput->input()) {
                    $this->render('index');
                }
            }
            
            $this->render('input', array('model' => $userInput));
        }
        
        public function actionRegistration() {
            $userReg = new UserRegistration();
            
            if(isset($_POST['UserRegistration'])) {
                $userReg->attributes = $_POST['UserRegistration'];
                
                if($userReg->validate()) {
                    $userReg->u_password = md5($userReg->u_password);
                    $userReg->role_type = 1;
                    
                    if($userReg->save()) {
                        $this->render('currentRegistration', array('user' => $userReg));
                    }
                }
            }
            
            $this->render('registration', array('model' => $userReg));
        }
        
        public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        
        public function beforeSave()
        {
            $this->u_password = md5($this->u_password);
            return parent::beforeSave();
        }
    }
?>