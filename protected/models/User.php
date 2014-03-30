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
        
//моё--------------------------------------------------------------------------------------
        public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tbGroups' => array(self::HAS_MANY, 'TbGroup', 'g_admin'),
			'tbGroups1' => array(self::HAS_MANY, 'TbGroup', 'g_user'),
			'tbMilestones' => array(self::HAS_MANY, 'TbMilestone', 'm_responsible'),
			'tbMilestones1' => array(self::HAS_MANY, 'TbMilestone', 'm_author'),
			'tbProjects' => array(self::HAS_MANY, 'TbProject', 'pr_user'),
			'tbSubtasks' => array(self::HAS_MANY, 'TbSubtask', 'st_responsible'),
			'tbTasks' => array(self::HAS_MANY, 'TbTask', 't_responsible'),
			'tbTasks1' => array(self::HAS_MANY, 'TbTask', 't_author'),
			'tbTeams' => array(self::HAS_MANY, 'TbTeam', 'team_user'),
			'tbTimers' => array(self::HAS_MANY, 'TbTimer', 'timer_responsible'),
		);
	}
        public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'u_name' => 'U Name',
			'u_login' => 'U Login',
			'u_password' => 'U Password',
			'role_type' => 'Role Type',
		);
	}
        public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('u_name',$this->u_name,true);
		$criteria->compare('u_login',$this->u_login,true);
		$criteria->compare('u_password',$this->u_password,true);
		$criteria->compare('role_type',$this->role_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
 //-----------------------------------------------------------------------------------------
    }
?>