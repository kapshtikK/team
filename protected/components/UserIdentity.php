<?php
    class UserIdentity extends CUserIdentity 
    {
        protected $_id;
        
        public $u_login;
        public $u_password;
        
        public function __construct($u_login, $u_password) {
            $this->u_login = $u_login;
            $this->u_password = $u_password;
        }

        public function authenticate(){
            $user = UserInput::model()->find('u_login=?', array($this->u_login));

            if(($user === null) || (md5($this->u_password)!== $user->u_password)) {
                $this->errorCode = self::ERROR_USERNAME_INVALID;
            } else {
                $this->_id = $user->id;
                $this->u_login = $user->u_login;
                $this->setState('name', $user->u_name);
                $this->errorCode = self::ERROR_NONE;
            }
            return !$this->errorCode;
        }

        public function getId(){
            return $this->_id;
        }
    }
?>