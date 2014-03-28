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
                array('u_name', 'required', 'message' => '���� ��������� �� ������ ���� ������'),
                array('u_login', 'required', 'message' => '���� ������ �� ������ ���� ������'),
                array('u_password', 'required', 'message' => '���� ������ �� ������ ���� ������'),
                
                array('u_name', 'removeNumeric'),
                array('u_login', 'unique', 'message' => '����� ����� ��� ����������. ���������� ������.'),
                
                array('u_login', 'email',
                    'fullPattern' => '^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$',
                    'message' => 'EMail �� ���������'),
                
                array('u_password', 'length', 
                    'min' => 6, 
                    'message' => '������� �������� ������, �� ������ 6 ��������')
            );
        }
        
        public function removeNumeric($attribute, $params) {
            preg_match("/[\d]+/", $this->u_name, $match);
            
            if(count($match) != 0) {
                $this->addError('u_name', '��� �� ����� ��������� �����');
            }
        }
    }
?>