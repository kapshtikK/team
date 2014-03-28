<?php
    class User extends CActiveRecord
    {
        public $u_name;
        public $u_login;
        public $u_password;
        public $role_type;
        
        public static function model($className = __CLASS__) {
            return parent::model($className);
        }
        
        public function tableName() {
            return 'tb_user';
        }
        
        public function rules(){
            return array(
                array('u_name', 'required', 'message' => 'Поле инициалов не должно быть пустое'),
                array('u_login', 'required', 'message' => 'Поле логина не должно быть пустое'),
                array('u_password', 'required', 'message' => 'Поле пароля не должно быть пустое'),
                
                array('u_name', 'removeNumeric'),
                array('u_login', 'unique', 'message' => 'Такой логин уже существует. Придумайте другой.'),
                
                array('u_login', 'email',
                    'fullPattern' => '^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$',
                    'message' => 'EMail не корректен'),
                
                array('u_password', 'length', 
                    'min' => 6, 
                    'message' => 'Слишком короткий пароль, не меньше 6 символов')
            );
        }
        
        public function removeNumeric($attribute, $params) {
            preg_match("/[\d]+/", $this->u_name, $match);
            
            if(count($match) != 0) {
                $this->addError('u_name', 'Имя не может содержать цифры');
            }
        }
    }
?>