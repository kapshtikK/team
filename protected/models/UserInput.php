<?php
    class UserInput extends CActiveRecord
    {
        public $u_name;
        public $u_login;
        public $u_password;
        public $role_type;
        
        public $rememberMe;
        public $_identity;
        
        const ROLE_ADMIN = "Administrator";
        const ROLE_MANAGER = "Manager";
        const ROLE_PARTY = "Party";
        const ROLE_USER = "User";
        const ROLE_GUEST = "Guest";
        
        public static function model($className = __CLASS__) {
            return parent::model($className);
        }
        
        public function tableName() {
            return 'tb_user';
        }
        
        public function rules()
	{
            return array(
                array('u_login, u_password', 'required'),
                array('u_login', 'equalsLogin'),
                array('u_password', 'authenticate'),
            );
	}
        
        public function equalsLogin($attribute, $params) {
            $getLogin = UserInput::model()->find('u_login = :u_login', array(':u_login' => $this->u_login));
            
            if(!isset($getLogin))
                $this->addError('u_login', 'Неверный логин');
        }
        
        public function authenticate($attribute,$params)
	{
            if(!$this->hasErrors())
            {
                $this->_identity = new UserIdentity($this->u_login, $this->u_password);
                if(!$this->_identity->authenticate())
                    $this->addError('u_password', 'Неверный пароль');
            }
	}
        
	public function input()
	{
            if($this->_identity===null)
            {
                $this->_identity = new UserIdentity($this->u_login, $this->u_password);
                $this->_identity->authenticate();
            }
            
            if($this->_identity->errorCode === UserIdentity::ERROR_NONE)
            {
                $duration = $this->rememberMe ? 3600*24*30 : 0;
                Yii::app()->user->login($this->_identity, $duration);
                return true;
            }
            else
                return false;
	}
    }
?>